<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection = 'mysql_admin';

    public function product_status()
    {
        return $this->belongsTo('App\Models\CommonCode', 'product_status_cd', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'C01');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function collections()
    {
        return $this->belongsToMany('App\Models\Collection', 'collections_products');
    }

    public function seo()
    {
        return $this->hasOne('App\Models\ProductSeo');
    }

    public function variants()
    {
        return $this->hasMany('App\Models\ProductVariant');
    }

    public function getThumbnailAttribute()
    {
        return url(asset('images/flowers/0.jpeg'));
    }
}
