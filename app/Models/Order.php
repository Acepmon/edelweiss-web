<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    // public $timestamps = true;
    // public $incrementing = false;

    public function products()
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }

    public function shipping()
    {
        return $this->hasOne(OrderShipping::class, 'order_id');
    }

    public function billing()
    {
        return $this->hasOne(OrderBilling::class, 'order_id');
    }
}
