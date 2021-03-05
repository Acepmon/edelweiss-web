<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
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

    public function callback(Request $request, $paymentId)
    {
        return view('checkout.index');
    }
}
