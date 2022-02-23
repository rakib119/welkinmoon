<?php

namespace App\Http\Controllers;

use App\Models\GenarelInfo;
use Illuminate\Http\Request;

class GenarelController extends Controller
{
    public function index(){
        return view('dashboard.settings.information.index',[
            'informations' => GenarelInfo::all()
        ]);
    }
    public function edit($id){
        return view('dashboard.settings.information.edit',[
            'information' => GenarelInfo::find($id)
        ]);
    }
    public function update(Request $request,$id){
       $info =  GenarelInfo::find($id);
       $info->value=$request->value;
       $info->save();
       return redirect()->route('genarel_info.index')->with('success','update successfully');
    }
}
