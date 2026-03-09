<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuturePlan extends Model
{
    protected $fillable = [
        'image',
        'title',
        'body',
    ];
}