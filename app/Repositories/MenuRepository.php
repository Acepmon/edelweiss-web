<?php

namespace App\Repositories;

use App\Models\Menu;
use App\User;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface
{
    public function all()
    {
        return Menu::all();
    }

    public function getRootMenus()
    {
        return Menu::whereNull('parent_id')->get();
    }
}