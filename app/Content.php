<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'about_us', 'hot_line', 'logo', 'img_about', 'img_center', 'img_right'
    ];
}
