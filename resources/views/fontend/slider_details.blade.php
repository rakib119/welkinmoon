@extends('layouts.fontend')
@section('main_content')
<section>
    <div class="w-100 position-relative">
        <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
            <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{asset('assets')}}/images/ttl-bg-shp.png" style="transform: translate(calc(-50% + 15px), calc(-50% - 15px));" width="1920" height="329">
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100" style="transform: translateY(75.9259px); opacity: 0.481482;">
                    <h1>Details <i class="btm-ln v2 bg-color9"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-120 position-relative">
        <div class="container">
            <div class="post-detail-wrap position-relative w-100">
                <div class="post-detail-img w-100">
                    <img class="img-fluid w-100" src="{{asset("assets/images/slider/".$slider->slider_details->image)}} " height="576" width="1024">
                </div>
                <div class="post-detail-desc w-100">
                    <p class="mb-0">{{$slider->slider_details->first_part}}</p>
                    <blockquote>
                        <p class="mb-0">{{$slider->slider_details->second_part}}</p>
                    </blockquote>
                    <p class="mb-0">{{$slider->slider_details->third_part}}</p>
                    <div class="post-detail-gal w-100">
                        <div class="row mrg15">
                            @foreach ( explode(',',$slider->slider_details->photos)  as $key=>$photo)
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="post-detail-gal-item position-relative overflow-hidden w-100">
                                        <a href="{{asset("assets/images/slider/".$photo)}}" data-fancybox="gal"  ><img class="img-fluid w-100" src="{{asset("assets/images/slider/".$photo)}}"  ></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <p class="mb-0">{{$slider->slider_details->forth_part}}</p>
                    <p class="mb-0">{{$slider->slider_details->fifth_part}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
