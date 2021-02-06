<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Event::all();

        return view('admin/event')->with('info',$info);
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
            'event_title'=>'required',
            'event_description'=>'required',
            'hosted_by'=>'required',
            'starting_date'=>'required',
            'end_date'=>'required',
            'location'=>'required',


        ]);
        $info= new Event;
        $info->event_title =$request->input('event_title');
        $info->event_description =$request->input('event_description');
        $info->hosted_by =$request->input('hosted_by');
        $info->starting_date =$request->input('starting_date');
        $info->end_date =$request->input('end_date');
        $info->location =$request->input('location');

//

        $info->save();
        return redirect('/event')->with('success','Data Saved');
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
//        $this->validate($request,[
//                'event_title'=>'required',
//                'event_description'=>'required',
//                'hosted_by'=>'required',
//                'starting_date'=>'required',
//                'end_date'=>'required',
//                'location'=>'required',
//
//        ]);
        $info= Event::find($id);
        $info->event_title =$request->input('event_title');
        $info->event_description =$request->input('event_description');
        $info->hosted_by =$request->input('hosted_by');
        $info->starting_date =$request->input('starting_date');
        $info->end_date =$request->input('end_date');
        $info->location =$request->input('location');

        $info->save();
        return redirect('/event')->with('success','Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Event::find($id);
        $info->delete();

        return redirect('/event')->with('success','Data deleted');
    }
}
