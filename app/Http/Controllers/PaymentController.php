<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Services\Facades\Qpay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function invoice(Request $request, Invoice $invoice)
    {
        return view('payment.invoice', [
            'invoice' => $invoice,
            'order' => $invoice->order,
        ]);
    }

    public function callback(Request $request, Invoice $invoice)
    {
        $qpayResponse = Qpay::paymentCheck($invoice->invoice_id);

        if ($qpayResponse->successful()) {
            $payments = $qpayResponse->json();
            foreach ($payments['rows'] as $index => $payment) {
                $invoice->payments()->updateOrCreate(
                    [
                        'invoice_no' => $invoice->invoice_no,
                        'payment_id' => $payment['payment_id'],
                    ],
                    [
                        'payment_id' => $payment['payment_id'],
                        'payment_status' => $payment['payment_status'],
                        'payment_date' => now(),
                        'trx_fee' => $payment['trx_fee'],
                        'payment_amount' => $payment['payment_amount'],
                        'payment_currency' => $payment['payment_currency'],
                        'payment_wallet' => $payment['payment_wallet'],
                        'payment_type' => $payment['payment_type'],
                    ]
                );
            }

            if ($invoice->payments()->where('payment_status', 'PAID')->count() == $invoice->payments()->count()) {
                $order = $invoice->order;
                $order->payment_status_cd = '20';
                $order->save();
            }
        }
    }
}
