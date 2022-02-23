@extends('layouts.fontend')
@section('main_content')
{{-- <section>
    <div class="w-100 pt-90 pb-100 position-relative">
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="particles-wrap position-absolute w-100">
                    <div id="particle-4" class="particles-js w-100" data-color="#3E4A59" data-size="80" data-count="5" data-speed="2" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-3.png" data-image-width="150" data-image-height="150">
                        <canvas></canvas>
                    </div>
                </div>
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="contact-form-wrap mt-40 w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Send a Message</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div><!-- Sec Title -->
                            <form action="#" method="post" id="email-form" enctype="multipart/form-data">
                                <div class="form-group w-100">
                                    <div class="response w-100"></div>
                                </div>
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="fname" type="text" name="fname" placeholder="Full Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="email" type="email" name="email" placeholder="Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="phone" type="tel" name="phone" placeholder="Subject *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="lname" accept=".jpg,.png,.jpeg" type="file" name="screenshots" multiple>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box w-100">
                                            <textarea class="contact_message" name="contact_message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Wrap -->
            <div class="contact-map w-100 overflow-hidden mt-50 brd-rd20">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1859404323836!2d-122.05297108441484!3d37.40907974088707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb78af144de37%3A0xdd4791b7bab4679f!2sMoffett%20Federal%20Airfield!5e0!3m2!1sen!2s!4v1618730224931!5m2!1sen!2s"></iframe>
            </div>
        </div>
    </div>
</section> --}}
<section>
    <div class="w-100 position-relative">
        <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
            <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{asset('assets')}}/images/ttl-bg-shp.png" style="transform: translate(calc(-50% + 15px), calc(-50% - 15px));" width="1920" height="329">
            <div class="container">
                <div class="pg-title-inner text-center position-relative w-100" style="transform: translateY(75.9259px); opacity: 0.481482;">
                    <h1>Contact Us <i class="btm-ln v2 bg-color9"></i></h1>
                    <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-100 position-relative">
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-5 col-sm-12 col-lg-4">
                        <div class="get-in-touch-wrap bg-color11 brd-rd20 mt-40 position-relative overflow-hidden w-100">
                            <h2 class="mb-0">Get in Touch</h2>
                            <p class="mb-0">SEOES is a USA search engine marketing agency, that deliver digital</p>
                            <div class="contact-info-box mt-40 d-flex flex-wrap w-100">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Visit Us:</h5>
                                    <p class="mb-0">27 Division St, New York, NY 10002, USA</p>
                                </div>
                            </div>
                            <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                <i class="flaticon-message-closed-envelope"></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Mail Us:</h5>
                                    <a href="mailto:info@example.com" title="">info@example.com</a>
                                </div>
                            </div>
                            <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                <i class="icon-037-smartphone"></i>
                                <div class="contact-info-inner">
                                    <h5 class="mb-0">Phone Us:</h5>
                                    <a href="tel:(305) 222-3333" title="">+(305) 222-3333</a>
                                </div>
                            </div>
                            <div class="social-links2 d-flex flex-wrap align-items-center w-100">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank">
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="flaticon-facebook"></i>
                                </a>
                                <a href="https://twitter.com/" title="Twitter" target="_blank">
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="flaticon-twitter"></i>
                                </a>
                                <a href="https://youtube.com/" title="Youtube" target="_blank">
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="flaticon-youtube"></i>
                                </a>
                                <a href="https://linkedin.com/" title="Linkedin" target="_blank">
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="flaticon-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-lg-8">
                        <div class="contact-form-wrap mt-40 w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Send a Message</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div>
                            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group w-100">
                                    <div class="response w-100"></div>
                                </div>
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="name" type="text" value="{{old('name')}}" name="name" placeholder="Full Name*" required autofocus>
                                        </div>
                                        @error('name')
                                            <h6 class="text-danger"> {{ $message }}</h6>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="email" type="email" value="{{old('email')}}" name="email" placeholder="Email *" required>
                                        </div>
                                        @error('email')
                                            <h6 class="text-danger">  {{ $message }}</h6>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="text" type="text" value="{{old('subject')}}" name="subject" placeholder="Subject *" required>
                                        </div>
                                        @error('email')
                                            <h6 class="text-danger">  {{ $message }}</h6>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="photos" type="file" name="screenshots[]" placeholder="screenshot" accept=".jpg,.png" multiple>
                                        </div>
                                        @error('screenshots.1')
                                            <h6 class="text-danger">  {{ $message }}</h6>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box w-100">
                                            <textarea class="contact_message" name="message" placeholder="Message" required> {{old('message')}}</textarea>
                                        </div>

                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Wrap -->
            <div class="contact-map w-100 overflow-hidden mt-50 brd-rd20">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1859404323836!2d-122.05297108441484!3d37.40907974088707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb78af144de37%3A0xdd4791b7bab4679f!2sMoffett%20Federal%20Airfield!5e0!3m2!1sen!2s!4v1618730224931!5m2!1sen!2s"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
