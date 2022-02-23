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
                                <h4>Home Second Right Edit </h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home Second Edit</a>
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
                                        <h2>Home Second Right Update </h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('home_second_right.update',$data->id)}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Short_Title">Short Title<span class="text-danger">*</span></label>
                                                        <input id="Short_Title" type="text" class="form-control"
                                                            value="{{$data->short_title }}" name="short_title" autofocus>
                                                        @error('short_title')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Title
                                                            <span class="text-danger">*</span></label>
                                                        <input id="title" type="text" class="form-control"
                                                            value="{{$data->title }}" name="title">
                                                        @error('title')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Icon
                                                            <span class="text-danger">*</span></label>
                                                        <input readonly id="icon-input-field" type="text" class="form-control"
                                                            value="{{$data->icon }}" name="icon">
                                                        @error('icon')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                        <div class="mt-3" style="height: 100px; overflow-y:scroll">
                                                            @foreach ($icons as $icon)
                                                            <span >
                                                                <i id="{{$icon->icon}}" style="font-size: 25px; margin: 5px; padding: 5px;" class="input-icon border {{$icon->icon}}"></i>
                                                            </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Short Description
                                                            <span class="text-danger">*</span></label>
                                                            <Textarea name="short_description"
                                                             class="form-control">{{ $data->short_description  }}</Textarea>
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
@section('javacript')
<script>
    $(".input-icon").click(function(){
        $("#icon-input-field").val($(this).attr('id'))
    })
</script>

@endsection
