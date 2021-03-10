<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $connection = 'mysql_admin';

    public function isDraft()
    {
        return $this->product_status_cd == '10';
    }

    public function isActive()
    {
        return $this->product_status_cd == '20';
    }

    public function isArchived()
    {
        return $this->product_status_cd == '30';
    }

    public function searchableAs()
    {
        return config('scout.prefix') . 'products';
    }

    public function shouldBeSearchable()
    {
        return $this->isActive();
    }

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
        $rand = rand(0, 105);
        return url(asset('images/flowers/' . $rand . '.jpeg'));
    }

    public function getMediasAttribute()
    {
        $medias = [];
        for ($i=0; $i < rand(1, 5); $i++) {
            $rand = rand(1, 105);
            $img = url(asset('images/flowers/' . $rand . '.jpeg'));
            array_push($medias, $img);
        }
        return $medias;
    }
}
