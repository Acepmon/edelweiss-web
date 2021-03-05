<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $primaryKey = 'invoice_no';
    protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = true;
    public $incrementing = false;

    protected $casts = [
        'urls' => 'array',
    ];

    public function lines()
    {
        return $this->hasMany(InvoiceLine::class, 'invoice_no');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'invoice_receiver_code');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'invoice_no');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'invoice_no');
    }
}
