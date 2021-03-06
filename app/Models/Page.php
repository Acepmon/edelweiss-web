<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo('App\Models\CommonCode', 'status_cd', 'comm2_cd')->whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B02');
    }

    public function metas()
    {
        return $this->hasMany('App\Models\PageMeta');
    }

    public function meta($key)
    {
        return $this->metas()->where('meta_key', $key)->value('meta_value');
    }

    public function collection()
    {
        return $this->belongsTo('App\Models\Collection');
    }
}
