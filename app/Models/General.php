<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'icon',
        'logo',
        'white_logo',
        'general_banner',
        'article_banner',
        'future_banner',
        'our_service',
        'our_clients',
        'our_product',
        'wa',
        'phone',
        'instagram',
        'youtube',
        'tiktok',
        'linkedin',
        'facebook',
        'footer_address',
    ];
}