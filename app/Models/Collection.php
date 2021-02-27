<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $connection = 'mysql_admin';

    public function seo()
    {
        return $this->hasOne('App\Models\CollectionSeo');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'collections_products');
    }

    public function getImageAttribute($value)
    {
        return empty($value) ? asset('/images/covers/' . rand(1, 20) . '.jpg') : $value;
    }
}
