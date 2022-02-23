<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h2>Mother Information</h2>
            {{$errors}}
            <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
        </div>
        <div class="form py-3">
            <form action="{{ route('mother_info') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_name">Mother Name
                                <span class="text-danger">*</span></label>
                            <input id="mother_name" type="text" class="form-control"
                                value="{{ old('mother_name') }}" name="mother_name" autofocus required>
                            @error('mother_name')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_phone_number">Mother Phone Number
                                <span class="text-danger">*</span></label>
                            <input id="mother_phone_number" type="text" class="form-control"
                                value="{{ old('mother_phone_number') }}"  name="mother_phone_number"
                                required>
                            @error('mother_phone_number')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_occupation">Mother Occupation
                                <span class="text-danger">*</span></label>
                            <input id="mother_occupation" type="text" class="form-control"
                                value="{{ old('mother_occupation') }}"  name="mother_occupation"
                                required>
                            @error('mother_occupation')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_dob">Mother Date Of Birth
                                <span class="text-danger">*</span></label>
                            <input id="mother_dob" type="date" class="form-control"
                                value="{{ old('mother_dob') }}" name="mother_dob"
                                required >
                            @error('mother_dob')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" >Mother Present Address
                                <span class="text-danger">*</span></label>
                                <Textarea required name="mother_present_address" id="mother_present_address"
                                class="form-control">{{ old('mother_present_address') }}</Textarea>
                            @error('mother_present_address')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" >Mother Permanent  Address
                                <span class="text-danger">*</span></label>
                                <Textarea required name="mother_permanent_address" id="mother_permanent_address"
                                class="form-control">{{ old('mother_permanent_address') }}</Textarea>
                            @error('mother_permanent_address')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_picture">Mother Picture
                                <span  class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="mother_picture" id="mother_picture" class="form-control">
                            @error('mother_picture')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_nid_or_passport">Mother Id Or Passport Number
                                <span class="text-danger">*</span></label>
                            <input id="mother_nid_or_passport" type="text" class="form-control"
                                value="{{ old('mother_nid_or_passport') }}"  name="mother_nid_or_passport"
                                required>
                            @error('mother_nid_or_passport')
                                <h6 class="text-danger"> {{ $message }}</h6>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="mother_nid_or_passport_image">Mother NID or Passport Image
                                <span class="text-danger">*</span></label>
                            <input required type="file" accept=".jpg,.png" name="mother_nid_or_passport_image" id="mother_nid_or_passport_image" class="form-control">
                            @error('mother_nid_or_passport_image')
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


