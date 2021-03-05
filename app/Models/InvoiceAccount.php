<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceAccount extends Model
{
    use HasFactory;

    protected $table = 'invoices_accounts';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = false;
    public $incrementing = false;
}
