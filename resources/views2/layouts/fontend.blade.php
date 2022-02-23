<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="{{asset('assets')}}/images/favicon.png" sizes="32x32" type="image/png">
    <title>{{isset($title)?$title."-":""}}Welkin Moon </title>

    <link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/revolution/settings.css">
    <!-- Revolution Layers Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/revolution/layers.css">
    <!-- Revolution Navigation Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/revolution/navigation.css">
    @yield('css')
</head>
<body>
<main>
    <header class="style1 w-100">
        <div class="topbar bg-color4 w-100">
            <div class="container">
                <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <ul class="top-info-links d-inline-flex flex-wrap align-items-center list-unstyled mb-0">
                        <li><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(305) 222-3333" title="">+8801764895137</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:info@welkinmoon.com" title="">info@welkinmoon.com</a></li>
                    </ul>
                    <div class="social-cart d-inline-flex flex-wrap align-items-center">
                        <div class="social-links d-inline-flex flex-wrap">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                            <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                            <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Topbar -->
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo"><h1 class="mb-0"><a href="{{route('home')}}" title="Home"><img width="185" src="assets/images/logo.png" alt="Logo"></a></h1></div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li><a href="{{route('home')}}" title="">Home</a></li>
                            <li><a href="{{route('home')}}" title="">About Us</a></li>
                            <li><a href="{{route('team')}}" title="">Our Team</a></li>
                            <li><a href="contact.html" title="">Contacts</a></li>
                            <li><a href="contact.html" title="">Login</a></li>
                            <li><a href="contact.html" title="">Registration</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div><!-- Menubar -->
    </header><!-- Header -->
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container d-flex flex-wrap align-items-center justify-content-between">
                <div class="logo"><h1 class="mb-0"><a href="{{route('home')}}" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo"></a></h1></div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo"><h1 class="mb-0"><a href="{{route('home')}}" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo"></a></h1></div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li><a href="{{route('home')}}" title="">Home</a></li>
                <li><a href="{{route('home')}}" title="">About Us</a></li>
                <li><a href="{{route('team')}}" title="">Our Team</a></li>
                <li><a href="contact.html" title="">Contacts</a></li>
                <li><a href="contact.html" title="">Login</a></li>
                <li><a href="contact.html" title="">Registration</a></li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->

<!-- Main Content Yield here -->
@yield('main_content')

    <footer>
        <div class="w-100 pt-40 bg-color11 position-relative">
            <div class="container">
                <div class="logo text-center w-100"><h1 class="mb-0"><a href="{{route('home')}}" title="Logo"><img class="img-fluid" src="{{asset('assets')}}/images/wm2.png" alt="Logo White" height="89" width="287"></a></h1></div>
                <div class="footer-data position-relative w-100">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget w-100">
                                <h4>Contact Us</h4>
                                <ul class="footer-contact-lisst list-unstyled mb-0 w-100">
                                    <li><i class="fa fa-home"></i> <a href="mailto:info@example.com" title="Address">Dhaka,Bangladesh</a></li>
                                    <li><i class="fa fa-globe"></i><a href="https://www.welkinmoon.com" title="website">https://www.welkinmoon.com </a></li>
                                    <li><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:+8801764895137" title="Mobile Number">+8801764895137</a></li>
                                    <li><i class="flaticon-email"></i><a href="mailto:info@example.com" title="email">info@welkinmoon.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget text-center w-100">
                                <h4>Company Information</h4>
                                <ul class="footer-contact-lisst list-unstyled mb-0 w-100">
                                    <li><a href="{{route('home')}}" title="">Home</a></li>
                                    <li><a href="{{route('home')}}" title="">About Us</a></li>
                                    <li><a href="{{route('team')}}" title="">Our Team</a></li>
                                    <li><a href="contact.html" title="">Contacts</a></li>
                                    <li><a href="contact.html" title="">Login</a></li>
                                    <li><a href="contact.html" title="">Registration</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget text-center w-100">
                                <h4>Subscribe to our social</h4>
                                <div class="social-links2 d-flex flex-wrap align-items-center justify-content-center w-100">
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
                            <div class="widget text-center w-100">
                                <h4>Get The Latest Deals!</h4>
                                <div class="newsletter-wrap w-100">
                                    <form class="newsletter position-relative w-100" id="subscribe-form" method="post" action="#">
                                        <input class="rounded-pill email w-100" type="email" name="email" placeholder="Enter your email" required>
                                        <button class="thm-btn d-inline-block rounded-pill position-absolute" id="subscribe-button"><i class="flaticon-telegram"></i></button>
                                        <div class="response w-100"></div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget text-center w-100">
                                <h4>We Accept</h4>
                                <ul class="footer-contact-lisst list-unstyled mb-0 w-100">
                                    <li> <a href="#"> <img style="width:25px;height:20px;" src="{{asset('assets/images')}}/bkash.svg" alt=""><span style="color: #e2136e"> bKash (BD)</span>   </a></li>
                                    <li><a href="#"> <img style="width:25px;height:20px;" src="{{asset('assets/images')}}/rocket.svg" alt=""> <span style="color: #8c3494"> Rocket  (BD)</span>  </a></li>
                                    <li><a href="#"> <img style="width:25px;height:20px;" src="{{asset('assets/images')}}/nagad.svg" alt=""><span style="color: red"> Nagad (BD)</span>  </a></li>
                                    <li><a href="#"> <img style="width:25px;height:20px;" src="{{asset('assets/images')}}/Islami-Bank.jpg" alt=""><span style="color: #fff"> IBBL  (BD)</span> </a></li>
                                    <li><a href="#" ><img style="width:25px;height:20px;" src="{{asset('assets/images')}}/dbbl.jpg" alt=""> <span style="color: red"> DBBL  (BD)</span>   </a></li>
                                    <li><a href="#" ><img style="width:25px;height:20px;" src="{{asset('assets/images')}}/agrani.png" alt=""> <span style="color: #007e33"> Agrani Bank  (BD)</span>   </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- Footer Data -->
            </div>
        </div>
    </footer><!-- Footer -->
    <div class="bottom-bar bg-color12 w-100">
        <div class="container">
            <div class="bottom-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <p class="mb-0">Copyright &copy; {{date('Y')}} — All rights reserved by <a href="{{route('home')}}">Welkin Moon</a></p>
                <p class="mb-0">We're on a mission to build a better future where technology creates good jobs for everyone.</p>
            </div>
        </div>
    </div><!-- Bottom Bar -->
</main><!-- Main Wrapper -->

<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/aos.min.js"></script>
<script src="{{asset('assets')}}/js/counterup.min.js"></script>
<script src="{{asset('assets')}}/js/particles.min.js"></script>
<script src="{{asset('assets')}}/js/tilt.jquery.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('assets')}}/js/perfect-scrollbar.min.js"></script>
<script src="{{asset('assets')}}/js/slick.min.js"></script>
<script src="{{asset('assets')}}/js/scroll-up-bar.min.js"></script>
<script src="{{asset('assets')}}/js/custom-scripts.js"></script>

<script src="{{asset('assets')}}/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/extensions/revolution.extension.video.min.js"></script>
<script src="{{asset('assets')}}/js/revolution/revolution-init.js"></script>

@yield('javascript')
</body>
</html>
