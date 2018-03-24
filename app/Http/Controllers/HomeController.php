<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function show(){
        $banner = Banner::getActiveBanner();
        $content = Content::getLatestContent();
        return view('index')
            ->with('content', $content)
            ->with('banner', $banner);
    }
}
