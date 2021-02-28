<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        $products = Product::where('product_status_cd', '20')->get();
        $pages = Page::where('status_cd', '20')->get();

        return view('sitemap.index', [
            'collections' => $collections,
            'products' => $products,
            'pages' => $pages,
        ]);
    }
}
