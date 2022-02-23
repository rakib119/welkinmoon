<?php

namespace App\Http\Controllers;

use App\Models\AboutFirst;
use App\Models\Icon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.first.index',[
            'items' => AboutFirst::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.first.create',[
            'icons'=>Icon::orderBy('id','desc')->get(),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'icon'=>'required|max:100',
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
        ]);
        AboutFirst::insert([
            'icon'=>$request->icon,
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('about-first.index')->with('success','Added successfully');
    }


    public function edit(AboutFirst $aboutFirst)
    {
       return view('dashboard.about.first.edit',[
           'info' =>$aboutFirst,
           'icons'=>Icon::orderBy('id','desc')->get(),
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutFirst  $aboutFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutFirst $aboutFirst)
    {
        $request->validate([
            'icon'=>'required|max:100',
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
        ]);
        $aboutFirst->icon = $request->icon;
        $aboutFirst->title = $request->title;
        $aboutFirst->short_description = $request->short_description;
        $aboutFirst->save();
        return redirect()->route('about-first.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutFirst  $aboutFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutFirst $aboutFirst)
    {
        $aboutFirst->delete();
        return redirect()->route('about-first.index')->with('success','Deleted successfully');
    }
}
