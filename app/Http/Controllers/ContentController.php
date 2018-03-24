<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::getLatestContent();
        return view('admin.content.index',compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.create');
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
            'about_us' => 'required',
            'hot_line' => 'required',
            'logo' => 'required|image',
            'img_about' => 'required|image',
        ]);

        $image = $request->file('logo');
        $input['logo'] = time().'-logo.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/upload/contents');
        $image->move($destinationPath, $input['logo']);

        $image = $request->file('img_about');
        $input['img_about'] = time().'-about.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $input['img_about']);

        if ($request->hasfile('img_center')) {
            $image = $request->file('img_center');
            $input['img_center'] = time() . '-center.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $input['img_center']);
        }
        if ($request->hasfile('img_right')) {
            $image = $request->file('img_right');
            $input['img_right'] = time() . '-right.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $input['img_right']);
        }
        $input['about_us'] = $request->about_us;
        $input['hot_line'] = $request->hot_line;
        Content::create($input);
        return redirect()->route('content.index')
            ->with('success','Content created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $article = Content::find($id);
//        return view('content.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::find($id);
        return view('admin.content.edit',compact('content'));
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
            'about_us' => 'required',
            'hot_line' => 'required',
        ]);

        if ($request->hasfile('logo')) {
            $image = $request->file('logo');
            $input['logo'] = time() . '-logo.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/contents');
            $image->move($destinationPath, $input['logo']);
        } else {
            $input['logo'] = $request->hidden_logo;
        }
        if ($request->hasfile('img_about')) {
            $image = $request->file('img_about');
            $input['img_about'] = time() . '-about.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/contents');
            $image->move($destinationPath, $input['img_about']);
        } else {
            $input['img_about'] = $request->hidden_about;
        }
        if ($request->hasfile('img_center')) {
            $image = $request->file('img_center');
            $input['img_center'] = time() . '-center.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/contents');
            $image->move($destinationPath, $input['img_center']);
        } else {
            $input['img_center'] = $request->hidden_center;
        }
        if ($request->hasfile('img_right')) {
            $image = $request->file('img_right');
            $input['img_right'] = time() . '-right.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/contents');
            $image->move($destinationPath, $input['img_right']);
        } else {
            $input['img_right'] = $request->hidden_right;
        }
        $input['about_us'] = $request->about_us;
        $input['hot_line'] = $request->hot_line;
        Content::find($id)->update($input);
        return redirect()->route('content.index')
            ->with('success','Content updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::find($id)->delete();
        return redirect()->route('content.index')
            ->with('success','Content deleted successfully');
    }
}
