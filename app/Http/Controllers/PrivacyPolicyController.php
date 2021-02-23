<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $policy = null;

        return view('privacy-policy.index', [
            'policy' => $policy
        ]);
    }
}
