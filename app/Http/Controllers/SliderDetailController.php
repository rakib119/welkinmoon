<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\SliderDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderDetailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slider_id)
    {
        return view('dashboard.slider.details.create',[
            'slider_id'=>$slider_id
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
            'slider_id'=>'required|numeric',
            'image'=>'required|mimes:png,jpg',
            'photos.*'=>'required|mimes:png,jpg',
            'first_part'=>'required',
            'second_part'=>'required',
            'third_part'=>'required',
            'forth_part'=>'required',
            'fifth_part'=>'required'
        ]);
       if (slider:: find($request->slider_id)) {
            $photos = "";
            $i= 0;
            foreach ($request->photos as  $value) {
                $file_name = Str::random(12).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/slider/' . $file_name);
                Image::make($value)->save($save_link);
                if ($i != 0) {
                    $photos .= ",";
                }
                $photos .= $file_name;
                $i++;
            }
            $image = Str::random(12).'.'.$request->file('image')->getClientOriginalExtension();
            $save_link = base_path('public/assets/images/slider/' . $image);
            Image::make($request->file('image'))->save($save_link);

            SliderDetail::insert([
                'slider_id'=> $request->slider_id,
                'first_part'=> $request->first_part,
                'second_part'=> $request->second_part,
                'third_part'=> $request->third_part,
                'forth_part'=> $request->forth_part,
                'fifth_part'=> $request->fifth_part,
                'image'=> $image,
                'photos'=> $photos,
                'created_at'=> Carbon::now()
            ]);
            return redirect()->route('slider.index')->with('success','Added successfully');
       }else {
            return back()->with('error','Something went wrong');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SliderDetail  $sliderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SliderDetail $sliderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SliderDetail  $sliderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderDetail $sliderDetail)
    {
        return view('dashboard.slider.details.edit',[
           'sliderDetail'=> $sliderDetail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SliderDetail  $sliderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SliderDetail $sliderDetail)
    {
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
            foreach (explode(',',$sliderDetail->photos) as $photo) {
                $file_location = base_path('public/assets/images/slider/' . $photo);
                unlink($file_location);
            }
            foreach ($request->photos as  $value) {
                $file_name = Str::random(12).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/slider/' . $file_name);
                Image::make($value)->save($save_link);
                if ($i != 0) {
                    $photos .= ",";
                }
                $photos .= $file_name;
                $i++;
            }
            $sliderDetail->photos = $photos;
            $sliderDetail->save();

        }
        if ($request->file('image')) {
            $location = base_path('public/assets/images/slider/' . $sliderDetail->image);
            unlink($location);
            $image = Str::random(12).'.'.$request->file('image')->getClientOriginalExtension();
            $save_link = base_path('public/assets/images/slider/' . $image);
            Image::make($request->file('image'))->save($save_link);
            $sliderDetail->image = $image;
            $sliderDetail->save();
            }

            $sliderDetail->first_part = $request->first_part;
            $sliderDetail->second_part = $request->second_part;
            $sliderDetail->third_part = $request->third_part;
            $sliderDetail->forth_part = $request->forth_part;
            $sliderDetail->fifth_part = $request->fifth_part;
            $sliderDetail->save();

            return redirect()->route('slider.index')->with('success','Updated successfully');
  }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderDetail  $sliderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderDetail $sliderDetail)
    {
        //
    }
}
