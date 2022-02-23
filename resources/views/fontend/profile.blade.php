@extends('layouts.fontend')

@section('main_content')
<section>
    <div class="w-100 position-relative">
        <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
            <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{asset('assets')}}/images/ttl-bg-shp.png" style="transform: translate(calc(-50% + 15px), calc(-50% - 15px));" width="1920" height="329">
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100" style="transform: translateY(75.9259px); opacity: 0.481482;">
                    <h1>Profile <i class="btm-ln v2 bg-color9"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profile')}}">Profile</a></li>
                        <li class="breadcrumb-item active">{{auth()->user()->name}} </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-50 pb-120 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-1.png);"></div>
        <div class="particles-wrap position-absolute w-100">
            <div id="particle-1" class="particles-js top_right w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="{{ asset('assets') }}/images/particle-1.png" data-image-width="150" data-image-height="150">
                <canvas></canvas>
            <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="420" height="904"></canvas></div>
        </div>
        <div class="container">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                        @if ($info->personalInfo->picture)
                            <img src="{{asset('assets/images/information/personal/'.$info->personalInfo->picture )}} " class="rounded-circle" width="150">
                        @else
                        <img src="{{asset('assets/images/information/personal/default-profile.png')}} " class="rounded-circle" width="150">
                        <a class="btn btn-primary" href="{{route('info.create')}}">Update</a>
                        @endif
                        <div class="mt-3">
                            <h4>{{$info->name}}  <span style="font-size: 10px; padding: 5px; " class="badge bg-info rounded-circle"><i class="fas fa-solid fa-check"></i></span></h4>
                            @if ($info->personalInfo->present_address)
                            <p class="text-muted font-size-sm">{{$info->personalInfo->present_address}}</p>
                            @else
                            <a class="btn btn-primary" href="{{route('info.create')}}">Update</a>
                            @endif
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        Joinig Date : <span class="text-right"> {{$info->created_at->format('d M Y')}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        Religion : <span class="text-right">  {{$info->personalInfo->religion}} </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        Occupation : <span class="text-right">  {{$info->personalInfo->occupation}} </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        Marital status : <span class="text-right">  {{$info->personalInfo->marital_status}} </span>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$info->name}}
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$info->email}}
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$info->phone}}
                        </div>
                        </div>
                        <hr>
                        @if ($info->personalInfo->present_address && $info->personalInfo->permanent_address)
                        <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Present Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p class="text-muted font-size-sm">{{$info->personalInfo->present_address}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Permanent Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p class="text-muted font-size-sm">{{$info->personalInfo->permanent_address}}</p>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-sm-3">
                                <a class="btn btn-primary" href="{{route('info.create')}}">Update</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    </div>
                    <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info">Father's</i> <span style="margin-left:7px">Information</span> </h6>
                            @if ($info->fatherInfo)
                            <p class=" mb-3">Name: {{$info->fatherInfo->father_name}} </p>
                            <hr>
                            <p class=" mb-3">Phone: {{$info->fatherInfo->father_phone_number}} </p>
                            <hr>
                            <p class=" mb-3">Present Address: {{$info->fatherInfo->father_present_address}} </p>
                            <hr>
                            <p class=" mb-3">Permanent Address: {{$info->fatherInfo->father_permanent_address}} </p>
                            @else
                            <div class="text-center my-5">
                                <a class="btn btn-primary" href="{{route('info.create')}}">Add Father Info</a>
                            </div>
                            @endif
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                       <div class="card h-100">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Mother's</i> <span style="margin-left:7px">Information</span></h6>
                            @if ($info->motherInfo)
                            <p class=" mb-3">Name: {{$info->motherInfo->mother_name}} </p>
                            <hr>
                            <p class=" mb-3">Phone: {{$info->motherInfo->mother_phone_number}} </p>
                            <hr>
                            <p class=" mb-3">Present Address: {{$info->motherInfo->mother_present_address}} </p>
                            <hr>
                            <p class=" mb-3">Permanent Address: {{$info->motherInfo->mother_permanent_address}} </p>
                            @else
                            <div class="text-center my-5">
                            <a class="btn btn-primary" href="{{route('info.create')}}">Add mother Info</a>
                            </div>
                            @endif
                        </div>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

 @endsection
