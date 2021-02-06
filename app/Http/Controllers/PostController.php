<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Post::all();
        $categories = Category::all();

        return view('admin/post',compact('info','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('/post')->withcategories($categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'category'=>'required',
            //  'image'=>'required',

        ]);
        $info= new Post;
        $info->title =$request->input('title');
        $info->description =$request->input('description');
        $info->category_id = $request->input("category");

        if($request-> hasfile('image')) {
            $file =$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file ->move('uploads/photos/',$filename);
            $info->image = $filename;
        }

        else {
            return $request;
            $info->image = '';

        }

        $info->save();
        return redirect('/post')->with('success','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $singlepost=Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.detail',compact('singlepost', 'categories'));
        return redirect('/detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            //    'image'=>'required',

        ]);
        $info= Post::find($id);
        $info->title =$request->input('title');
        $info->description =$request->input('description');
        $info->category_id = $request->input("category");

        $info->save();
        return redirect('/post')->with('success','Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Post::find($id);
        $info->delete();

        return redirect('/post')->with('success','Data deleted');
    }
}
