<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.project.index',[
            'projects'=> Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
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
            'project_logo'=>'required|mimes:png,jpg',
            'launch_date'=>'required',
            'project_description'=>'required',
        ]);
        $extension = $request->file('project_logo')->getClientOriginalExtension();
        $file_name = Str::random(8) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/projects/' . $file_name);
        Image::make($request->file('project_logo'))->save($save_link);

        Project::insert([
            'project_name'=>$request-> project_name,
            'project_logo'=>$file_name ,
            'launch_date'=>$request->launch_date,
            'project_description'=>$request->project_description,
            'created_by'=>auth()->id(),
            'created_at'=>Carbon::now(),
        ]);
        return redirect('project')->with('success', 'Project added successfully');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $request->validate([
            'project_name'=>'required',
            'project_logo'=>'nullable|mimes:png,jpg',
            'launch_date'=>'required',
            'project_description'=>'required',
        ]);
        if ($request->hasFile('project_logo')) {
            unlink(base_path('public/assets/images/projects/' .$project->project_logo));
            $extension = $request->file('project_logo')->getClientOriginalExtension();
            $file_name = Str::random(8) . auth()->id() . "." . $extension;
            $save_link = base_path('public/assets/images/projects/' . $file_name);
            Image::make($request->file('project_logo'))->save($save_link);
            $project->project_logo = $file_name;
            $project->save();
        }
        $project->project_name =  $request->project_name;
        $project->launch_date =  $request->launch_date;
        $project->project_description =  $request->project_description;
        $project->updated_by =  auth()->id();
        $project->save();
       return redirect('project')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        unlink(base_path('public/assets/images/projects/' .$project->project_logo));
        $project->delete();
        return back()->with('success','Deleted successfully');
    }
}
