<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderShipping extends Model
{
    use HasFactory;

    protected $table = 'orders_shipping';
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
}
