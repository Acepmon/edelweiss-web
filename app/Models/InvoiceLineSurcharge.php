<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLineSurcharge extends Model
{
    use HasFactory;

    protected $table = 'invoices_lines_surcharges';
    protected $primaryKey = null;
    protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = false;
    public $incrementing = false;
}
