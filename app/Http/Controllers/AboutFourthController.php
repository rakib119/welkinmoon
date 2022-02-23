<?php

namespace App\Http\Controllers;

use App\Models\AboutFourth;
use Illuminate\Http\Request;

class AboutFourthController extends Controller
{
    public function  edit(){
        $data = AboutFourth::first();
        return view('dashboard.about.fourth.edit',compact('data'));

    }
    public function update ( Request $request ){
        $request->validate([
            'title'=> 'required|max:255',
            'first_item'=> 'required|max:255',
            'second_item'=> 'required|max:255',
            'third_item'=> 'required|max:255',
            'short_description'=> 'required',
            'button_name'=> 'required|max:35',
        ]);
         $AboutFourth = AboutFourth::first();
         $AboutFourth->title = $request->title;
         $AboutFourth->first_item = $request->first_item;
         $AboutFourth->second_item = $request->second_item;
         $AboutFourth->third_item = $request->third_item;
         $AboutFourth->short_description = $request->short_description;
         $AboutFourth->button_name = $request->button_name;
         $AboutFourth->save();
         return back()->with('success', 'Successfully Updated');
       }
}
