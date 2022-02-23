<?php

namespace App\Http\Controllers;

use App\Models\ServiceFirst;
use App\Models\ServiceSecond;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
      //first Section
    public function  firstEdit(){
        $data = ServiceFirst::first();
        return view('dashboard.service.first.edit',compact('data'));
    }

   public function  firstUpdate( Request $request ){
    $request->validate([
        'short_title'=> 'nullable|max:25',
        'button_name'=> 'required|max:35',
        'title_first'=> 'required|max:30',
        'title_second'=> 'required|max:255',
        'short_description'=> 'required',
    ]);
     $data = ServiceFirst::first();
     $data->short_title = $request->short_title;
     $data->button_name = $request->button_name;
     $data->title_first = $request->title_first;
     $data->title_second = $request->title_second;
     $data->short_description = $request->short_description;
     $data->save();
     return back()->with('success', 'Successfully Updated');
   }
    //  Second Section
    public function SecondIndex()
    {
        return view('dashboard.service.second.index',[
            'services'=> ServiceSecond::all(),
        ]);
    }

    public function SecondCreate ()
    {
        return view('dashboard.service.second.create');
    }

    public function SecondStore(Request $request)
    {
        $request->validate([
            'service_name'=>'required',
            'service_photo'=>'required|mimes:png,jpg',
            'service_description'=>'required',
        ]);
        $extension = $request->file('service_photo')->getClientOriginalExtension();
        $file_name = Str::random(8) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/services/' . $file_name);
        Image::make($request->file('service_photo'))->save($save_link);

        ServiceSecond::insert([
            'service_name'=>$request-> service_name,
            'service_photo'=>$file_name ,
            'service_description'=>$request->service_description,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('service-second.index')->with('success', 'Service added successfully');
    }

    public function SecondEdit($id)
    {
       $service =  ServiceSecond::find($id);
        return view('dashboard.service.second.edit',compact('service'));
    }

    public function SecondUpdate(Request $request,$id)
    {
        $service =  ServiceSecond::find($id);
        $request->validate([
            'service_name'=>'required',
            'service_photo'=>'nullable|mimes:png,jpg',
            'service_description'=>'required',
        ]);
        if ($request->hasFile('service_photo')) {
            unlink(base_path('public/assets/images/services/' .$service->service_photo));
            $extension = $request->file('service_photo')->getClientOriginalExtension();
            $file_name = Str::random(8) . auth()->id() . "." . $extension;
            $save_link = base_path('public/assets/images/services/' . $file_name);
            Image::make($request->file('service_photo'))->save($save_link);
            $service->service_photo = $file_name;
            $service->save();
        }
        $service->service_name =  $request->service_name;
        $service->service_description =  $request->service_description;
        $service->save();
       return redirect()->route('service-second.index')->with('success', 'updated successfully');
    }

    public function SecondDestroy($id)
    {
        $service =  ServiceSecond::find($id);
        unlink(base_path('public/assets/images/services/'.$service->service_photo));
        $service->delete();
        return back()->with('success','Deleted successfully');
    }
}
