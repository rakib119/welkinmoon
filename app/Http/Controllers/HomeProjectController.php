<?php

namespace App\Http\Controllers;

use App\Models\HomeProject;
use App\Models\Icon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.home_project.index',[
           'projects'=>HomeProject::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('dashboard.home_project.create',[
            'icons'=> Icon:: orderBy('id','DESC')->get(),
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
            'project_name'=>'required',
            'icon'=>'required'
        ]);
        HomeProject::insert([
            'project_name'=>$request->project_name,
            'icon'=>$request->icon,
            'created_at'=> Carbon::now()
        ]);
        return redirect()->route('projects.index')->with('success','Project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeProject  $homeProject
     * @return \Illuminate\Http\Response
     */
    public function show(HomeProject $homeProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeProject  $homeProject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  view('dashboard.home_project.edit',[
           'project'=> HomeProject::find($id),
           'icons'=> Icon:: orderBy('id','DESC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeProject  $homeProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project =  HomeProject::find($id) ;
        $request->validate([
            'project_name'=>'required',
            'icon'=>'required'
        ]);
        $project->project_name = $request->project_name;
        $project->icon = $request->icon;
        $project->save();
        return redirect()->route('projects.index')->with('success','Updated  successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeProject  $homeProject
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        HomeProject::find($id)->delete();
        return redirect()->route('projects.index')->with('success','Updated  successfully');
    }
}
