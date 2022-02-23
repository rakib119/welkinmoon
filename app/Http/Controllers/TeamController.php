<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\fileExists;

class TeamController extends Controller
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
        $teams =  Team::all();
        return view('dashboard.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('dashboard.team.create');

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
                'name'=>'required',
                'img'=>'required|mimes:png,jpg',
                'post'=>'required',
                'description'=>'required',
                'facebook'=>'required',
                'twitter'=>'required',
                'linkedin'=>'required',
                'show_in'=>'required',
            ]);

            $extension = $request->file('img')->getClientOriginalExtension();
            $file_name = Str::random(8) . auth()->id() . "." . $extension;
            $save_link = base_path('public/assets/images/teams/' . $file_name);
            Image::make($request->file('img'))->save($save_link);
            Team::insert([
               'name' => $request->name,
               'img' => $file_name,
               'post' => $request->post,
               'description' => $request->description,
               'facebook' => $request->facebook,
               'twitter' => $request->twitter,
               'linkedin' => $request->linkedin,
               'show_in' => $request->show_in,
               'created_at' => Carbon::now(),
               'created_by' => auth()->id()
           ]);
           return redirect('team')->with('success', 'Team members added successfully');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('dashboard.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'=>'required',
            'img'=>'nullable|mimes:png,jpg',
            'post'=>'required',
            'description'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
        ]);
        if ($request->hasFile('img')) {
            unlink(base_path('public/assets/images/teams/' .$team->img));
            $extension = $request->file('img')->getClientOriginalExtension();
            $file_name = Str::random(8) . auth()->id() . "." . $extension;
            $save_link = base_path('public/assets/images/teams/' . $file_name);
            Image::make($request->file('img'))->save($save_link);
            $team->img = $file_name;
            $team->save();
        }
        $team->name =  $request->name;
        $team->post =  $request->post;
        $team->description =  $request->description;
        $team->facebook =  $request->facebook;
        $team->twitter =  $request->twitter;
        $team->linkedin =  $request->linkedin;
        $team->linkedin =  $request->linkedin;
        $team->show_in = $request->show_in;
        $team->updated_by =  auth()->id();
        $team->save();
        return redirect('team')->with('success', 'updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        unlink(base_path('public/assets/images/teams/' .$team->img));
        $team->delete();
        return back()->with('success','Deleted successfully');

    }
}
