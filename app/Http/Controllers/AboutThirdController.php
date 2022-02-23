<?php

namespace App\Http\Controllers;

use App\Models\AboutThird;
use App\Models\Icon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.third.index',[
            'items' => AboutThird::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.third.create',[
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
            'number'=>'required|max:20',
        ]);
        AboutThird::insert([
            'icon'=>$request->icon,
            'title'=>$request->title,
            'number'=>$request->number,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('about-third.index')->with('success','Added successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutThird  $aboutThird
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutThird $aboutThird)
    {
        return view('dashboard.about.third.edit',[
            'info' =>$aboutThird,
            'icons'=>Icon::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutThird  $aboutThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutThird $aboutThird)
    {
        $request->validate([
            'icon'=>'required|max:100',
            'title'=>'required|max:255',
            'number'=>'required|max:20',
        ]);
        $aboutThird->icon = $request->icon;
        $aboutThird->title = $request->title;
        $aboutThird->number = $request->number;
        $aboutThird->save();
        return redirect()->route('about-third.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutThird  $aboutThird
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutThird $aboutThird)
    {
        $aboutThird->delete();
        return redirect()->route('about-third.index')->with('success','Deleted successfully');
    }
}
