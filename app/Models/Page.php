<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo('App\Models\CommonCode', 'type_cd', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B01');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\CommonCode', 'status_cd', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B02');
    }
}
