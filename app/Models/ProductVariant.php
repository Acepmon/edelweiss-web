<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $connection = 'mysql_admin';
    protected $table = 'products_variants';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\CommonCode', 'variant_type', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'C02');
    }
}
