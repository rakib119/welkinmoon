<?php

namespace App\Http\Controllers;

use App\Models\FatherInfo;
use App\Models\MotherInfo;
use App\Models\PersonalInfo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class InformationController extends Controller
{
    public function create()
    {
        $user = User::where('id', auth()->id())->first();
        if ($user->personalInfo && $user->fatherInfo && $user->motherInfo) {
            return view('dashboard.information.all_Information', compact('user'));
            // return redirect()->route('user_details', auth()->id());
        } else {
            return view('dashboard.information.index', compact('user'));
        }
        //  $has_p_info = PersonalInfo:: where('user_id',auth()->id())->count();
        //  $has_f_info = FatherInfo:: where('user_id',auth()->id())->count();
        //  $has_m_info = MotherInfo:: where('user_id',auth()->id())->count();
        //  $personal_info =  PersonalInfo:: where('user_id',auth()->id())->first();
        //  $father_info =  FatherInfo:: where('user_id',auth()->id())->first();
        //  $mother_info =  MotherInfo:: where('user_id',auth()->id())->first();

    }

    public function your_info(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'Last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'date_of_birth' => 'required|max:255',
            'present_address' => 'required|max:255',
            'permanent_address' => 'required|max:255',
            'nid_or_dob_number' => 'required|max:255',
            'marital_status' => 'required|max:255',
            'zip_code' => 'required|max:255',
            'occupation' => 'required|max:255',
            'religion' => 'required|max:255',
            'police_station' => 'required|max:255',
            'number_of_duty_officer' => 'required|max:255',
            'gender' => 'required|max:255',
            'fire_service_name' => 'nullable|max:255',
            'fire_service_number' => 'nullable|max:255',
            'Upazila_Hospital_Name' => 'nullable|max:255',
            'Upazila_Hospital_number' => 'nullable|max:255',
            'picture' => 'required|max:255|mimes:jpg,png',
            'NID_Card_Or_DOB_Attested_copy' => 'required|max:255|mimes:jpg,png',
            'nid_or_dob_font' => 'required|max:255|mimes:jpg,png',
            'nid_back' => 'required|max:255|mimes:jpg,png',
            'education_certificate' => 'required|max:255|mimes:jpg,png',
            'statement' => 'required|max:255|mimes:jpg,png',
        ]);
        $extension = $request->file('picture')->getClientOriginalExtension();
        $picture = Str::random(12) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/information/personal/' . $picture);
        Image::make($request->file('picture'))->save($save_link);

        $extension = $request->file('NID_Card_Or_DOB_Attested_copy')->getClientOriginalExtension();
        $NID_Card_Or_DOB_Attested_copy = Str::random(12) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/information/personal/' . $NID_Card_Or_DOB_Attested_copy);
        Image::make($request->file('NID_Card_Or_DOB_Attested_copy'))->save($save_link);

        $extension = $request->file('nid_or_dob_font')->getClientOriginalExtension();
        $nid_or_dob_font = Str::random(12) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/information/personal/' . $nid_or_dob_font);
        Image::make($request->file('nid_or_dob_font'))->save($save_link);

        $extension = $request->file('nid_back')->getClientOriginalExtension();
        $nid_back = Str::random(12) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/information/personal/' . $nid_back);
        Image::make($request->file('nid_back'))->save($save_link);

        $extension = $request->file('education_certificate')->getClientOriginalExtension();
        $education_certificate = Str::random(12) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/information/personal/' . $education_certificate);
        Image::make($request->file('education_certificate'))->save($save_link);

        $extension = $request->file('statement')->getClientOriginalExtension();
        $statement = Str::random(12) . auth()->id() . "." . $extension;
        $save_link = base_path('public/assets/images/information/personal/' . $statement);
        Image::make($request->file('statement'))->save($save_link);

        PersonalInfo::insert([
            'user_id' => auth()->id(),
            'first_name' => $request->first_name,
            'Last_name' => $request->Last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'nid_or_dob_number' => $request->nid_or_dob_number,
            'marital_status' => $request->marital_status,
            'zip_code' => $request->zip_code,
            'occupation' => $request->occupation,
            'religion' => $request->religion,
            'police_station' => $request->police_station,
            'number_of_duty_officer' => $request->number_of_duty_officer,
            'gender' => $request->gender,
            'fire_service_name' => $request->fire_service_name,
            'fire_service_number' => $request->fire_service_number,
            'Upazila_Hospital_Name' => $request->Upazila_Hospital_Name,
            'Upazila_Hospital_number' => $request->Upazila_Hospital_number,
            'picture' => $picture,
            'NID_Card_Or_DOB_Attested_copy' => $NID_Card_Or_DOB_Attested_copy,
            'nid_or_dob_font' => $nid_or_dob_font,
            'nid_back' => $nid_back,
            'education_certificate' => $education_certificate,
            'statement' => $statement,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Step 1 Completed');
    }
    public function father_info(Request $request)
    {
        $request->validate([
            'father_name' => 'required',
            'father_phone_number' => 'required|max:255',
            'father_permanent_address' => 'required|max:255',
            'father_present_address' => 'required|max:255',
            'father_dob' => 'required|max:255',
            'father_nid_or_passport' => 'required|max:255',
            'father_occupation' => 'required|max:255',
            'father_picture' => 'required|max:255|mimes:jpg,png',
            'father_nid_or_passport_image' => 'required|max:255|mimes:jpg,png',
        ]);
        $extension = $request->file('father_picture')->getClientOriginalExtension();
        $father_picture = Str::random(16) . auth()->id() . "." . $extension;
        $save_link = base_path("public/assets/images/information/father/$father_picture");
        Image::make($request->file('father_picture'))->save($save_link);

        $extension = $request->file('father_nid_or_passport_image')->getClientOriginalExtension();
        $father_nid_or_passport_image = Str::random(16) . auth()->id() . "." . $extension;
        $save_link = base_path("public/assets/images/information/father/$father_nid_or_passport_image");
        Image::make($request->file('father_nid_or_passport_image'))->save($save_link);

        FatherInfo::insert([
            'user_id' => auth()->id(),
            'father_name' => $request->father_name,
            'father_phone_number' => $request->father_phone_number,
            'father_permanent_address' => $request->father_permanent_address,
            'father_present_address' => $request->father_present_address,
            'father_dob' => $request->father_dob,
            'father_nid_or_passport' => $request->father_nid_or_passport,
            'father_occupation' => $request->father_occupation,
            'father_picture' => $father_picture,
            'father_nid_or_passport_image' => $father_nid_or_passport_image,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Step 2 Completed');
    }
    public function mother_info(Request $request)
    {
        $request->validate([
            'mother_name' => 'required',
            'mother_phone_number' => 'required|max:255',
            'mother_permanent_address' => 'required|max:255',
            'mother_present_address' => 'required|max:255',
            'mother_dob' => 'required|max:255',
            'mother_nid_or_passport' => 'required|max:255',
            'mother_occupation' => 'required|max:255',
            'mother_picture' => 'required|max:255|mimes:jpg,png',
            'mother_nid_or_passport_image' => 'required|max:255|mimes:jpg,png',
        ]);
        $extension = $request->file('mother_picture')->getClientOriginalExtension();
        $mother_picture = Str::random(16) . auth()->id() . "." . $extension;
        $save_link = base_path("public/assets/images/information/mother/$mother_picture");
        Image::make($request->file('mother_picture'))->save($save_link);

        $extension = $request->file('mother_nid_or_passport_image')->getClientOriginalExtension();
        $mother_nid_or_passport_image = Str::random(16) . auth()->id() . "." . $extension;
        $save_link = base_path("public/assets/images/information/mother/$mother_nid_or_passport_image");
        Image::make($request->file('mother_nid_or_passport_image'))->save($save_link);

        MotherInfo::insert([
            'user_id' => auth()->id(),
            'mother_name' => $request->mother_name,
            'mother_phone_number' => $request->mother_phone_number,
            'mother_permanent_address' => $request->mother_permanent_address,
            'mother_present_address' => $request->mother_present_address,
            'mother_dob' => $request->mother_dob,
            'mother_nid_or_passport' => $request->mother_nid_or_passport,
            'mother_occupation' => $request->mother_occupation,
            'mother_picture' => $mother_picture,
            'mother_nid_or_passport_image' => $mother_nid_or_passport_image,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', ' All Step Completed');
    }
}
