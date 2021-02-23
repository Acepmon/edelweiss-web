<?php

namespace App\Repositories\Interfaces;

interface MenuRepositoryInterface
{
    public function all();

    public function getRootMenus();
}