<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $connection = 'mysql_admin';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function subscription_status()
    {
        return $this->belongsTo('App\Models\CommonCode', 'subscription_status_cd', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'A02');
    }

    public function account_status()
    {
        return $this->belongsTo('App\Models\CommonCode', 'account_status_cd', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'A03');
    }

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice', 'invoice_receiver_code');
    }
}
