<?php

namespace App\Repositories;

use App\Models\Page;
use App\User;
use App\Repositories\Interfaces\PageRepositoryInterface;

class PageRepository implements PageRepositoryInterface
{
    public function all()
    {
        return Page::where('status_cd', '20')->get();
    }

    public function collectionPages()
    {
        return Page::where('status_cd', '20')->where('type_cd', 20)->with(['collection', 'collection.products', 'collection.products.category'])->get();
    }

    public function staticPages()
    {
        return Page::where('status_cd', '20')->where('type_cd', 10)->get();
    }

    public function getBySlug(String $slug)
    {
        return Page::where('status_cd', '20')->where('slug', $slug)->with(['collection', 'collection.products', 'collection.products.category'])->first();
    }
}