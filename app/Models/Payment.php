<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_no');
    }
}
