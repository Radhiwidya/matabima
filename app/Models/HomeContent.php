<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected
        $fillable = [
            'hero_video',
            'we_are_image',
            'we_are_caption',
            'etocia_image',
            'contact_image',
            'contact_address',
            'contact_link',
            'banner_client_image',
            'product_caption',
        ];
}