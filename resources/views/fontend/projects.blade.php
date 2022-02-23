@php
    $title = 'Our Projects';
    $total_project = $projects->count();
@endphp

@extends('layouts.fontend')
@section('css')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/TimeCircles.js')}}"></script>
<link href="{{asset('assets/css/TimeCircles.css')}}" rel="stylesheet">
@endsection

@section('main_content')
    <main>
        <section>
            <div class="w-100 position-relative">
                <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                    <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{asset('assets')}}/images/ttl-bg-shp.png" style="transform: translate(calc(-50% + 15px), calc(-50% - 15px));" width="1920" height="329">
                    <div class="container">
                        <div class="pg-title-inner text-center position-relative w-100" style="transform: translateY(75.9259px); opacity: 0.481482;">
                            <h1>Our Projects <i class="btm-ln v2 bg-color9"></i></h1>
                            <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Our Projects </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-100 bg-color10 pb-100 position-relative">
                <div class="particles-wrap position-absolute w-100">
                    <div id="particle-2" class="particles-js top_left mx-w25 w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-1.png" data-image-width="150" data-image-height="150">
                        <canvas></canvas>
                    </div>
                </div>
                <div class="container">
                    <div class="sec-title text-center w-100 position-relative">
                        <h2 class="mb-0 mt-5"><span>Our</span> Projects</h2>
                        <i class="btm-ln bg-color3"></i>
                    </div>
                    <div class="row ">
                    @foreach ($projects as $project)
                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-4 mb-5">
                            <div class="post-box brd-rd15 w-100">
                                <div class="post-info ">
                                    <div class="position-relative text-center">
                                        <div class="text-center testi-img d-inline-block overflow-hidden rounded-circle ">
                                            <img class="img-fluid d-inline-block rounded-circle" width="170" height="170" src="{{asset("assets/images/projects/$project->project_logo")}}">
                                        </div>
                                        <h3 class="mb-0"><a href="javascript:void(0);">{{$project->project_name}}</a></h3>
                                    </div>
                                    <p>{{$project->project_description}}</p>
                                </div>
                                <div  style="background-color:#bbb; border-radius: 3px">
                                    <div class="timmer{{$loop->index+1}}" data-date="{{ $project->launch_date }}"></div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var className = ".timmer{{$loop->index+1}}";
                            $(className).TimeCircles();
                        </script>
                     @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-110 pb-80 position-relative">
                <div class="container">
                    <div class="sec-title text-center w-100 position-relative">
                        <h2 class="mb-0"><span>Latest From</span> Blog</h2>
                        <i class="btm-ln bg-color14"></i>
                    </div>
                    <div class="blog-wrap list-view d-inline-block position-relative w-100">
                        <div class="post-box schm-14 brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="javascript:void(0)" title=""><img class="img-fluid w-100"
                                        src="assets/images/resources/post-img1-6.jpg" alt="Post Image 6" height="329"
                                        width="585"></a>
                                <span
                                    class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>30</i>May</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);"
                                        title="">Marketing</a></span>
                                <h3 class="mb-0"><a href="javascript:void(0)" title="">Elegant style</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    eget orci non nunc iaculis lobortis. Vestibulum pretium...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="javascript:void(0)" title="">Read
                                    More<i class="flaticon-right-arrow text-color14"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="view-all d-inline-block mt-60 w-100 text-center position-relative z2">
                        <a class="thm-btn v2 rounded-pill d-inline-block" href="javascript:void(0)" title="">Go To Blog</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-130 pb-70 position-relative">
                <div class="fixed-bg back-size-cont bg-norepeate"
                    style="background-image: url(assets/images/bg-shp-10.png);"></div>
                <div class="container">
                    <div class="sec-title text-white text-center w-100 position-relative">
                        <h2 class="mb-0"><span>Let's Create Something</span> Together</h2>
                        <i class="btm-ln bg-white"></i>
                    </div>
                    <div class="cnt-wrap text-center position-relative w-100">
                        <form class="w-100 d-inline-block" action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="form-group w-100">
                                <div class="response w-100"></div>
                            </div>
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-3 col-lg-6">
                                    <div class="field-box w-100">
                                        <input class="fname" type="text" value="{{old('name')}}" name="name" placeholder="Your Name"
                                            required>
                                    </div>
                                    @error('name')
                                        <h6 class="text-danger"> {{ $message }}</h6>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-3 col-lg-6">
                                    <div class="field-box w-100">
                                        <input class="email" type="email" value="{{old('email')}}" name="email" placeholder="Your email"
                                            required>
                                    </div>
                                    @error('email')
                                        <h6 class="text-danger"> {{ $message }}</h6>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <textarea class="contact_message"  name="subject" placeholder=" Subject"
                                            required>{{old('subject')}}</textarea>
                                    </div>
                                    @error('subject')
                                        <h6 class="text-danger"> {{ $message }}</h6>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <textarea class="contact_message" name="message" placeholder="Message"
                                            required>{{old('message')}}</textarea>
                                    </div>
                                    @error('message')
                                        <h6 class="text-danger"> {{ $message }}</h6>
                                    @enderror
                                    <div class="field-btn text-center w-100">
                                        <button class="thm-btn d-inline-block rounded-pill" type="submit">Send
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- Contact Form Wrap -->
                </div>
            </div>
        </section>
    </main>
@endsection
