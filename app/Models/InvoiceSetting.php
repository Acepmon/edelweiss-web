<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSetting extends Model
{
    use HasFactory;

    protected $table = 'invoices_settings';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = true;
    public $incrementing = true;
    protected $guarded = [];
}
