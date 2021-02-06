<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 public function index()
 {
     $data=Image:: all();
     return view('admin/create')->with('data',$data);
 }


 

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


//

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
            'title'=>'required',
            'description'=>'required',
         //  'image'=>'required',

        ]);
        $data= new Image;
        $data->title =$request->input('title');
        $data->description =$request->input('description');

        if($request-> hasfile('image')) {
            $file =$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file ->move('uploads/photos/',$filename);
            $data->image = $filename;
        }
        else {
            return $request;
            $data->image = '';

        }

        $data->save();
        return redirect('/create')->with('success','Data Saved');

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
            'title'=>'required',
            'description'=>'required',
            //    'image'=>'required',

        ]);
        $data= Image::find($id);
        $data->title =$request->input('title');
        $data->description =$request->input('description');

        $data->save();
        return redirect('/create')->with('success','Data updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $data = Image::find($id);
     $data->delete();

        return redirect('/create')->with('success','Data deleted');

    }

}
