<?php

namespace App\Repositories\Interfaces;

use App\Models\Page;

interface PageRepositoryInterface
{
    public function all();

    public function getBySlug(String $slug);
}