<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['store']]);
        $this->middleware('admin',['except'=>['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contact.index',['messages'=>Contact:: orderBY('id',"DESC")->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required|max:255',
            'email'=>'nullable|max:255',
            'mobile'=>'nullable|max:255',
            'subject'=>'required|max:255',
            'message'=>'required',
            'screenshots.*'=> 'nullable|mimes:png,jpg'
        ]);
        $screenshots = "";
        if ($request->hasFile('screenshots')) {
            $i= 0;
            foreach ($request->screenshots as  $value) {
                $file_name = Str::random(12).'.'.$value->getClientOriginalExtension();
                $save_link = base_path('public/assets/images/contacts_photo/' . $file_name);
                Image::make($value)->save($save_link);
                if ($i != 0) {
                    $screenshots .= ",";
                }
                $screenshots .= $file_name;
                $i++;
            }
        }
        Contact::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'subject'=> $request->subject,
            'message'=> $request->message,
            'screenshots'=> $screenshots,
            'created_at'=> Carbon::now()
        ]);
        return back()->with('success','Message sent successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        if (  $contact->status == 0) {
            $contact->status = 1;
            $contact->updated_by = auth()->id();
            $contact->save();
        }

        return view('dashboard.contact.show',['message'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
