<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mockery\Exception;

class Banner extends Model
{
    protected $table = 'banner';
    protected $fillable = [
        'title', 'img', 'status'
    ];

    public static function updateStatusBanner($id, $status)
    {
        $banner = Banner::find($id);
        $banner->status = $status;
        $banner->save();
        return $banner->id;
    }

    public static function getActiveBanner(){
        return Banner::where('status',1)->get();
    }
}
