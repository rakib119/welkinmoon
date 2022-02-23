<?php

namespace App\Http\Controllers;

use App\Models\AfterCcd;
use App\Models\home_second_left;
use App\Models\home_second_right;
use App\Models\Icon;
use App\Models\NextAfterCcd;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    // Home second Left
  public function  editHomeSecondLeft(){
   $data = home_second_left::first();
   return view('dashboard.home_second.edit_left',compact('data'));

  }
  public function  updateHomeSecondLeft( Request $request ){
   $request->validate([
       'short_title'=> 'nullable|max:25',
       'button_name'=> 'required|max:35',
       'title_first'=> 'required|max:30',
       'title_second'=> 'required|max:255',
       'short_description'=> 'required',
   ]);
    $data = home_second_left::first();
    $data->short_title = $request->short_title;
    $data->button_name = $request->button_name;
    $data->title_first = $request->title_first;
    $data->title_second = $request->title_second;
    $data->short_description = $request->short_description;
    $data->save();
    return back()->with('success', 'Successfully Updated');
  }
  // Home second Right
  public function  addHomeSecondRight(){
    $data = home_second_right::all();

    return view('dashboard.home_second.insert',[
        'datas'=> $data,
        'icons'=> Icon:: orderBy('id','DESC')->get(),
    ]);

   }
                    //  store
    public function  storeHomeSecondRight(Request $request){
        $request->validate([
            'short_title'=> 'required|max:255',
            'title'=> 'required|max:255',
            'icon'=> 'required|max:255',
            'short_description'=> 'required',
        ]);
        home_second_right::insert([
            'short_title'=> $request->short_title,
            'title'=> $request->title,
            'icon'=> $request->icon,
            'short_description'=>$request->short_description,
            'created_at'=> Carbon::now(),
        ]);
         return back()->with('success', 'Added Successfully');
   }
                //edit
        public function  editHomeSecondRight($id){
            $data = home_second_right::find($id);
            return view('dashboard.home_second.edit_right',[
                'data'=> $data,
                'icons'=> Icon:: orderBy('id','DESC')->get(),
            ]);

            }
            // update
    public function  updateHomeSecondRight( Request $request,$id ){
        $request->validate([
            'short_title'=> 'required|max:255',
            'title'=> 'required|max:255',
            'icon'=> 'required|max:255',
            'short_description'=> 'required',
        ]);
            $data = home_second_right::find($id);
            $data->short_title = $request->short_title;
            $data->title = $request->title;
            $data->icon = $request->icon;
            $data->short_description = $request->short_description;
            $data->save();
            return redirect()->route('home_second_right.add')->with('success', 'Successfully Updated');
        }
        // delete
    public function deleteHomeSecondRight($id)    {
        $data = home_second_right::find($id);
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }

        //   After CCD
   public function  editAfterCcd(){
    $data = AfterCcd::first();
    return view('dashboard.after_ccd.edit',compact('data'));

    }
    public function  updateAfterCcd( Request $request ){
        $request->validate([
            'title_first'=> 'required|max:30',
            'title_second'=> 'required|max:255',
            'short_description'=> 'required',
            'button_name'=> 'required|max:35',
        ]);
         $After_ccd = AfterCcd::first();
         $After_ccd->button_name = $request->button_name;
         $After_ccd->title_first = $request->title_first;
         $After_ccd->title_second = $request->title_second;
         $After_ccd->short_description = $request->short_description;
         $After_ccd->save();
         return back()->with('success', 'Successfully Updated');
       }

        //   Next After CCD
    public function  nextEditAfterCcd(){
        $data = NextAfterCcd::first();
        return view('dashboard.next_after_ccd.edit',compact('data'));

    }
    public function  nextUpdateAfterCcd( Request $request ){
        $request->validate([
            'title_first'=> 'required|max:30',
            'title_second'=> 'required|max:40',
            'first_item'=> 'required|max:255',
            'second_item'=> 'required|max:255',
            'third_item'=> 'required|max:255',
            'short_title'=> 'nullable|max:150',
            'short_description'=> 'required',
            'button_name'=> 'required|max:35',
        ]);
         $next_after_ccd = NextAfterCcd::first();
         $next_after_ccd->title_first = $request->title_first;
         $next_after_ccd->title_second = $request->title_second;
         $next_after_ccd->short_title = $request->short_title;
         $next_after_ccd->first_item = $request->first_item;
         $next_after_ccd->second_item = $request->second_item;
         $next_after_ccd->third_item = $request->third_item;
         $next_after_ccd->short_description = $request->short_description;
         $next_after_ccd->button_name = $request->button_name;
         $next_after_ccd->save();
         return back()->with('success', 'Successfully Updated');
       }
    //    Our Story Page
    public function OurStory(){

    }
}
