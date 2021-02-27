<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Page;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(Request $request, Page $page, Collection $collection)
    {
        $limit = $request->input('limit', 10);
        $products = $collection->products()->with(['category'])->paginate($limit);

        return view('collections.index', [
            'page' => $page,
            'collection' => $collection,
            'products' => $products,
        ]);
    }
}
