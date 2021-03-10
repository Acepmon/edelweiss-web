<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ProductController extends Controller
{
    public function index(Request $request, Product $product)
    {
        SEOTools::setTitle($product->seo->seo_title);
        SEOTools::setDescription($product->seo->seo_desc);
        SEOTools::opengraph()->setUrl($product->seo->seo_url);

        $relatedProducts = Product::inRandomOrder()->take(9)->get();

        return view('product.index', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = Product::search($query)->paginate(12);

        $products->appends(['q' => $query]);

        return view('product.search.results', [
            'query' => $query,
            'products' => $products,
        ]);
    }
}
