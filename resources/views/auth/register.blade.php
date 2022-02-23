@extends('layouts.fontend')
@section('main_content')
<section style="margin-top: 100px">
    <div class="w-100 position-relative">
        <div class="fixed-bg back-size-cont bg-norepeate wi"
            style="background-image: url(assets/images/bg-shp-10.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-3" class="particles-js w-100" data-color="#fff" data-size="2" data-linked="1"
                    data-count="70" data-speed="5" data-hide="767" data-shape="circle" data-mode="out">
                    <canvas></canvas>
                </div>
            </div>
        <div class="container">
            <div class="sec-title text-white text-center pt-5 w-100 position-relative">
                <h2 class="mb-0 mt-5"> {{ __('Create your Account') }}</h2>
                <i class="btm-ln bg-white"></i>
            </div><!-- Sec Title -->
            <div class="cnt-wrap text-center position-relative w-100">

                <form class="w-100 d-inline-block" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group w-100">
                        <div class="response w-100"></div>
                    </div>
                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="firstname  @error('username') is-invalid @enderror" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" autofocus
                                    required>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="lastname  @error('username') is-invalid @enderror" type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name"
                                    required>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="username @error('username') is-invalid @enderror" type="text" name="username" placeholder="User Name"
                                 value="{{ old('username') }}" required >
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="phone @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="Phone Number"
                                name="phone" value="{{ old('phone') }}" required >
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="field-box w-100">
                                <input class="email @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email Address"
                                name="email" value="{{ old('email') }}" required >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <select class="field-box w-100  @error('gender') is-invalid @enderror" name="gender" id="" required>
                                    <option  value="">Gender</option>
                                    <option {{old('gender')=='male'?"selected":""}} value="male">Male</option>
                                    <option {{old('gender')=='female'?"selected":""}} value="female">Female</option>
                                    <option {{old('gender')=='other'?"selected":""}} value="other">Other</option>
                                </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="field-box w-100 @error('birthday') is-invalid @enderror" name="birthday" type="date" placeholder="Date Of Birth" required>
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                         <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="password  @error('password') is-invalid @enderror"
                                name="password" type="password" placeholder="New Password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="confirm pasword" type="password" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Confirm Password" >
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 mb-5">
                            <div class="field-btn text-center w-100">
                                <button class="thm-btn d-inline-block rounded-pill" type="submit">submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- Contact Form Wrap -->
        </div>
    </div>
</section>
@endsection
