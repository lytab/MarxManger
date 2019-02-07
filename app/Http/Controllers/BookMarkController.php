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
        $bookmarks=BookMark::where('user_id',auth()->user()->id)->get();
        return view('home')->with('bookmarks',$bookmarks);

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
        $bookmark->user_id=auth()->user()->id;
        $bookmark->save();
     return redirect('/home')->with('status','Bookmark Created !!');
    }

  
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookMark::findOrFail($id)->delete();
        return;// redirect('/home')->with('status','Bookmark Deleted !!');

    }
}
