<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMeta extends Model
{
    use HasFactory;

    protected $primaryKey = 'page_id';

    protected $fillable = [
        'page_id', 'meta_key', 'meta_value'
    ];

    public $timestamps = false;
    protected $table = 'pages_meta';
}
