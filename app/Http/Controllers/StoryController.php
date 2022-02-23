<?php

namespace App\Http\Controllers;

use App\Models\OurStory;
use App\Models\StorySecond;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class StoryController extends Controller
{
    public function firstIndex(){

        return view('dashboard.story.first.index',[
            'stories' => OurStory::all(),
        ]);
    }
    public function firstEdit ($id){
        return view('dashboard.story.first.edit',[
            'story' => OurStory::find($id)
        ]);
    }
    public function firstUpdate (Request $request, $id){
        $story = OurStory::find($id);
        $story->title = $request->title;
        $story->message = $request->message;
        $story->save();
        return redirect()->route('story-first.index')->with('success',"successfully updated");
    }

    public function SecondIndex (){
        return view('dashboard.story.second.index',[
            'items' => StorySecond::all(),
        ]);
    }

    public function SecondCreate  (){
        return view('dashboard.story.second.create');
    }
    public function SecondStore(Request $request)
    {
        $request->validate([
            'photo'=>'required|mimes:png,jpg',
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
        ]);
        $extension = $request->file('photo')->getClientOriginalExtension();
            $file_name = Str::random(8) . auth()->id() . "." . $extension;
            $save_link = base_path('public/assets/images/story/blog/' . $file_name);
            Image::make($request->file('photo'))->save($save_link);
        StorySecond::insert([
            'photo'=>$file_name,
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('story-second.index')->with('success','Added successfully');
    }
    public function SecondEdit($id)
    {
        $data = StorySecond::find($id);
       return view('dashboard.story.second.edit',[
           'info' =>$data,
       ]);
    }

    public function SecondUpdate(Request $request, $id)
    {
        $data = StorySecond::find($id);
        $request->validate([
            'photo'=>'nullable|mimes:png,jpg',
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
        ]);
        if ($request->hasFile('photo')) {
            unlink(base_path('public/assets/images/story/blog/' .$data->photo));
            $extension = $request->file('photo')->getClientOriginalExtension();
            $file_name = Str::random(8) . auth()->id() . "." . $extension;
            $save_link = base_path('public/assets/images/story/blog/' . $file_name);
            Image::make($request->file('photo'))->save($save_link);
            $data->photo = $file_name;
            $data->save();
        }
        $data->title = $request->title;
        $data->short_description = $request->short_description;
        $data->save();
        return redirect()->route('story-second.index')->with('success','Updated successfully');
    }

    public function SecondDestroy($id)
    {
        $data = StorySecond::find($id);
        unlink(base_path('public/assets/images/story/blog/' .$data->photo));
        $data->delete();
        return redirect()->route('story-second.index')->with('success','Deleted successfully');
    }
}
