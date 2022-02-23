@php
$title = 'About';
@endphp
@extends('layouts.fontend')
@section('main_content')
<section>
    <div class="w-100 position-relative">
        <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
            <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/images/ttl-bg-shp.png" alt="Title Background Shape" style="transform: translate(calc(-50% + 15px), calc(-50% - 15px));" width="1920" height="329">
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100" style="transform: translateY(75.9259px); opacity: 0.481482;">
                    <h1>About us <i class="btm-ln v2 bg-color9"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">About us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Title Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-160 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-4.png);"></div>
        <div class="container">
            <div class="extended-serv-wrap2 res-row position-relative text-center w-100">
                <div class="row">
                    @foreach ($first_items as $first_item)
                        <div class="col-md-6 col-sm-6 col-lg-4 mb-5">
                            <div class="extend-serv-box v2 text-center w-100 position-relative">
                                <span><i class="{{$first_item->icon}}"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="{{route('about_blog_details',Crypt::encryptString($first_item->id))}}">{{$first_item->title}}</a></h3>
                                    <p class="mb-0">{{$first_item->short_description}}</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="{{route('fontend-service')}}" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-1.png);"></div>
        <div class="container">
            <div class="spclizd-dvlpmnt-wrap position-relative w-100">
                <div class="row align-items-end">
                    <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/spclizd-dvlpmnt-mckp.png" alt="Specialized Development Mockup" height="507" width="513"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">{!! $second_item->title !!}</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div>
                            <p class="mb-0">{{$second_item->short_description}}</p>
                            <a class="thm-btn rounded-pill d-inline-block" href="javascript:void(0);">{{$second_item->button_name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-120 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/bg-10.png);"></div>
        <div class="container">
            <div class="text-box-wrap w-100 text-center position-relative">
                <div class="text-box text-white d-inline-block">
                    <div class="sec-title text-center w-100 position-relative">
                        <h2 class="mb-0">Why People Choose Us</h2>
                        <i class="btm-ln bg-color3"></i>
                    </div><!-- Sec Title -->
                </div>
            </div>
            <div class="facts-wrap2 text-center position-relative w-100">
                <div class="row">
                    @foreach ($third_items->sortBy('id') as  $third_item)
                    @php
                        $number = $third_item->number;
                        $operator = "";
                        $position = strpos($number,'%');
                        if ($position) {
                           $number = Str::substr($number, 0, $position);
                           $operator= Str::substr($third_item->number, $position,30);
                        }
                    @endphp
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="{{$third_item->icon}}"></i></span>
                                <h3 class="mb-0"><span class="counter">{{$number}}</span>{{$operator}}</h3>
                                <h5 class="mb-0">{{$third_item->title}}</h5>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-60 pb-60 position-relative">
        <div class="particles-wrap position-absolute w-100">
            <div id="particle-1" class="particles-js top_right w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-1.png" data-image-width="150" data-image-height="150">
                <canvas></canvas>
            </div>
        </div>
        <div class="container">
            <div class="msn-empwr-wrap position-relative w-100">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/msn-empwr-mckp.png" alt="Mission Empower Mockup"  height="636" width="620"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="text-box ps-5 w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">{!! $fourth_item->title!!}</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div>
                            <p class="mb-0">{{ $fourth_item->short_description}}</p>
                            <ul class="list-unstyled mb-0 w-100">
                                <li>{{ $fourth_item->first_item}}</li>
                                <li>{{ $fourth_item->second_item}}</li>
                                <li>{{ $fourth_item->third_item}}</li>
                            </ul>
                            <a class="thm-btn rounded-pill d-inline-block" href="{{route('our_story')}}">{{ $fourth_item->button_name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 bg-color10 pb-110 position-relative">
        <div class="container">
            <div class="sec-title text-center w-100 position-relative">
                <h2 class="mb-0">Our Standards</h2>
                <i class="btm-ln bg-color3"></i>
            </div><!-- Sec Title -->
            <div class="serv-wrap2 position-relative text-center w-100">
                <div class="row">
                    @foreach ($fifth_items as $fifth_item)
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="{{$fifth_item->icon}}"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0)" title="">{{$fifth_item->title}}</a></h3>
                                    <p class="mb-0">{{$fifth_item->short_description}}</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="javascript:void(0)" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div><!-- Services Wrap 2 -->
        </div>
    </div>
</section>
@endsection
