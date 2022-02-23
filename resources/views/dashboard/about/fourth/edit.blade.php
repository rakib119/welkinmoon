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
                                <h4>Edit this Section </h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item  "><a href="javascript:void(0)">Edit</a>
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
                                        <h2>Update </h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('about-fourth.update',$data->id)  }}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name">Title
                                                            <span class="text-danger">* (For new line use "&lt;br&gt;")</span></label>
                                                        <input id="title" type="text" class="form-control"
                                                            value="{{ $data->title }}" name="title" >
                                                        @error('title')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label"
                                                            for="first_item">First Item
                                                            <span class="text-danger">*</span></label>
                                                        <input id="first_item" type="text" class="form-control"
                                                            value="{{ $data->first_item }}" name="first_item" >
                                                        @error('first_item')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label"
                                                            for="second_item">Second Item
                                                            <span class="text-danger">*</span></label>
                                                        <input id="second_item" type="text" class="form-control"
                                                            value="{{ $data->second_item }}" name="second_item" >
                                                        @error('second_item')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label"
                                                            for="third_item">Third Item
                                                            <span class="text-danger">*</span></label>
                                                        <input id="third_item" type="text" class="form-control"
                                                            value="{{ $data->third_item }}" name="third_item" >
                                                        @error('third_item')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Short Description
                                                            <span class="text-danger">*</span></label>
                                                            <Textarea name="short_description"
                                                             class="form-control">{{  $data->short_description  }}</Textarea>
                                                        @error('short_description')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label"
                                                            for="button_name">Button Name
                                                            <span class="text-danger">*</span></label>
                                                        <input id="button_name" type="text" class="form-control"
                                                            value="{{ $data->button_name }}" name="button_name" >
                                                        @error('button_name')
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
