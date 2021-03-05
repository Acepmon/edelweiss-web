<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function callback(Request $request, $paymentId)
    {
        return view('checkout.index');
    }
}
