<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function cart()
    {
        return view('payment.cart.index');
    }

    public function checkout()
    {
        return view('payment.checkout.index');
    }
}
