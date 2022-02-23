@php
$title = 'Home';
@endphp
@extends('layouts.fontend')
@section('main_content')
    <section>
        <div class="w-100">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125"
                data-source="gallery" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        @php
                            $i =0;
                        @endphp
                        @foreach ( $sliders as $slider)
                            @include('partOfSite.slider'.++$i)
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-30 position-relative">
            <div class="container">
                <div class="about-wrap w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <span class="d-block text-color3 text-uppercase">{{$home_second_left->short_title}}</span>
                                    <h2 class="mb-0">{{$home_second_left->title_first}} <span>{{$home_second_left->title_second}}</span></h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div>
                                <p class="mb-0">{{$home_second_left->short_description}}</p>
                                <a class="simple-link d-inline-block text-uppercase" href="{{route('about')}}">{{$home_second_left->button_name}}<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="wheel-icon-wrap position-relative w-100" data-speed="3000">
                                <div class="wheel-icon-inner position-absolute">
                                    @foreach ($home_second_right as $data)
                                        <div class="wheel-icon {{$loop->first ?'active':'' }} " data-trigger="{{$loop->index+1}}">
                                            <div class="wheel-icon-svg">
                                                <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                                <i class="{{$data->icon}}"></i>
                                            </div>
                                        </div>
                                        <section class="wheel-icon-cap-wrap {{$loop->first ?'active':'' }} d-flex flex-wrap justify-content-center align-items-center" data-id="{{$loop->index+1}}">
                                            <div class="wheel-icon-cap-inner">
                                                <span class="d-block text-color3 text-uppercase">{{$data->short_title}}</span>
                                                <h4 class="mb-0">{{$data->title}}</h4>
                                                <p class="mb-0">{{$data->short_description}}</p>
                                            </div>
                                        </section>
                                    @endforeach
                                </div>
                                <div class="circle_wrapper rounded-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Faq Section --}}
    <section>
        <div class="w-100 pt-50 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-1.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-1" class="particles-js top_right w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="{{ asset('assets') }}/images/particle-1.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="420" height="904"></canvas></div>
            </div>
            <div class="container">
                <div class="crtv-chlng-psn-wrap position-relative w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6 ">
                            <div class="sec-title w-100 position-relative faq-mobile">
                                <h2 class="mb-0">Frequently Asked  <br> Questions</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div>
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="{{ asset('assets') }}/images/resources/market-fact-mckp.png" alt="" height="473" width="523"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative faq-desktop">
                                    <h2 class="mb-0">Frequently Asked  <br> Questions</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div>
                                <div class="toggle schm-14 w-100" id="toggle">
                                    @foreach ($faqs as $faq )
                                        <div class="toggle-item position-relative w-100">
                                            <h4 class="mb-0 position-relative"><i></i>{{$faq->question}}</h4>
                                            <div class="toggle-content w-100">
                                                <p class="mb-0">{{$faq->answear}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-2.png);"></div>
            <div class="container">
                <div class="structure-wrap w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6"
                            style=" display: flex;justify-content: center;flex-wrap: wrap;">
                            <div class="sec-title w-100 position-relative text-center ccd-mobile">
                                <h2 class="mb-0"><span>CCD</span> Message</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div>
                            <div class="ccd-img-div mckp-img text-center tilt shadow-sm p-3 mb-5 bg-body rounded"
                                data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img
                                    class="img-fluid ccd-image" src="{{ asset('assets/images/teams') }}/{{ $ceo->img }}"
                                    alt="Structure Mockup">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative ccd-desktop">
                                    <h2 class="mb-0"><span>CCD</span> Message</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div>
                                <div class="ccd-desktop">
                                    <h5 class="mb-0">{{ $ceo->name }}</h5>
                                    <p class="mb-0">{!! $ceo->description !!}</p>
                                    <div class="social-links2 d-flex flex-wrap align-items-left justify-content-left w-100">
                                        <a href="{{ $ceo->facebook }}" title="Facebook" target="_blank">
                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <i class="flaticon-facebook"></i>
                                        </a>
                                        <a href="{{ $ceo->twitter }}" title="Twitter" target="_blank">
                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <i class="flaticon-twitter"></i>
                                        </a>
                                        <a href="{{ $ceo->linkedin }}" title="Linkedin" target="_blank">
                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <i class="flaticon-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ccd-mobile">
                                    <div class="social-links  my-3">
                                        <button class="thm-btn rounded-pill d-inline-block" data-bs-toggle="modal" data-bs-target="#ccd-message"> <h6>Quote</h6> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-50 pb-20 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-1.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#3E4A59" data-size="70" data-count="2" data-speed="2" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-2.png" data-image-width="133" data-image-height="133">
                    <canvas></canvas>
                </div>
            </div>
            <div class="container">
                <div class="market-wrap position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/marketing-strg-mckp.png" alt="Marketing Strategy Mockup" height="434" width="574"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box text-white w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0">{{$after_ccd->title_first}} <span>{{$after_ccd->title_second}}</span></h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div>
                                <p class="mb-0">{{$after_ccd->short_description}}</p>
                                <a class="thm-btn rounded-pill d-inline-block" href="{{route('about')}}">{{$after_ccd->button_name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-2.png);"></div>
            <div class="container">
                <div class="structure-wrap w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/structure-mckp.png" alt="Structure Mockup" height="532" width="507"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>{{$next_after_ccd->title_first}}</span> {{$next_after_ccd->title_second}}</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div>
                                <h5 class="mb-0">{{$next_after_ccd->short_title}}</h5>
                                <p class="mb-0">{{$next_after_ccd->short_description}}</p>
                                <ul class="list-unstyled mb-0 w-100">
                                    <li>{{$next_after_ccd->first_item}}</li>
                                    <li>{{$next_after_ccd->second_item}}</li>
                                    <li>{{$next_after_ccd->third_item}}</li>
                                </ul>
                                <a class="thm-btn rounded-pill d-inline-block" href="{{route('contact_us')}}" title="">{{$next_after_ccd->button_name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extended-serv-wrap mt-60 text-center w-100">
                    <div class="row mrg30 align-items-center">
                        @foreach ($projects as $project)
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="extend-serv-box text-center w-100 position-relative">
                                    <span>
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                    <div class="extend-serv-box-inner">
                                        <i class="{{$project->icon}} text-color8"></i>
                                        <h4 class="mb-0 text-uppercase">{{$project->project_name}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
  @if ($teams->where('show_in', 'home_slider_1')->count()>0)
    <section>
        <div class="w-100 pt-80 pb-110 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#4f66db" data-size="15"
                    data-count="3" data-speed="2" data-hide="767" data-shape="circle" data-mode="bounce">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><br> Our Team</h2>
                    <i class="btm-ln bg-color14"></i>
                </div>
                <div class="testi-wrap position-relative w-100">
                    <div class="row justify-content-center align-items-center">
                        <div class="testi-inner schm-17 w-100">
                            <div class="row testi-caro3">
                                @forelse ( $teams->where('show_in', 'home_slider_1') as $team)
                                    <div class="blog-wrap list-view d-inline-block position-relative w-100">
                                        <div class="post-box schm-14 brd-rd15 w-100">
                                            <div class="post-img  position-relative"
                                                style=" display: flex;justify-content: center;flex-wrap: wrap;">
                                                <a href="javascript:void(0)" class="team-img-a"><img
                                                        class=" w-100"
                                                        src="{{ asset('assets/images/teams') }}/{{ $team->img }}"
                                                        alt="Image not found" ></a>
                                            </div>
                                            <div class=" w-100">
                                                <h3 class="mt-3" style="color: var(--color17)">
                                                    {{ $team->name }}</h3>
                                                <span class="post-cate d-block text-uppercase"><a
                                                        href="javascript:void(0);">{{ $team->post }}</a></span>

                                                <p class="mt-2 mb-0 px-2">{!! $team->description !!}</p>
                                                <div
                                                    class="social-links2 team-social d-flex flex-wrap align-items-left justify-content-left w-100">
                                                    <a href="{{ $team->facebook }}" title="Facebook" target="_blank">
                                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <i class="flaticon-facebook"></i>
                                                    </a>
                                                    <a href="{{ $team->twitter }}" title="Twitter" target="_blank">
                                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <i class="flaticon-twitter"></i>
                                                    </a>
                                                    <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank">
                                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <i class="flaticon-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endif
  @if ($teams->where('show_in', 'home_slider_2')->count()>0)
    <section>
        <div class="w-100 pt-135 gry pb-90 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-9.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-3" class="particles-js top_right w-100" data-color="#3E4A59" data-size="50" data-count="1" data-speed="3" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-6.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div>
            <div class="container">
                <div class="testi-wrap position-relative w-100">
                    <div class="row schm-14 testi-caro2">
                        @foreach ($teams->where('show_in', 'home_slider_2') as $team)
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="testi-box schm-14 position-relative text-center w-100">
                                    <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img
                                            class="img-fluid d-inline-block rounded-circle"
                                            style="height: 120px;width:150px"
                                            src="{{ asset('assets/images/teams') . '/' . $team->img }}"
                                            alt="not found">
                                    </div>
                                    <div class="testi-info w-100">
                                        <h5 class="mb-0">{{ $team->name }}</h5>
                                        <span class="d-block">{{ $team->post }}</span>
                                    </div>
                                    <div class="social-links  my-3">
                                        <button class="thm-btn rounded-pill d-inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal{{$team->id}}"> <h6>Quote</h6> </button>
                                    </div>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="{{ $team->facebook }}" title="Facebook" target="_blank"><i
                                                class="flaticon-facebook"></i></a>
                                        <a href="{{ $team->twitter }}" title="Twitter" target="_blank"><i
                                                class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank"><i
                                                class="flaticon-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endif
    <section>
        <div class="w-100 pt-120 grad-bg1 pb-120 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-4" class="particles-js w-100" data-color="#3E4A59" data-size="80" data-count="5" data-speed="2" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-3.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="req-mckp-wrap text-center position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="mckp-img d-none d-lg-block tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/subm-request-mckp.png" alt="Submit Request Mockup" height="510" width="445"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="req-frm-wrap d-flex flex-wrap justify-content-center align-items-center text-center position-relative w-100" style="background-image: url(assets/images/req-frm-mckp.png);">
                                <div class="req-frm-inner">
                                    <div class="sec-title text-center w-100 position-relative">
                                        <h2 class="mb-0"><span>Submit a</span> Request</h2>
                                        <i class="btm-ln bg-color3"></i>
                                    </div><!-- Sec Title -->
                                    <p class="mb-0">We will call you in 20 mins. We answer all questions and tell about our services.</p>
                                    <form class="w-100" action="{{ route('contact.store')}}" method="post" >
                                        @csrf
                                        <div class="form-group w-100">
                                            <div class="response w-100"></div>
                                        </div>
                                        <div class="field-box w-100">
                                            <input type="hidden" name="subject" value="Please call me">
                                            <input class="fname" type="text" name="name" placeholder="What is your name" required>
                                        </div>
                                        <div class="field-box w-100">
                                            <input class="phone" type="tel" name="mobile" placeholder="Mobile number" required>
                                        </div>
                                        <div class="field-box w-100">
                                            <input class="ctime" type="text" name="message" placeholder="Best time to call" required>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Call Me</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Request & Mockup Wrap -->
            </div>
        </div>
    </section>
    @foreach ($teams->where('show_in', 'home_slider_2') as $team)
        <div class="modal fade" id="exampleModal{{$team->id}}" tabindex="-1" aria-labelledby="exampleModal{{$team->id}}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$team->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!!$team->description!!}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="ccd-message" tabindex="-1" aria-labelledby="exampleModal{{$team->id}}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $ceo->name }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! $ceo->description!!}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
@endsection
