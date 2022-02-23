@extends('layouts.dashboard')

@section('content')
<div class="main-content">
    <div class="page-content">
        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Add Information</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item  "><a href="javascript:void(0)">Information</a>
                                <li class="breadcrumb-item active">Add Information</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h2>Personal  Information</h2>
                                </div>
                                <div class="form py-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="first_name">First Name
                                                    </label>
                                                <input readonly id="first_name" type="text" class="form-control"
                                                    value="{{$user->personalInfo->first_name}}"  name="first_name"  >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="Last_name">Last  Name
                                                    </label>
                                                <input readonly id="Last_name" type="text" class="form-control"
                                                    value="{{$user->personalInfo->Last_name}}"  name="Last_name" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Email
                                                    </label>
                                                <input readonly id="email" type="text" class="form-control"
                                                    value="{{$user->personalInfo->email}}"  name="email" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="phone_number">Phone Number
                                                    </label>
                                                <input readonly id="phone_number" type="text" class="form-control"
                                                    value="{{$user->personalInfo->phone_number}}"  name="phone_number" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="date_of_birth">Date Of Birth
                                                    </label>
                                                <input readonly id="date_of_birth" type="date" class="form-control"
                                                    value="{{$user->personalInfo->date_of_birth}}"  name="date_of_birth" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="gender">Gender
                                                    </label>
                                                    <input readonly  id="gender" type="text" class="form-control"
                                                    value="{{$user->personalInfo->gender}}"  name="gender" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" >Present Address
                                                    </label>
                                                    <Textarea readonly     name="present_address" id="present_address"
                                                    class="form-control">{{$user->personalInfo->present_address}}</Textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" >Permanent  Address
                                                    </label>
                                                    <Textarea readonly    name="permanent_address" id="permanent_address"
                                                    class="form-control">{{$user->personalInfo->permanent_address}}</Textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="nid_or_dob_number">NID or DOB Number
                                                    </label>
                                                <input readonly  id="nid_or_dob_number" type="text" class="form-control"
                                                    value="{{$user->personalInfo->nid_or_dob_number}}" name="nid_or_dob_number"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="marital_status">Marital Status
                                                    </label>
                                                <input readonly  id="marital_status" type="text" class="form-control"
                                                    value="{{$user->personalInfo->marital_status}}" name="marital_status"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="zip_code">Zip Code
                                                    </label>
                                                <input readonly  id="zip_code" type="text" class="form-control"
                                                    value="{{$user->personalInfo->zip_code}}" name="zip_code"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="occupation">Occupation
                                                    </label>
                                                <input readonly  id="occupation" type="text" class="form-control"
                                                    value="{{$user->personalInfo->occupation}}" name="occupation"
                                                    >
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="religion">Religion
                                                    </label>
                                                <input readonly  id="religion" type="text" class="form-control"
                                                    value="{{$user->personalInfo->religion}}" name="religion"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="police_station">Police Station
                                                    </label>
                                                <input readonly  id="police_station" type="text" class="form-control"
                                                    value="{{$user->personalInfo->police_station}}" name="police_station"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="number_of_duty_officer">Number Of Outy Officer
                                                    </label>
                                                <input readonly id="number_of_duty_officer" type="text" class="form-control"
                                                    value="{{$user->personalInfo->number_of_duty_officer}}" name="number_of_duty_officer"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="fire_service_name">Fire Service Name
                                                    </label>
                                                <input readonly id="fire_service_name" type="text" class="form-control"
                                                    value="{{$user->personalInfo->fire_service_name}}" name="fire_service_name"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="fire_service_number">Fire Service Number
                                                    </label>
                                                <input readonly id="fire_service_number" type="text" class="form-control"
                                                    value="{{$user->personalInfo->fire_service_number}}" name="fire_service_number"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="Upazila_Hospital_Name">Upazila Hospital Name
                                                    </label>
                                                <input readonly id="Upazila_Hospital_Name" type="text" class="form-control"
                                                    value="{{$user->personalInfo->Upazila_Hospital_Name}}" name="Upazila_Hospital_Name"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="Upazila_Hospital_number">Upazila Hospital Number
                                                    </label>
                                                <input readonly id="Upazila_Hospital_number" type="text" class="form-control"
                                                    value="{{$user->personalInfo->Upazila_Hospital_number}}" name="Upazila_Hospital_number"
                                                    >
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="picture">Picture
                                                    </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/personal/".$user->personalInfo->picture)}}" style="height:50px; width:50px;" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="nid_or_dob_font">NID or DOB Font
                                                    </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/personal/".$user->personalInfo->nid_or_dob_font)}}" style="height:50px; width:50px;" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="nid_back">NID back
                                                    </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/personal/".$user->personalInfo->nid_back)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="NID_Card_Or_DOB_Attested_copy">NID Card Or DOB Attested copy
                                                    </label>
                                                    <br>
                                                    <img src="{{asset("assets/images/information/personal/".$user->personalInfo->NID_Card_Or_DOB_Attested_copy)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="education_certificate">Education Certificate
                                                    </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/personal/".$user->personalInfo->education_certificate)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="statement">Statement
                                                </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/personal/".$user->personalInfo->statement)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h2>Father Information</h2>
                                </div>
                                <div class="form py-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_name">Father Name
                                                    </label>
                                                <input readonly id="father_name" type="text" class="form-control"
                                                    value="{{$user->fatherInfo->father_name}}" name="father_name"  >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_phone_number">Father Phone Number
                                                    </label>
                                                <input readonly id="father_phone_number" type="text" class="form-control"
                                                    value="{{$user->fatherInfo->father_phone_number}}"  name="father_phone_number"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_occupation">Father Occupation
                                                    </label>
                                                <input readonly id="father_occupation" type="text" class="form-control" value="{{$user->fatherInfo->father_occupation}}"  name="father_occupation" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_dob">Father Date Of Birth
                                                    </label>
                                                <input readonly id="father_dob" type="date" class="form-control" value="{{$user->fatherInfo->father_dob}}" name="father_dob" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" >Father Present Address </label>
                                                <Textarea readonly name="father_present_address" id="father_present_address" class="form-control">{{$user->fatherInfo->father_present_address}}</Textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" >Father Permanent  Address </label>
                                                <Textarea readonly    name="father_permanent_address" id="father_permanent_address" class="form-control">{{$user->fatherInfo->father_permanent_address}}</Textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_picture">Father Picture </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/father/".$user->fatherInfo->father_picture)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_nid_or_passport">Father Id Or Passport Number </label>
                                                <input readonly id="father_nid_or_passport" type="text" class="form-control"
                                                    value="{{$user->fatherInfo->father_nid_or_passport}}"  name="father_nid_or_passport"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="father_nid_or_passport_image">Father NID or Passport Image </label>
                                                <br>
                                                 <img src="{{asset("assets/images/information/father/".$user->fatherInfo->father_nid_or_passport_image)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h2>Mother Information</h2>
                                </div>
                                 <div class="form py-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_name">Mother Name
                                                    </label>
                                                <input readonly id="mother_name" type="text" class="form-control"
                                                    value="{{$user->motherInfo->mother_name}}" name="mother_name"  >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_phone_number">Mother Phone Number
                                                    </label>
                                                <input readonly id="mother_phone_number" type="text" class="form-control"
                                                    value="{{$user->motherInfo->mother_phone_number}}"  name="mother_phone_number"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_occupation">Mother Occupation
                                                    </label>
                                                <input readonly id="mother_occupation" type="text" class="form-control"
                                                    value="{{$user->motherInfo->mother_occupation}}"  name="mother_occupation"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_dob">Mother Date Of Birth
                                                    </label>
                                                <input readonly id="mother_dob" type="date" class="form-control"
                                                    value="{{$user->motherInfo->mother_dob}}" name="mother_dob"
                                                     >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" >Mother Present Address
                                                    </label>
                                                    <Textarea readonly    name="mother_present_address" id="mother_present_address"
                                                    class="form-control">{{$user->motherInfo->mother_present_address}}</Textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" >Mother Permanent  Address
                                                    </label>
                                                    <Textarea readonly    name="mother_permanent_address" id="mother_permanent_address"
                                                    class="form-control">{{$user->motherInfo->mother_permanent_address}}</Textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_picture">Mother Picture
                                                    </label>
                                                    <br>
                                                    <img src="{{asset("assets/images/information/mother/".$user->motherInfo->mother_picture)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_nid_or_passport">Mother Id Or Passport Number
                                                    </label>
                                                <input readonly id="mother_nid_or_passport" type="text" class="form-control"
                                                    value="{{$user->motherInfo->mother_nid_or_passport}}"  name="mother_nid_or_passport"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="mother_nid_or_passport_image">Mother NID or Passport Image
                                                    </label>
                                                <br>
                                                <img src="{{asset("assets/images/information/mother/".$user->motherInfo->mother_nid_or_passport_image)}}" style="height:50px; width:50px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection








