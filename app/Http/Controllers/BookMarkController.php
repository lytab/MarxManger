<?php

namespace App\Http\Controllers;

use App\BookMark;
use Illuminate\Http\Request;

class BookMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');

    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name'=>'required',
            'url'=>'required',
            
        ];
        $this->validate($request,$rules);
        $bookmark=new BookMark();
        $bookmark->name=$request->name;
        $bookmark->url=$request->url;
        $bookmark->desc=$request->desc;
        $bookmark->save();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function show(BookMark $bookMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function edit(BookMark $bookMark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookMark $bookMark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookMark $bookMark)
    {
        //
    }
}
