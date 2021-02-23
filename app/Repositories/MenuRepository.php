<?php

namespace App\Repositories;

use App\Models\Menu;
use App\User;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface
{
    public function all()
    {
        return Menu::where('status', Menu::STATUS_ACTIVE)->get();
    }

    public function getRootMenus()
    {
        return Menu::where('status', Menu::STATUS_ACTIVE)->whereNull('parent_id')->get();
    }
}