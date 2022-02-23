<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h2>Personal Information</h2>
            <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
        </div>
        <div class="form py-3">
            <form action="{{ route('your_info') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="first_name">First Name
                                <span class="text-danger">*</span></label>
                            <input id="first_name" type="text" class="form-control"
                                value="{{$user->firstname}}" readonly name="first_name" autofocus required>
                            @error('first_name')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Last_name">Last  Name
                                <span class="text-danger">*</span></label>
                            <input id="Last_name" type="text" class="form-control"
                                value="{{$user->lastname}}" readonly name="Last_name"
                                required>
                            @error('Last_name')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email
                                <span class="text-danger">*</span></label>
                            <input id="email" type="text" class="form-control"
                                value="{{$user->email}}" readonly name="email"
                                required>
                            @error('email')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="phone_number">Phone Number
                                <span class="text-danger">*</span></label>
                            <input id="phone_number" type="text" class="form-control"
                                value="{{$user->phone}}" readonly name="phone_number"
                                required>
                            @error('phone_number')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="date_of_birth">Date Of Birth
                                <span class="text-danger">*</span></label>
                            <input id="date_of_birth" type="date" class="form-control"
                                value="{{$user->birthday}}" readonly name="date_of_birth"
                                required >
                            @error('date_of_birth')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="gender">Gender
                                <span class="text-danger">*</span></label>
                                <input required id="gender" type="text" class="form-control"
                                value="{{ $user->gender }}" name="gender"
                                 readonly>
                            @error('gender')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" >Present Address
                                <span class="text-danger">*</span></label>
                                <Textarea required name="present_address" id="present_address"
                                class="form-control">{{ old('present_address') }}</Textarea>
                            @error('present_address')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" >Permanent  Address
                                <span class="text-danger">*</span></label>
                                <Textarea required name="permanent_address" id="permanent_address"
                                class="form-control">{{ old('permanent_address') }}</Textarea>
                            @error('permanent_address')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="picture">Picture
                                <span  class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="picture" id="picture" class="form-control">
                            @error('picture')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="nid_or_dob_number">NID or DOB Number
                                <span required class="text-danger">*</span></label>
                            <input required id="nid_or_dob_number" type="text" class="form-control"
                                value="{{ old('nid_or_dob_number') }}" name="nid_or_dob_number"
                                >
                            @error('nid_or_dob_number')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="nid_or_dob_font">NID or DOB Font
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="nid_or_dob_font" id="nid_or_dob_font" class="form-control">
                            @error('nid_or_dob_font')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="nid_back">NID back
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="nid_back" id="nid_back" class="form-control">
                            @error('nid_back')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="NID_Card_Or_DOB_Attested_copy">NID Card Or DOB Attested copy
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="NID_Card_Or_DOB_Attested_copy" id="NID_Card_Or_DOB_Attested_copy" class="form-control">
                            @error('NID_Card_Or_DOB_Attested_copy')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="marital_status">Marital Status
                                <span class="text-danger">*</span></label>

                            <input required id="marital_status" type="text" class="form-control"
                                value="{{ old('marital_status') }}" name="marital_status"
                                >
                            @error('marital_status')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="zip_code">Zip Code
                                <span class="text-danger">*</span></label>
                            <input required id="zip_code" type="text" class="form-control"
                                value="{{ old('zip_code') }}" name="zip_code"
                                >
                            @error('zip_code')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="education_certificate">Education Certificate
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="education_certificate" id="education_certificate" class="form-control">
                            @error('education_certificate')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="occupation">Occupation
                                <span class="text-danger">*</span></label>
                            <input required id="occupation" type="text" class="form-control"
                                value="{{ old('occupation') }}" name="occupation"
                                >
                            @error('occupation')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="statement">Statement
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="statement" id="statement" class="form-control">
                            @error('statement')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="religion">Religion
                                <span class="text-danger">*</span></label>
                            <input required id="religion" type="text" class="form-control"
                                value="{{ old('religion') }}" name="religion"
                                >
                            @error('religion')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="police_station">Police Station
                                <span class="text-danger">*</span></label>
                            <input required id="police_station" type="text" class="form-control"
                                value="{{ old('police_station') }}" name="police_station"
                                >
                            @error('police_station')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="number_of_duty_officer">Number Of Outy Officer
                                <span class="text-danger">*</span></label>
                            <input id="number_of_duty_officer" type="text" class="form-control"
                                value="{{ old('number_of_duty_officer') }}" name="number_of_duty_officer"
                                >
                            @error('number_of_duty_officer')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="fire_service_name">Fire Service Name
                                </label>
                            <input id="fire_service_name" type="text" class="form-control"
                                value="{{ old('fire_service_name') }}" name="fire_service_name"
                                >
                            @error('fire_service_name')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="fire_service_number">Fire Service Number
                                </label>
                            <input id="fire_service_number" type="text" class="form-control"
                                value="{{ old('fire_service_number') }}" name="fire_service_number"
                                >
                            @error('fire_service_number')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Upazila_Hospital_Name">Upazila Hospital Name
                                </label>
                            <input id="Upazila_Hospital_Name" type="text" class="form-control"
                                value="{{ old('Upazila_Hospital_Name') }}" name="Upazila_Hospital_Name"
                                >
                            @error('Upazila_Hospital_Name')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Upazila_Hospital_number">Upazila Hospital Number
                                </label>
                            <input id="Upazila_Hospital_number" type="text" class="form-control"
                                value="{{ old('Upazila_Hospital_number') }}" name="Upazila_Hospital_number"
                                >
                            @error('Upazila_Hospital_number')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Submit </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


