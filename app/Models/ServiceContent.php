<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceContent extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image1',
        'image2',
        'image3'
    ];
}