<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Page;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class CollectionController extends Controller
{
    public function index(Request $request, Page $page, Collection $collection)
    {
        SEOTools::setTitle($collection->seo->seo_title);
        SEOTools::setDescription($collection->seo->seo_desc);
        SEOTools::opengraph()->setUrl($collection->seo->seo_url);

        $limit = $request->input('limit', 10);
        $products = $collection->products()->with(['category'])->paginate($limit);

        return view('collection.index', [
            'page' => $page,
            'collection' => $collection,
            'products' => $products,
        ]);
    }
}
