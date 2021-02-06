<?php

namespace App\Http\Controllers;

use App\Sliderimage;
use Illuminate\Http\Request;

class SliderimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Sliderimage:: all();
        return view('layouts/slider')->with('slider',$slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'caption'=>'required',
            'description'=>'required',
            //  'image'=>'required',

        ]);
        $slider= new Sliderimage;
        $slider->caption =$request->input('caption');
        $slider->description =$request->input('description');

        if($request-> hasfile('image')) {
            $file =$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file ->move('uploads/photos/',$filename);
            $slider->image = $filename;
        }
        else {
            return $request;
            $slider->image = '';

        }

        $slider->save();
        return redirect('layouts/slider')->with('success','Data Saved');
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
            'caption'=>'required',
            'description'=>'required',
            //    'image'=>'required',

        ]);
        $slider= Sliderimage::find($id);
        $slider->caption =$request->input('caption');
        $slider->description =$request->input('description');

        $slider->save();
        return redirect('/slider')->with('success','Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slider =Sliderimage::find($id);
        $slider->delete();

        return redirect('/slider')->with('success','Data deleted');
    }
}
