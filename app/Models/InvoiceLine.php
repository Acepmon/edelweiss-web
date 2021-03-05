<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
    use HasFactory;

    protected $table = 'invoices_lines';
    protected $primaryKey = null;
    protected $keyType = 'string';
    protected $connection = 'mysql_admin';
    public $timestamps = false;
    public $incrementing = false;

    public function discounts()
    {
        return $this->hasMany(InvoiceLineDiscount::class, 'invoice_no', 'invoice_no')->where('line_seq', $this->line_seq);
    }

    public function surcharges()
    {
        return $this->hasMany(InvoiceLineSurcharge::class, 'invoice_no', 'invoice_no')->where('line_seq', $this->line_seq);
    }

    public function taxes()
    {
        return $this->hasMany(InvoiceLineTax::class, 'invoice_no', 'invoice_no')->where('line_seq', $this->line_seq);
    }
}
