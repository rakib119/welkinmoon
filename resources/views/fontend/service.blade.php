@extends('layouts.fontend')
@section('main_content')
<section>
    <div class="w-100 position-relative">
        <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
            <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/images/ttl-bg-shp.png" alt="Title Background Shape" height="329" width="1920">
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100">
                    <h1>Services <i class="btm-ln v2 bg-color9"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 position-relative">
        <div class="particles-wrap position-absolute w-100">
            <div id="particle-1" class="particles-js top_left w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="{{asset('assets/images/particle-1.png')}}" data-image-width="150" data-image-height="150">
                <canvas></canvas>
            <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="420" height="537"></canvas></div>
        </div>
        <div class="container">
            <div class="awsm-thng-abt-seos-wrap w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-7">
                        <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid brd-rd20" src="assets/images/resources/awsm-thng-abt-seos-mckp.jpg" alt="Awesome Things About SEOES Mockup" height="400" width="600"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-5">
                        <div class="text-box w-100">
                            <div class="sec-title w-100 position-relative">
                                <span class="d-block text-color9 text-uppercase">{{$serviceFirst->short_title}}</span>
                                <h2 class="mb-0">{{$serviceFirst->title_first}} <br> <span>{{$serviceFirst->title_second}}</span></h2>
                                <i class="btm-ln bg-color9"></i>
                            </div><!-- Sec Title -->
                            <p class="mb-0">{{$serviceFirst->short_description}}</p>
                            <a class="thm-btn rounded-pill d-inline-block" href="{{route('contact_us')}}" title="">{{$serviceFirst->button_name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-100 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-19.png)"></div>
        <div class="container">
            <div class="sec-title text-center w-100 position-relative">
                <h2 class="mb-0"><span>We've Done</span> Lot's Of Work</h2>
                <i class="btm-ln bg-color9"></i>
            </div><!-- Sec Title -->
            <div class="wrk-dn-wrap res-row position-relative w-100">
                <div class="row mrg30">
                    @foreach ($ServiceSecond as $data)
                        <div class="col-md-6 col-sm-6 col-lg-4 mb-4">
                            <div class="wrk-dn-box text-center w-100">
                                <div class="wrk-dn-img w-100"><img class="img-fluid" src="{{asset("assets/images/services/$data->service_photo")}}"></div>
                                <div class="wrk-dn-info w-100">
                                    <h3 class="mb-0"><a href="{{ route('about')}}" >{{$data->service_name}}</a></h3>
                                    <p class="mb-0">{{$data->service_description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
