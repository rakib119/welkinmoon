@php
$title = 'Our Team';
@endphp
@extends('layouts.fontend')
@section('main_content')
    <main>
        <section>
            <div class="w-100 position-relative">
                <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                    <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{asset('assets')}}/images/ttl-bg-shp.png" style="transform: translate(calc(-50% + 15px), calc(-50% - 15px));" width="1920" height="329">
                    <div class="container">
                        <div class="pg-title-inner text-center position-relative w-100" style="transform: translateY(75.9259px); opacity: 0.481482;">
                            <h1>Our Team <i class="btm-ln v2 bg-color9"></i></h1>
                            <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Our Team </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($teams->where('show_in', 'our_team_slider_1')->count()>0)
            <section>
                <div class="w-100 pt-80 pb-110 position-relative">
                    <div class="particles-wrap position-absolute w-100">
                        <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#4f66db" data-size="15"
                            data-count="3" data-speed="2" data-hide="767" data-shape="circle" data-mode="bounce">
                            <canvas></canvas>
                        </div>
                    </div>
                    <div class="container">
                        <div class="testi-wrap position-relative w-100">
                            <div class="row justify-content-center align-items-center">
                                <div class="testi-inner schm-17 w-100">
                                    <div class="row testi-caro3">
                                        @forelse ( $teams->where('show_in', 'our_team_slider_1') as $team)
                                            <div class="blog-wrap list-view d-inline-block position-relative w-100">
                                                <div class="post-box schm-14 brd-rd15 w-100">
                                                    <div class="post-img  position-relative"
                                                        style=" display: flex;justify-content: center;flex-wrap: wrap;">
                                                        <a href="javascript:void(0)"
                                                            style="height: 550px; width: auto; overflow: hidden;"><img
                                                                class=" w-100"
                                                                src="{{ asset('assets/images/teams') }}/{{ $team->img }}"
                                                                alt="Image not found"
                                                                style="width: 100%; object-fit: cover;"></a>
                                                    </div>
                                                    <div class=" w-100">
                                                        <h3 class="mt-3" style="color: var(--color17)">
                                                            {{ $team->name }}</h3>
                                                        <span class="post-cate d-block text-uppercase"><a
                                                                href="javascript:void(0);">{{ $team->post }}</a></span>

                                                        <p class="mt-2 mb-0 px-2">{!! $team->description !!}</p>
                                                        <div
                                                            class="social-links2 d-flex flex-wrap align-items-left justify-content-left w-100">
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

        @if ($teams->where('show_in', 'our_team_slider_2')->count()>0)
            <section>
                <div class="w-100 pt-135 gry pb-90 position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-9.png);"></div>
                    <div class="particles-wrap position-absolute w-100">
                        <div id="particle-3" class="particles-js top_right w-100" data-color="#3E4A59" data-size="50"
                            data-count="1" data-speed="3" data-hide="767" data-shape="image" data-mode="bounce"
                            data-image-url="assets/images/particle-6.png" data-image-width="150" data-image-height="150">
                            <canvas></canvas>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sec-title text-center w-100 position-relative">
                            <h2 class="mb-0">Our Team</h2>
                            <i class="btm-ln bg-color3"></i>
                        </div>
                        <div class="testi-wrap position-relative w-100">
                            <div class="row schm-14 ">
                                @foreach ($teams->where('show_in', 'our_team_slider_2') as $team)
                                <div class="col-md-4 col-sm-4 col-lg-4">
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
                                            <button class="thm-btn rounded-pill d-inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal{{$team->id}}">Quote</button>
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

    </main>
    @foreach ($teams->where('show_in', 'our_team_slider_2') as $team)
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
@endsection
