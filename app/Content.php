<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    protected $fillable = [
        'about_us', 'hot_line', 'logo', 'img_about', 'img_center', 'img_right'
    ];

    public static function getLatestContent(){
        return Content::orderBy('id', 'desc')->first();
    }
}
