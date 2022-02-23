@extends('layouts.dashboard')
{{-- Css --}}
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
{{-- Javascript --}}
@section('javacript')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#description').summernote({
                toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ]
            });
        });
    </script>
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Edit Team Members</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item  "><a href="javascript:void(0)">Team</a>
                                    <li class="breadcrumb-item  "><a href="{{ route('team.index') }}">Edit Team</a> </li>
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
                                        <h2>Update Team </h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('team.update',$team->id)  }}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name">Name
                                                            <span class="text-danger">*</span></label>
                                                        <input id="name" type="text" class="form-control"
                                                            value="{{$team->name }}" name="name"
                                                            placeholder="Enter Team Member Name" autofocus>
                                                        @error('name')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label"
                                                            for="post">Post
                                                            <span class="text-danger">*</span></label>
                                                        <input id="post" type="text" class="form-control"
                                                            value="{{ $team->post }}" name="post"
                                                            placeholder="Enter your task">
                                                        @error('post')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="img">Image
                                                            <span class="text-danger">*</span></label>
                                                        <input type="file" accept=".jpg,.png" name="img" id="img" class="form-control">
                                                        @error('img')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="facebook">Facebook Link
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="facebook" id="facebook"
                                                            value="{{ $team->facebook }}"  class="form-control">
                                                        @error('facebook')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="twitter">Twitter Link
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="twitter" id="twitter"
                                                            value="{{ $team->twitter }}" class="form-control">
                                                        @error('twitter')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="linkedin">Linkedin Link
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="linkedin" id="linkedin"
                                                            value="{{ $team->linkedin }}" class="form-control">
                                                        @error('linkedin')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="linkedin">Show in?
                                                            <span class="text-danger">*</span></label>
                                                            <select name="show_in" id="" class="form-control">
                                                                <option value="">--Select Page--</option>
                                                                <option {{$team->show_in =='home_slider_1'?'selected':""}} value="home_slider_1">Home Page slider 1</option>
                                                                <option {{$team->show_in =='home_slider_2'?'selected':""}} value="home_slider_2">Home Page slider 2</option>
                                                                <option {{$team->show_in =='our_team_slider_1'?'selected':""}} value="our_team_1">Our Team Page slider 1</option>
                                                                <option {{$team->show_in =='our_team_slider_2'?'selected':""}} value="our_team_2">Our Team Page slider 2</option>
                                                            </select>
                                                        @error('show_in')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description
                                                            <span class="text-danger">*</span></label>
                                                            <Textarea name="description" id="description"
                                                             class="form-control">{{  $team->description }}</Textarea>
                                                        @error('description')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mt-3">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-success">Update </button>
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
