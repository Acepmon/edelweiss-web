<?php

namespace App\Repositories;

use App\Models\Menu;
use App\User;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface
{
    public function all()
    {
        return Menu::where('status_cd', '20')->get();
    }

    public function getRootMenus()
    {
        return Menu::where('status_cd', '20')->whereNull('parent_id')->get();
    }
}