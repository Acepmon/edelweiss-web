<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsConditionsController extends Controller
{
    public function index()
    {
        $terms = null;

        return view('terms-conditions.index', [
            'terms' => $terms
        ]);
    }
}
