<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    const TYPE_GENERAL = 'general';
    const TYPE_PAYMENT = 'payment';
    const TYPE_DELIVERY = 'delivery';
    const TYPE_FLOWER = 'flower';

    const TYPE_ARRAY = [
        self::TYPE_GENERAL,
        self::TYPE_PAYMENT,
        self::TYPE_DELIVERY,
        self::TYPE_FLOWER,
    ];
}
