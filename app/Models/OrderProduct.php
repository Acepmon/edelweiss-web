<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'orders_products';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = false;
    // public $incrementing = false;
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
