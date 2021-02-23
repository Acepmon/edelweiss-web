<?php

namespace App\Repositories\Interfaces;

use App\Models\Page;

interface PageRepositoryInterface
{
    public function all();

    public function collectionPages();

    public function staticPages();

    public function getBySlug(String $slug);
}