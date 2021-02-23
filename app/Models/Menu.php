<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function hasChildren(): bool
    {
        return $this->children->count() > 0;
    }
}
