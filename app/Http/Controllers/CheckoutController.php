<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceSetting;
use App\Models\Order;
use App\Services\Facades\Qpay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'email' => 'required|string|max:250',
            'phone_number' => 'required|string|max:250',
            'city' => 'required|string|max:250',
            'district' => 'required|string|max:250',
            'khoroo' => 'required|string|max:250',
            'address' => 'required|string|max:250',
        ]);

        $setting = InvoiceSetting::first();
        $user = Auth::user();
        $customer = $user->customer;
        $invoiceNo = $setting->prefix . $customer->id . '-' . $setting->number_sequence;

        if ($customer->invoices()->count() > 0) {
            $invoiceCnt = $customer->invoices()->count() + 1;
            $invoiceNo = $setting->prefix . str_pad($invoiceCnt, $setting->sequence_character, "0", STR_PAD_LEFT);
            // $invoiceNo = $setting->prefix . $customer->id . '-' . (intval($setting->number_sequence) + $customer->invoices()->count());
        }

        $invoice = new Invoice();
        $invoice->invoice_no = $invoiceNo;
        $invoice->invoice_code = config('services.qpay.invoice_code');
        $invoice->invoice_id = null;
        $invoice->invoice_receiver_code = $customer->id;
        $invoice->invoice_description = 'нэхэмжлэх';
        $invoice->invoice_due_date = null;
        $invoice->expiry_date = now()->addDays(1);
        $invoice->amount = floatval(Cart::total(2, '.', ''));
        $invoice->note = '';
        $invoice->calculate_vat = true;
        $invoice->enable_expiry = false;
        $invoice->allow_partial = false;
        $invoice->allow_exceed = false;
        $invoice->save();

        $qpayResponse = Qpay::createInvoice([
            'invoice_code' => $invoice->invoice_code,
            'sender_invoice_no' => $invoice->invoice_no,
            'invoice_receiver_code' => '' . $invoice->invoice_receiver_code,
            'invoice_description' => $invoice->invoice_description,
            'invoice_due_date' => $invoice->invoice_due_date,
            'expiry_date' => $invoice->expiry_date,
            'amount' => $invoice->amount,
            'callback_url' => route('payment.callback', $invoice->invoice_no),
            'calculate_vat' => $invoice->calculate_vat,
            'enable_expiry' => $invoice->enable_expiry,
            'allow_partial' => $invoice->allow_partial,
            'allow_exceed' => $invoice->allow_exceed,
        ]);

        if ($qpayResponse->successful()) {
            $qpayJson = $qpayResponse->json();
            $invoice->invoice_id = $qpayJson['invoice_id'];
            $invoice->qr_text = $qpayJson['qr_text'];
            $invoice->qr_image = $qpayJson['qr_image'];
            $invoice->urls = json_encode($qpayJson['urls']);
            $invoice->save();

            $order = new Order();
            $order->total_amount = $invoice->amount;
            $order->order_status_cd = '10';
            $order->payment_status_cd = '50';
            $order->fulfillment_status_cd = '20';
            $order->customer_id = $customer->id;
            $order->invoice_no = $invoice->invoice_no;
            $order->email = $customer->email;
            $order->phone_number = $customer->phone_number;
            $order->notes = '';
            $order->tags = '';
            $order->save();

            foreach (Cart::content() as $item) {
                $order->products()->create([
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'price' => $item->price,
                    'total' => $item->total,
                ]);
            }

            $order->shipping()->create([
                'first_name' => $customer->first_name,
                'last_name' => $customer->last_name,
                'email' => $customer->email,
                'phone_number' => $customer->phone_number,

                'city' => $request->input('city'),
                'district' => $request->input('district'),
                'khoroo' => $request->input('khoroo'),
                'address' => $request->input('address'),
                'zipcode' => $request->input('zipcode'),
                'longitude' => $request->input('longitude'),
                'latitude' => $request->input('latitude'),
            ]);

            $order->billing()->create([
                'first_name' => $customer->first_name,
                'last_name' => $customer->last_name,
                'email' => $customer->email,
                'phone_number' => $customer->phone_number,

                'city' => $request->input('city'),
                'district' => $request->input('district'),
                'khoroo' => $request->input('khoroo'),
                'address' => $request->input('address'),
                'zipcode' => $request->input('zipcode'),
                'longitude' => $request->input('longitude'),
                'latitude' => $request->input('latitude'),
            ]);

            Cart::destroy();

            return redirect()->route('payment.invoice', $invoice)->with('success', 'Successfully created new invoice!');
        } else {
            $invoice->delete();

            return redirect()->back(422)->with('error', 'Failed to created invoice');
        }
    }
}
