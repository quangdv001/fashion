<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getListUser(){
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }
}
