<?php

namespace App\Http\Controllers;

use App\Models\AboutBlogDetails;
use App\Models\AboutFirst;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AboutBlogDetailsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blog_id)
    {
        return view('dashboard.about.first.details.create',[
            'blog_id'=>$blog_id
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
            'blog_id'=>'required|numeric',
            'image'=>'required|mimes:png,jpg',
            'photos.*'=>'required|mimes:png,jpg',
            'first_part'=>'required',
            'second_part'=>'required',
            'third_part'=>'required',
            'forth_part'=>'required',
            'fifth_part'=>'required'
        ]);
       if (AboutFirst:: find($request->blog_id)) {
            $photos = "";
            $i= 0;
            foreach ($request->photos as  $value) {
                $file_name = Str::random(15).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/about/blog/' . $file_name);
                Image::make($value)->save($save_link);
                if ($i != 0) {
                    $photos .= ",";
                }
                $photos .= $file_name;
                $i++;
            }
            $image = Str::random(15).'.'.$request->file('image')->getClientOriginalExtension();
            $save_link = base_path('public/assets/images/about/blog/' . $image);
            Image::make($request->file('image'))->save($save_link);

            AboutBlogDetails::insert([
                'blog_id'=> $request->blog_id,
                'first_part'=> $request->first_part,
                'second_part'=> $request->second_part,
                'third_part'=> $request->third_part,
                'forth_part'=> $request->forth_part,
                'fifth_part'=> $request->fifth_part,
                'image'=> $image,
                'photos'=> $photos,
                'created_at'=> Carbon::now()
            ]);
            return redirect()->route('about-first.index')->with('success','Added successfully');
       }else {
            return back()->with('error','Something went wrong');
       }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutBlogDetails  $aboutBlogDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.about.first.details.edit',[
            'blogDetails'=>AboutBlogDetails::where('blog_id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutBlogDetails  $aboutBlogDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $blog_details = AboutBlogDetails::find($id);
        $request->validate([
            'image'=>'nullable|mimes:png,jpg',
            'photos.*'=>'nullable|mimes:png,jpg',
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
                $file_location = base_path('public/assets/images/about/blog/' . $photo);
                unlink($file_location);
            }
            foreach ($request->photos as  $value) {
                $file_name = Str::random(12).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/about/blog/' . $file_name);
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
            $location = base_path('public/assets/images/about/blog/' . $blog_details->image);
            unlink($location);
            $image = Str::random(12).'.'.$request->file('image')->getClientOriginalExtension();
            $save_link = base_path('public/assets/images/about/blog/' . $image);
            Image::make($request->file('image'))->save($save_link);
            $blog_details->image = $image;
            $blog_details->save();
        }

        $blog_details->first_part = $request->first_part;
        $blog_details->second_part = $request->second_part;
        $blog_details->third_part = $request->third_part;
        $blog_details->forth_part = $request->forth_part;
        $blog_details->fifth_part = $request->fifth_part;
        $blog_details->save();

            return redirect()->route('about-first.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutBlogDetails  $aboutBlogDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         AboutBlogDetails::find($id)->delete();
         return redirect()->route('about-first.index')->with('success','Deleted successfully');
    }
}
