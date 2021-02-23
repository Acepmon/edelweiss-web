<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('location_cd', '10')->where('status_cd', '20')->get();

        return view('pages.index', [
            'banners' => $banners
        ]);
    }
}
