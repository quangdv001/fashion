<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'img' => 'required|image',
        ]);


        $image = $request->file('img');
        $input['img'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/upload/banners');
        $image->move($destinationPath, $input['img']);

        $input['title'] = $request->title;
        $input['status'] = 1;
        Banner::create($input);
        return redirect()->route('banner.index')
            ->with('success','Banner created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $article = Banner::find($id);
//        return view('banner.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        if ($request->hasfile('img')) {
            $image = $request->file('img');
            $input['img'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/banners');
            $image->move($destinationPath, $input['img']);
        } else {
            $input['img'] = $request->hidden_img;
        }
        $input['title'] = $request->title;
        Banner::find($id)->update($input);
        return redirect()->route('banner.index')
            ->with('success','Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->route('banner.index')
            ->with('success','Banner deleted successfully');
    }

    public function updateStatusBanner(){
        echo 1;die();
        $request = request()->all();
        return response()->json($request);
    }
}
