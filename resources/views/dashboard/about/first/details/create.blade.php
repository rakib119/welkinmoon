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
                                <h4>Add Blog</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add blog Details</li>
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
                                        <h2>Add Blog Details</h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('about-blog-details.store') }}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="blog_id" value="{{$blog_id}}">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="image">Image
                                                            <span class="text-danger">* (1920 x 1080)</span></label>
                                                        <input id="image" type="file" class="form-control"  name="image" placeholder="Enter a image" >
                                                        @error('image')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="photos">Photos
                                                            <span class="text-danger">* (1920 x 1080)</span></label>
                                                        <input id="photos" type="file" class="form-control"  name="photos[]" multiple >
                                                        @error('photos')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                        @error('photos.0')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="first_part">First Part
                                                            <span class="text-danger">*</span></label>
                                                        <Textarea name="first_part" id="first_part"
                                                            class="form-control">{{ old('first_part') }}</Textarea>
                                                        @error('first_part')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="second_part">Second Part
                                                            <span class="text-danger">*</span></label>
                                                        <Textarea name="second_part" id="second_part"
                                                            class="form-control">{{ old('second_part') }}</Textarea>
                                                        @error('second_part')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="third_part">Third Part
                                                            <span class="text-danger">*</span></label>
                                                        <Textarea name="third_part" id="third_part"
                                                            class="form-control">{{ old('third_part') }}</Textarea>
                                                        @error('third_part')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="forth_part">Forth Part
                                                            <span class="text-danger">*</span></label>
                                                        <Textarea name="forth_part" id="forth_part"
                                                            class="form-control">{{ old('forth_part') }}</Textarea>
                                                        @error('forth_part')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="fifth_part">Fifth Part
                                                            <span class="text-danger">*</span></label>
                                                        <Textarea name="fifth_part" id="fifth_part"
                                                            class="form-control">{{ old('fifth_part') }}</Textarea>
                                                        @error('fifth_part')
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
