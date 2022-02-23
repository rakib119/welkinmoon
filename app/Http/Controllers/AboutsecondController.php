<?php

namespace App\Http\Controllers;

use App\Models\Aboutsecond;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutsecondController extends Controller
{
    public function edit()
    {
        return view('dashboard.about.second.edit',[
            'data'=>Aboutsecond:: first()
        ]);
    }


    public function update(Request $request)
    {
        $aboutsecond = Aboutsecond:: first();
        $request->validate([
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
            'button_name'=>'required|max:255'
        ]);

        $aboutsecond->title =  $request->title;
        $aboutsecond->short_description =  $request->short_description;
        $aboutsecond->button_name =$request->button_name;
        $aboutsecond->save();
        return back()->with('success', 'updated successfully');
    }


}
