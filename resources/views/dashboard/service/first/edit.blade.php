@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Edit Item </h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Service First</a>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Service First</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2>Update Data </h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('service-first.update',$data->id)  }}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Short_Title">Short Title</label>
                                                        <input id="Short_Title" type="text" class="form-control"
                                                            value="{{$data->short_title }}" name="short_title" autofocus>
                                                        @error('short_title')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Title First
                                                            <span class="text-danger">*</span></label>
                                                        <input id="title_first" type="text" class="form-control"
                                                            value="{{$data->title_first}}" name="title_first">
                                                        @error('title_first')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Title Second
                                                            <span class="text-danger">*</span></label>
                                                        <input id="title_second" type="text" class="form-control"
                                                            value="{{$data->title_second}}" name="title_second">
                                                        @error('title_second')
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
