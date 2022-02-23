<?php

namespace App\Http\Controllers;

use App\Models\AboutFifth;
use App\Models\Icon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutFifthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.fifth.index',[
            'items' => AboutFifth::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.fifth.create',[
            'icons'=>Icon::orderBy('id','desc')->get(),
        ]);
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
            'icon'=>'required|max:100',
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
        ]);
        AboutFifth::insert([
            'icon'=>$request->icon,
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('about-fifth.index')->with('success','Added successfully');
    }

    public function edit(AboutFifth $aboutFifth)
    {
        return view('dashboard.about.fifth.edit',[
            'info' =>$aboutFifth,
            'icons'=>Icon::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutFifth  $aboutFifth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutFifth $aboutFifth)
    {
        $request->validate([
            'icon'=>'required|max:100',
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
        ]);
        $aboutFifth->icon = $request->icon;
        $aboutFifth->title = $request->title;
        $aboutFifth->short_description = $request->short_description;
        $aboutFifth->save();
        return redirect()->route('about-fifth.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutFifth  $aboutFifth
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutFifth $aboutFifth)
    {
        $aboutFifth->delete();
        return redirect()->route('about-fifth.index')->with('success','Deleted successfully');
    }
}
