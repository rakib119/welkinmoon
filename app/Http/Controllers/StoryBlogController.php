<?php

namespace App\Http\Controllers;

use App\Models\StoryBlog;
use App\Models\StorySecond;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class StoryBlogController extends Controller
{
    public function create($blog_id)
    {
        return view('dashboard.story.second.details.create',[
            'blog_id'=>$blog_id
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_id'=>'required|numeric',
            'video_link'=>'nullable',
            'image'=>'nullable|mimes:png,jpg',
            'photos.*'=>'required|mimes:png,jpg',
            'first_part'=>'required',
            'second_part'=>'required',
            'third_part'=>'required',
            'forth_part'=>'required',
            'fifth_part'=>'required'
        ]);
       if (StorySecond:: find($request->blog_id)) {
            $photos = "";
            $i= 0;
            foreach ($request->photos as  $value) {
                $file_name = Str::random(15).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/story/blog/details/' . $file_name);
                Image::make($value)->save($save_link);
                if ($i != 0) {
                    $photos .= ",";
                }
                $photos .= $file_name;
                $i++;
            }
            $image ="";
            if ($request->hasFile('image')) {
                $image = Str::random(15).'.'.$request->file('image')->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/story/blog/details/' . $image);
                Image::make($request->file('image'))->save($save_link);
            }

            StoryBlog::insert([
                'blog_id'=> $request->blog_id,
                'first_part'=> $request->first_part,
                'second_part'=> $request->second_part,
                'third_part'=> $request->third_part,
                'forth_part'=> $request->forth_part,
                'fifth_part'=> $request->fifth_part,
                'video_link'=> $request->video_link,
                'image'=> $image,
                'photos'=> $photos,
                'created_at'=> Carbon::now()
            ]);
            return redirect()->route('story-second.index')->with('success','Added successfully');
       }else {
            return back()->with('error','Something went wrong');
       }

    }


    public function edit($id)
    {
        return view('dashboard.story.second.details..edit',[
            'blogDetails'=>StoryBlog::where('blog_id',$id)->first()
        ]);
    }


    public function update(Request $request,$id)
    {
        $blog_details = StoryBlog::find($id);
        $request->validate([
            'image'=>'nullable|mimes:png,jpg',
            'photos.*'=>'nullable|mimes:png,jpg',
            'video_link'=>'nullable',
            'first_part'=>'required',
            'second_part'=>'required',
            'third_part'=>'required',
            'forth_part'=>'required',
            'fifth_part'=>'required'
        ]);
        if ($request->file('photos')) {
            $photos = "";
            $i= 0;
            foreach (explode(',',$blog_details->photos) as $photo) {
                $file_location = base_path('public/assets/images/story/blog/details/' . $photo);
                unlink($file_location);
            }
            foreach ($request->photos as  $value) {
                $file_name = Str::random(12).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/story/blog/details/' . $file_name);
                Image::make($value)->save($save_link);
                if ($i != 0) {
                    $photos .= ",";
                }
                $photos .= $file_name;
                $i++;
            }
            $blog_details->photos = $photos;
            $blog_details->save();

        }
        if ($request->file('image')) {
            if($blog_details->image){
                $location = base_path('public/assets/images/story/blog/details/' . $blog_details->image);
                unlink($location);
            }
            $image = Str::random(12).'.'.$request->file('image')->getClientOriginalExtension();
            $save_link = base_path('public/assets/images/story/blog/details/' . $image);
            Image::make($request->file('image'))->save($save_link);
            $blog_details->image = $image;
            $blog_details->save();
        }

        $blog_details->first_part = $request->first_part;
        $blog_details->second_part = $request->second_part;
        $blog_details->third_part = $request->third_part;
        $blog_details->forth_part = $request->forth_part;
        $blog_details->fifth_part = $request->fifth_part;
        $blog_details->video_link = $request->video_link;
        $blog_details->save();

        return redirect()->route('story-second.index')->with('success','Updated successfully');
    }
    public function destroy($id)
    {
        StoryBlog::find($id)->delete();
         return redirect()->route('story-second.index')->with('success','Deleted successfully');
    }
}
