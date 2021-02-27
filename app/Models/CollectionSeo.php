<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionSeo extends Model
{
    use HasFactory;

    protected $connection = 'mysql_admin';
    protected $table = 'collections_seo';
    public $timestamps = false;

    public function collection()
    {
        return $this->belongsTo('App\Models\Collection');
    }
}
