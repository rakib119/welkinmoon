@extends('layouts.fontend')
@section('css')
    <style>
        .register {
            width: 360px;
            height: 550px;
            background: transparent;
            margin: 8% auto;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }
        .register .form-step {
            width: 280px;
            position: absolute;
            top: 100px;
            left: 40px;
            transition: 0.5s;
        }

        .register .form-step input,
        select {
           color: #777;
        }

        ::placeholder {
            color: #777;
        }

        .btn-box {
            width: 100%;
            margin: 30px auto;
            text-align: center;
        }

        .register .form-step button {

            width: 110px;
            height: 35px;
            margin: 0 10px;
            background: #ffaf00;
            border-radius: 30px;
            outline: none;
            color: #fff;
            cursor: pointer;
        }

        #form2 {
            left: 450px;
        }

        #form3 {
            left: 450px;
        }

        .step-row {
            width: 360px;
            height: 40px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            box-shadow: 0 -1px 5px -1px #fff;
            position: relative;
        }

        .step-col {
            width: 120px;
            text-align: center;
            color: #fff;
            position: relative;
        }

        #progress {
            position: absolute;
            height: 100%;
            width: 120px;
            transition: 1s;
            background:#ffaf00;
        }

        #progress::after {
            content: '';
            height: 0;
            width: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            position: absolute;
            right: -20px;
            top: 0;
            border-left: 20px solid #ffaf00;
        }

    </style>
@endsection

@section('javascript')
    <script>
        var Form1 = document.getElementById('form1');
        var Form2 = document.getElementById('form2');
        var Form3 = document.getElementById('form3');
        var Next1 = document.getElementById('Next1');
        var Next2 = document.getElementById('Next2');
        var Back1 = document.getElementById('Back1');
        var Back2 = document.getElementById('Back2');
        var progress = document.getElementById('progress');
        Next1.onclick = function() {
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.width = "240px";
        }
        Back1.onclick = function() {
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.width = "120px";
        }
        Next2.onclick = function() {
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.width = "360px";
        }
        Back2.onclick = function() {
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.width = "240px";
        }
    </script>
@endsection

@section('main_content')
<section>
            <div class="w-100 pt-5 mt-5 position-relative" style="margin-bottom: -81px;">
                <div class="fixed-bg back-size-cont bg-norepeate"
                    style="background-image: url(assets/images/bg-shp-10.png);"></div>
                <div class="container">
                    <!-- Sec Title -->
                    <div class="cnt-wrap text-center position-relative w-100">
                        <div class="particles-wrap position-absolute w-100">
                            <div id="particle-3" class="particles-js w-100" data-color="#fff" data-size="2" data-linked="1"
                                data-count="70" data-speed="5" data-hide="767" data-shape="circle" data-mode="out">
                                <canvas></canvas>
                            </div>
                        </div>
                        <div class="register">
                            <form action="" method="post">
                            <div class="form-step " id="form1" action="">
                                <h3 class="text-white">BASIC INFO</h3>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="text" placeholder="First Name" autofocus required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="text" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="text" placeholder="User Name" required>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <button type="button" id="Next1">Next </button>
                                </div>
                            </div>
                            <div class="form-step" id="form2" action="">
                                <h3 class="text-white">CONTACT INFO</h3>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100 d-flex">
                                        <input class="field-box w-100" type="email" placeholder="Email address" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box" type="text" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="password" placeholder=" Password" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="password" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <button type="button" id="Back1">Back </button>
                                    <button type="button" id="Next2">Next </button>
                                </div>
                            </div>
                            <div class="form-step"  id="form3" action="">
                                <h3 class="text-white">OTHER INFO</h3>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="text" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <select class="field-box w-100" name="" id="">
                                            <option  value="">Gender</option>
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                            <option value="">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <input class="field-box w-100" type="date" placeholder="Date Of Birth" required>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <button type="button" id="Back2">Back </button>
                                    <button type="submit">Submit </button>
                                </div>
                            </div>
                        </form>
                            <div class="step-row">
                                <div id="progress">

                                </div>
                                <small class="step-col">Step 1</small>
                                <small class="step-col">Step 2</small>
                                <small class="step-col">Step 3</small>
                            </div>
                        </div>
                    </div><!-- Contact Form Wrap -->
                </div>
            </div>
        </section>
@endsection
