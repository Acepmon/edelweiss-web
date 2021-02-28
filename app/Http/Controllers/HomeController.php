<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('location_cd', '10')->where('status_cd', '20')->get();
        $featuredProducts = Product::inRandomOrder()->take(10)->get();
        $topRatedProducts = Product::inRandomOrder()->take(3)->get();
        $onSaleProducts = Product::inRandomOrder()->take(3)->get();
        $recommendedProducts = Product::inRandomOrder()->take(3)->get();
        $popularProducts = Product::inRandomOrder()->take(3)->get();

        $categories = Category::whereNull('parent_id')->take(4)->get();

        return view('home.index', [
            'banners' => $banners,
            'featuredProducts' => $featuredProducts,
            'topRatedProducts' => $topRatedProducts,
            'onSaleProducts' => $onSaleProducts,
            'recommendedProducts' => $recommendedProducts,
            'popularProducts' => $popularProducts,
            'categories' => $categories
        ]);
    }
}
