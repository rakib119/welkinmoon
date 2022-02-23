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
                        <li class="breadcrumb-item"><a href="{{route('our_story')}}">Our Story</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-120 position-relative">
        <div class="container">
            <div class="post-detail-wrap position-relative w-100">
                @if ($story_blog->video_link)
                    <div class="post-detail-img w-100">
                        <iframe width="560" height="550" src="{{$story_blog->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endif
                @if ($story_blog->image)
                    <div class="post-detail-img w-100">
                        <img class="img-fluid w-100" src="{{asset("assets/images/story/blog/details/".$story_blog->image)}} " height="576" width="1024">
                    </div>
                @endif
                <div class="post-detail-desc w-100">
                    <p class="mb-0">{{$story_blog->first_part}}</p>
                    <blockquote>
                        <p class="mb-0">{{$story_blog->second_part}}</p>
                    </blockquote>
                    <p class="mb-0">{{$story_blog->third_part}}</p>
                    <div class="post-detail-gal w-100">
                        <div class="row mrg15">
                            @foreach ( explode(',',$story_blog->photos)  as $key=>$photo)
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="post-detail-gal-item position-relative overflow-hidden w-100">
                                        <a href="{{asset("assets/images/story/blog/details/".$photo)}}" data-fancybox="gal"  ><img class="img-fluid w-100" src="{{asset("assets/images/story/blog/details/".$photo)}}"  ></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <p class="mb-0">{{$story_blog->forth_part}}</p>
                    <p class="mb-0">{{$story_blog->fifth_part}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
