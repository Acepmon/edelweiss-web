<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $connection = 'mysql_admin';
    protected $table = 'categories';
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }
}
