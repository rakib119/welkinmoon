<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h2>Father Information</h2>
            {{$errors}}
            <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
        </div>
        <div class="form py-3">
            <form action="{{ route('father_info') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_name">Father Name
                                <span class="text-danger">*</span></label>
                            <input id="father_name" type="text" class="form-control"
                                value="{{ old('father_name') }}" name="father_name" autofocus required>
                            @error('father_name')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_phone_number">Father Phone Number
                                <span class="text-danger">*</span></label>
                            <input id="father_phone_number" type="text" class="form-control"
                                value="{{ old('father_phone_number') }}"  name="father_phone_number"
                                required>
                            @error('father_phone_number')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_occupation">Father Occupation
                                <span class="text-danger">*</span></label>
                            <input id="father_occupation" type="text" class="form-control"
                                value="{{ old('father_occupation') }}"  name="father_occupation"
                                required>
                            @error('father_occupation')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_dob">Father Date Of Birth
                                <span class="text-danger">*</span></label>
                            <input id="father_dob" type="date" class="form-control"
                                value="{{ old('father_dob') }}" name="father_dob"
                                required >
                            @error('father_dob')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" >Father Present Address
                                <span class="text-danger">*</span></label>
                                <Textarea required name="father_present_address" id="father_present_address"
                                class="form-control">{{ old('father_present_address') }}</Textarea>
                            @error('father_present_address')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" >Father Permanent  Address
                                <span class="text-danger">*</span></label>
                                <Textarea required name="father_permanent_address" id="father_permanent_address"
                                class="form-control">{{ old('father_permanent_address') }}</Textarea>
                            @error('father_permanent_address')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_picture">Father Picture
                                <span  class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="father_picture" id="father_picture" class="form-control">
                            @error('father_picture')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_nid_or_passport">Father Id Or Passport Number
                                <span class="text-danger">*</span></label>
                            <input id="father_nid_or_passport" type="text" class="form-control"
                                value="{{ old('father_nid_or_passport') }}"  name="father_nid_or_passport"
                                required>
                            @error('father_nid_or_passport')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="father_nid_or_passport_image">Father NID or Passport Image
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="father_nid_or_passport_image" id="father_nid_or_passport_image" class="form-control">
                            @error('father_nid_or_passport_image')
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


