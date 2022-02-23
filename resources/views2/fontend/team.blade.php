@php
    $title = 'Our Team';
@endphp
@extends('layouts.fontend')
@section('main_content')
<main>
    <header class="style3 w-100">
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="assets/images/logo@2x-white2.png" alt="Logo"></a></h1></div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="index.html" title="">SEO Agency</a></li>
                                    <li><a href="index2.html" title="">Marketing Agency</a></li>
                                    <li><a href="index3.html" title="">SEO Consultant</a></li>
                                    <li><a href="index4.html" title="">StartUp Agency</a></li>
                                    <li><a href="index5.html" title="">App Landing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="seo-services.html" title="">SEO Services</a></li>
                                    <li><a href="ppm-services.html" title="">PPM Services</a></li>
                                    <li><a href="digital-marketing.html" title="">Digital Marketing</a></li>
                                    <li><a href="about.html" title="">About Us</a></li>
                                    <li><a href="our-story.html" title="">Our Story</a></li>
                                    <li><a href="team.html" title="">Our Team</a></li>
                                    <li><a href="content-elements.html" title="">Content Elements</a></li>
                                    <li><a href="pricing-table.html" title="">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="portfolio-masonry.html" title="">Masonry</a></li>
                                    <li><a href="portfolio-masonry-filters.html" title="">With Filter</a></li>
                                    <li><a href="portfolio-3column-full-width.html" title="">Full Width</a></li>
                                    <li><a href="portfolio-2column.html" title="">Two Columns</a></li>
                                    <li><a href="portfolio-4column-full-width.html" title="">Four Columns</a></li>
                                    <li><a href="gallery.html" title="">Gallery</a></li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio Singles</a>
                                        <ul class="children mb-0 list-unstyled">
                                            <li><a href="data-analysis.html" title="">Small Images</a></li>
                                            <li><a href="content-audit.html" title="">Big Images</a></li>
                                            <li><a href="new-strategies.html" title="">Slider</a></li>
                                            <li><a href="creative-campaigns.html" title="">Two Cols Gallery</a></li>
                                            <li><a href="market-intelligence.html" title="">Three Cols Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Blog</a>
                                <div class="megamenu center">
                                    <div class="row mrg40">
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <h4>Blog</h4>
                                            <ul class="mb-0 list-unstyled">
                                                <li><a href="blog-checkerboard.html" title="">Checkerboard</a></li>
                                                <li><a href="blog-masonry.html" title="">Masonry</a></li>
                                                <li><a href="blog-2column.html" title="">Two Columns</a></li>
                                                <li><a href="blog-3column.html" title="">Three Columns</a></li>
                                                <li><a href="blog-3column-full-width.html" title="">Three Columns Full Width</a></li>
                                                <li><a href="blog-4column-full-width.html" title="">Four Columns Full Width</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <h4>Standard</h4>
                                            <ul class="mb-0 list-unstyled">
                                                <li><a href="blog-checkerboard.html" title="">List View</a></li>
                                                <li><a href="blog-checkerboard.html" title="">Medium Images</a></li>
                                                <li><a href="blog-checkerboard.html" title="">Without Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html" title="">Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html" title="">Right Sidebar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <h4>Post Types</h4>
                                            <ul class="mb-0 list-unstyled">
                                                <li><a href="blog-detail-gallery.html" title="">Gallery</a></li>
                                                <li><a href="blog-detail-audio.html" title="">Audio</a></li>
                                                <li><a href="blog-detail-link.html" title="">Link</a></li>
                                                <li><a href="blog-detail-quote.html" title="">Quote</a></li>
                                                <li><a href="blog-detail.html" title="">Image</a></li>
                                                <li><a href="blog-detail-video.html" title="">Video</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="shop.html" title="">Shop</a></li>
                                    <li><a href="shop-detail.html" title="">Shop Detail</a></li>
                                    <li><a href="cart.html" title="">Cart</a></li>
                                    <li><a href="checkout.html" title="">Checkout</a></li>
                                    <li><a href="shop-shortcodes.html" title="">Shortcodes</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html" title="">Contacts</a></li>
                            <li><a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a></li>
                        </ul>
                    </nav>
                    <div class="header-btns d-inline-flex flex-wrap align-items-center">
                        <a class="thm-btn v2 brd-btn rounded-pill d-inline-block" href="contact.html" title="">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div><!-- Menubar -->
    </header><!-- Header -->
    <div class="sticky-header style3 w-100">
        <div class="container">
            <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
                <nav>
                    <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="index.html" title="">SEO Agency</a></li>
                                <li><a href="index2.html" title="">Marketing Agency</a></li>
                                <li><a href="index3.html" title="">SEO Consultant</a></li>
                                <li><a href="index4.html" title="">StartUp Agency</a></li>
                                <li><a href="index5.html" title="">App Landing</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="seo-services.html" title="">SEO Services</a></li>
                                <li><a href="ppm-services.html" title="">PPM Services</a></li>
                                <li><a href="digital-marketing.html" title="">Digital Marketing</a></li>
                                <li><a href="about.html" title="">About Us</a></li>
                                <li><a href="our-story.html" title="">Our Story</a></li>
                                <li><a href="team.html" title="">Our Team</a></li>
                                <li><a href="content-elements.html" title="">Content Elements</a></li>
                                <li><a href="pricing-table.html" title="">Pricing Tables</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="portfolio-masonry.html" title="">Masonry</a></li>
                                <li><a href="portfolio-masonry-filters.html" title="">With Filter</a></li>
                                <li><a href="portfolio-3column-full-width.html" title="">Full Width</a></li>
                                <li><a href="portfolio-2column.html" title="">Two Columns</a></li>
                                <li><a href="portfolio-4column-full-width.html" title="">Four Columns</a></li>
                                <li><a href="gallery.html" title="">Gallery</a></li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio Singles</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="data-analysis.html" title="">Small Images</a></li>
                                        <li><a href="content-audit.html" title="">Big Images</a></li>
                                        <li><a href="new-strategies.html" title="">Slider</a></li>
                                        <li><a href="creative-campaigns.html" title="">Two Cols Gallery</a></li>
                                        <li><a href="market-intelligence.html" title="">Three Cols Gallery</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Blog</a>
                            <div class="megamenu center">
                                <div class="row mrg40">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <h4>Blog</h4>
                                        <ul class="mb-0 list-unstyled">
                                            <li><a href="blog-checkerboard.html" title="">Checkerboard</a></li>
                                            <li><a href="blog-masonry.html" title="">Masonry</a></li>
                                            <li><a href="blog-2column.html" title="">Two Columns</a></li>
                                            <li><a href="blog-3column.html" title="">Three Columns</a></li>
                                            <li><a href="blog-3column-full-width.html" title="">Three Columns Full Width</a></li>
                                            <li><a href="blog-4column-full-width.html" title="">Four Columns Full Width</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <h4>Standard</h4>
                                        <ul class="mb-0 list-unstyled">
                                            <li><a href="blog-checkerboard.html" title="">List View</a></li>
                                            <li><a href="blog-checkerboard.html" title="">Medium Images</a></li>
                                            <li><a href="blog-checkerboard.html" title="">Without Sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html" title="">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html" title="">Right Sidebar</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <h4>Post Types</h4>
                                        <ul class="mb-0 list-unstyled">
                                            <li><a href="blog-detail-gallery.html" title="">Gallery</a></li>
                                            <li><a href="blog-detail-audio.html" title="">Audio</a></li>
                                            <li><a href="blog-detail-link.html" title="">Link</a></li>
                                            <li><a href="blog-detail-quote.html" title="">Quote</a></li>
                                            <li><a href="blog-detail.html" title="">Image</a></li>
                                            <li><a href="blog-detail-video.html" title="">Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="shop.html" title="">Shop</a></li>
                                <li><a href="shop-detail.html" title="">Shop Detail</a></li>
                                <li><a href="cart.html" title="">Cart</a></li>
                                <li><a href="checkout.html" title="">Checkout</a></li>
                                <li><a href="shop-shortcodes.html" title="">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" title="">Contacts</a></li>
                    </ul>
                </nav>
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a>
                    <a class="thm-btn v2 brd-btn rounded-pill d-inline-block" href="contact.html" title="">Get a Quote</a>
                </div>
            </div>
        </div>
    </div><!-- Sticky Header -->
    <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
        <span class="search-close-btn"><i class="flaticon-delete"></i></span>
        <form>
            <input type="text" placeholder="Search">
        </form>
    </div><!-- Header Search -->
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container d-flex flex-wrap align-items-center justify-content-between">
                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                    <a class="search-btn d-inline-block" href="javascript:void(0);" title=""><i class="flaticon-magnifying-glass"></i></a>
                    <div class="header-cart-box position-relative d-inline-block">
                        <a class="cart-btn position-relative" href="javascript:void(0);" title="View your shopping cart"><i class="flaticon-shopping-cart-silhouette"></i><span class="position-absolute rounded-circle bg-color14">3</span></a>
                        <div class="minicart-dropdown">
                            <ul class="mb-0 list-unstyled w-100">
                                <li>
                                    <div class="minicart-item d-flex flex-wrap w-100">
                                        <a href="shop-detail.html" title=""><img class="img-fluid" src="assets/images/resources/shop-img1.jpg" alt="Cart Image 1"></a>
                                        <div class="minicart-info">
                                            <h6 class="mb-0"><a href="shop-detail.html" title="">Made Simple Art</a></h6>
                                            <span class="price">$254.00</span>
                                            <a class="remove-cart" href="javascript:void(0);" title=""><i class="flaticon-delete"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="minicart-item d-flex flex-wrap w-100">
                                        <a href="shop-detail.html" title=""><img class="img-fluid" src="assets/images/resources/shop-img2.jpg" alt="Cart Image 2"></a>
                                        <div class="minicart-info">
                                            <h6 class="mb-0"><a href="shop-detail.html" title="">Seo Fitness Workbook</a></h6>
                                            <span class="price">$231.00</span>
                                            <a class="remove-cart" href="javascript:void(0);" title=""><i class="flaticon-delete"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="minicart-item d-flex flex-wrap w-100">
                                        <a href="shop-detail.html" title=""><img class="img-fluid" src="assets/images/resources/shop-img3.jpg" alt="Cart Image 3"></a>
                                        <div class="minicart-info">
                                            <h6 class="mb-0"><a href="shop-detail.html" title="">SEO Help</a></h6>
                                            <span class="price">$240.00</span>
                                            <a class="remove-cart" href="javascript:void(0);" title=""><i class="flaticon-delete"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-block btns-total w-100">
                                <span>Subtotal: <span class="price">$725.00</span></span>
                                <div class="btns-wrap d-flex flex-wrap w-100">
                                    <a class="thm-btn sml-btn d-inline-block rounded-pill" href="cart.html" title="">View Cart</a>
                                    <a class="thm-btn sml-btn brd-btn d-inline-block rounded-pill" href="checkout.html" title="">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                    <ul class="children mb-0 list-unstyled">
                        <li><a href="index.html" title="">SEO Agency</a></li>
                        <li><a href="index2.html" title="">Marketing Agency</a></li>
                        <li><a href="index3.html" title="">SEO Consultant</a></li>
                        <li><a href="index4.html" title="">StartUp Agency</a></li>
                        <li><a href="index5.html" title="">App Landing</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                    <ul class="children mb-0 list-unstyled">
                        <li><a href="seo-services.html" title="">SEO Services</a></li>
                        <li><a href="ppm-services.html" title="">PPM Services</a></li>
                        <li><a href="digital-marketing.html" title="">Digital Marketing</a></li>
                        <li><a href="about.html" title="">About Us</a></li>
                        <li><a href="our-story.html" title="">Our Story</a></li>
                        <li><a href="team.html" title="">Our Team</a></li>
                        <li><a href="content-elements.html" title="">Content Elements</a></li>
                        <li><a href="pricing-table.html" title="">Pricing Tables</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio</a>
                    <ul class="children mb-0 list-unstyled">
                        <li><a href="portfolio-masonry.html" title="">Masonry</a></li>
                        <li><a href="portfolio-masonry-filters.html" title="">With Filter</a></li>
                        <li><a href="portfolio-3column-full-width.html" title="">Full Width</a></li>
                        <li><a href="portfolio-2column.html" title="">Two Columns</a></li>
                        <li><a href="portfolio-4column-full-width.html" title="">Four Columns</a></li>
                        <li><a href="gallery.html" title="">Gallery</a></li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio Singles</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="data-analysis.html" title="">Small Images</a></li>
                                <li><a href="content-audit.html" title="">Big Images</a></li>
                                <li><a href="new-strategies.html" title="">Slider</a></li>
                                <li><a href="creative-campaigns.html" title="">Two Cols Gallery</a></li>
                                <li><a href="market-intelligence.html" title="">Three Cols Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Blog</a>
                    <ul class="children mb-0 list-unstyled">
                        <li><a href="blog-checkerboard.html" title="">Checkerboard</a></li>
                        <li><a href="blog-masonry.html" title="">Masonry</a></li>
                        <li><a href="blog-2column.html" title="">Two Columns</a></li>
                        <li><a href="blog-3column.html" title="">Three Columns</a></li>
                        <li><a href="blog-3column-full-width.html" title="">Three Columns Full Width</a></li>
                        <li><a href="blog-4column-full-width.html" title="">Four Columns Full Width</a></li>
                        <li><a href="blog-checkerboard.html" title="">List View</a></li>
                        <li><a href="blog-checkerboard.html" title="">Medium Images</a></li>
                        <li><a href="blog-checkerboard.html" title="">Without Sidebar</a></li>
                        <li><a href="blog-left-sidebar.html" title="">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html" title="">Right Sidebar</a></li>
                        <li><a href="blog-detail-gallery.html" title="">Gallery</a></li>
                        <li><a href="blog-detail-audio.html" title="">Audio</a></li>
                        <li><a href="blog-detail-link.html" title="">Link</a></li>
                        <li><a href="blog-detail-quote.html" title="">Quote</a></li>
                        <li><a href="blog-detail.html" title="">Image</a></li>
                        <li><a href="blog-detail-video.html" title="">Video</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                    <ul class="children mb-0 list-unstyled">
                        <li><a href="shop.html" title="">Shop</a></li>
                        <li><a href="shop-detail.html" title="">Shop Detail</a></li>
                        <li><a href="cart.html" title="">Cart</a></li>
                        <li><a href="checkout.html" title="">Checkout</a></li>
                        <li><a href="shop-shortcodes.html" title="">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="contact.html" title="">Contacts</a></li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
    <section>
        <div class="w-100">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125"
                 data-source="gallery" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="assets/images/resources/slide-bg3-1.png" alt="Slide Background 1" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide1-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['65','55','45','35']"
                                 data-lineheight="['85','75','65','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#ffffff;">
                                SEO Consulting Based <br> on Real-World Experience
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption"
                                 id="slide1-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #fff;">
                                We calculate all economic indicators and understand <br> feasibility of advertising campaign
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption rev-btn thm-btn v2"
                                 id="slide1-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "about.html"}]'
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,17,14,12]"
                                 data-paddingright="[55,40,35,30]"
                                 data-paddingbottom="[20,17,14,12]"
                                 data-paddingleft="[55,40,35,30]"
                                 style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                How it Works
                            </div>
                        </li>
                        <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="assets/images/resources/slide-bg3-2.png" alt="Slide Background 2" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide2-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['65','55','45','35']"
                                 data-lineheight="['85','75','65','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#ffffff;">
                                Best innovations and <br> technology to startups
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption"
                                 id="slide2-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #fff;">
                                We calculate all economic indicators and understand <br> feasibility of advertising campaign
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption rev-btn thm-btn v2"
                                 id="slide2-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "about.html"}]'
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,17,14,12]"
                                 data-paddingright="[55,40,35,30]"
                                 data-paddingbottom="[20,17,14,12]"
                                 data-paddingleft="[55,40,35,30]"
                                 style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                How it Works
                            </div>
                        </li>
                        <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="assets/images/resources/slide-bg3-3.png" alt="Slide Background 3" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide3-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['65','55','45','35']"
                                 data-lineheight="['85','75','65','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#ffffff;">
                                Performing brilliantly <br> to boost your business
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption"
                                 id="slide3-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #fff;">
                                We calculate all economic indicators and understand <br> feasibility of advertising campaign
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption rev-btn thm-btn v2"
                                 id="slide3-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "contact.html"}]'
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,17,14,12]"
                                 data-paddingright="[55,40,35,30]"
                                 data-paddingbottom="[20,17,14,12]"
                                 data-paddingleft="[55,40,35,30]"
                                 style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                How it Works
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- End Revolution Slider -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-80 position-relative">
            <div class="container">
                <div class="extended-serv-wrap2 res-row position-relative text-center w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="extend-serv-box v2 schm-14 text-center w-100 position-relative">
                                <span class="text-color15"><i class="icon-016-customer-review"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Expert Consultation</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum rat.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="extend-serv-box v2 schm-14 text-center w-100 position-relative">
                                <span class="text-color15"><i class="icon-025-tactics"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Discovery & Strategy</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum rat.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="extend-serv-box v2 schm-14 text-center w-100 position-relative">
                                <span class="text-color15"><i class="icon-009-presentation"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Technical SEO Training</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum rat.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Extended Services Wrap 2 -->
                <div class="view-all d-inline-block mt-60 w-100 text-center position-relative z2">
                    <a class="thm-btn v2 rounded-pill d-inline-block" href="javascript:void(0);" title="">Our Approaches</a>
                </div><!-- View All -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 overlap50 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-7.png);"></div>
            <div class="container">
                <div class="holistic-appr-wrap position-relative w-100">
                    <div class="row align-items-end">
                        <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/holistic-appr-mckp.png" alt="Holistic Approach Mockup" height="548" width="673"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="text-box pe-3 w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>Holistic Approach to SEO</span> Consultancy & Management</h2>
                                    <i class="btm-ln bg-color14"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Nam quis accumsan risus. Aenean id volutpat nibh. Nullam mollis elit pellentesque, gravida turpis id, aliquam magna. Donec dictum tortor eu arcu lacinia rutrum.</p>
                                <a class="thm-btn v2 rounded-pill d-inline-block" href="seo-services.html" title="">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Holistic Approach Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-70 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-4.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-1" class="particles-js top_right w-100" data-color="#3E4A59" data-size="50" data-count="1" data-speed="3" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-5.png" data-image-width="106" data-image-height="106">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="text-box-wrap w-100 text-center position-relative">
                    <div class="text-box text-white d-inline-block">
                        <div class="sec-title text-center w-100 position-relative">
                            <h2 class="mb-0"><span>Why People</span> Choose Us</h2>
                            <i class="btm-ln bg-color14"></i>
                        </div><!-- Sec Title -->
                        <p class="mb-0">We'd love to help you create something amazing. Reach out to <br> us and tell us about your vision.</p>
                    </div>
                </div>
                <div class="facts-wrap2 text-center position-relative w-100">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-016-customer-review"></i></span>
                                <h3 class="mb-0"><span class="counter">986</span></h3>
                                <h5 class="mb-0">Satisfied Customers</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-024-banner"></i></span>
                                <h3 class="mb-0"><span class="counter">2036</span></h3>
                                <h5 class="mb-0">Successful Projects</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-027-bar-chart"></i></span>
                                <h3 class="mb-0"><span class="counter">24</span>%</h3>
                                <h5 class="mb-0">Average Conversion</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-013-trophy"></i></span>
                                <h3 class="mb-0"><span class="counter">100</span>%</h3>
                                <h5 class="mb-0">Guaranteed Results</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- Facts Wrap 2 -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-100 position-relative">
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0">Services <span>We Provide</span></h2>
                    <i class="btm-ln bg-color14"></i>
                </div><!-- Sec Title -->
                <div class="serv-prd-wrap overlap-280 position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-018-online"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Context Ads</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-028-feature"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Website Audits</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-005-analysis"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Keyword Research</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-024-banner"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Content Marketing</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-006-data"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Technical SEO</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-009-presentation"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">SEO Coaching</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-030-site"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Site Mapping</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-021-unlink"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Link Building</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box3 schm-14 w-100">
                                <span class="text-color15"><i class="icon-031-computer"></i></span>
                                <div class="serv-info3 w-100">
                                    <h3 class="mb-0"><a href="ppm-services.html" title="">Website Redesigns</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum.</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="ppm-services.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Provide Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-400 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-8.png);"></div>
            <div class="container">
                <div class="call-action-wrap w-100">
                    <div class="row align-items-end">
                        <div class="col-md-8 col-sm-12 col-lg-9">
                            <div class="text-box text-white w-100">
                                <div class="sec-title no-shap w-100 position-relative">
                                    <h2 class="mb-0"><span>Do you need a</span> consultation<span>?</span></h2>
                                </div><!-- Sec Title -->
                                <p class="mb-0">We can give you lots of advantages, from which you will surely benefit.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-3 text-end">
                            <a class="thm-btn rounded-pill d-inline-block" href="contact.html" title="">Get it Free</a>
                        </div>
                    </div>
                </div><!-- Call Us Action Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-80 pb-110 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#4f66db" data-size="15" data-count="3" data-speed="2" data-hide="767" data-shape="circle" data-mode="bounce">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="best-seo-wrap position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/best-seo-mckp.png" alt="Best SEO Mockup" height="480" width="516"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>The best</span> <br> SEO consultation</h2>
                                    <i class="btm-ln bg-color14"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Nam quis accumsan risus. Aenean id volutpat nibh. Nullam mollis elit pellentesque, gravida turpis id, aliquam magna. Donec dictum tortor eu arcu lacinia rutrum.</p>
                                <a class="thm-btn v2 rounded-pill d-inline-block" href="about.html" title="">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Best SEO Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-135 gry pb-90 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-9.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-3" class="particles-js top_right w-100" data-color="#3E4A59" data-size="50" data-count="1" data-speed="3" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-6.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>What's Our Clients Say</span> <br> About Us</h2>
                    <i class="btm-ln bg-color14"></i>
                </div><!-- Sec Title -->
                <div class="testi-wrap position-relative w-100">
                    <div class="row schm-14 testi-caro2">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="testi-box schm-14 position-relative text-center w-100">
                                <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-1.jpg" alt="Testimonial Image 1"></div>
                                <div class="testi-info w-100">
                                    <h5 class="mb-0">Matthew Doe</h5>
                                    <span class="d-block">Growth specialist, Uder</span>
                                </div>
                                <p class="mb-0">Maecenas vel nibh consequat, feugiat dui at, maximus arcu. Suspendisse ipsum nisi, suscipit vulputate nec.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="testi-box schm-14 position-relative text-center w-100">
                                <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-2.jpg" alt="Testimonial Image 2"></div>
                                <div class="testi-info w-100">
                                    <h5 class="mb-0">Emma Doe</h5>
                                    <span class="d-block">Account manager, Ados</span>
                                </div>
                                <p class="mb-0">Maecenas vel nibh consequat, feugiat dui at, maximus arcu. Suspendisse ipsum nisi, suscipit vulputate nec.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="testi-box schm-14 position-relative text-center w-100">
                                <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-3.jpg" alt="Testimonial Image 3"></div>
                                <div class="testi-info w-100">
                                    <h5 class="mb-0">Jane Doe</h5>
                                    <span class="d-block">Account manager, Ados</span>
                                </div>
                                <p class="mb-0">Maecenas vel nibh consequat, feugiat dui at, maximus arcu. Suspendisse ipsum nisi, suscipit vulputate nec.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="testi-box schm-14 position-relative text-center w-100">
                                <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-4.jpg" alt="Testimonial Image 4"></div>
                                <div class="testi-info w-100">
                                    <h5 class="mb-0">Peter Doe</h5>
                                    <span class="d-block">SEO</span>
                                </div>
                                <p class="mb-0">Maecenas vel nibh consequat, feugiat dui at, maximus arcu. Suspendisse ipsum nisi, suscipit vulputate nec.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="testi-box schm-14 position-relative text-center w-100">
                                <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-5.jpg" alt="Testimonial Image 5"></div>
                                <div class="testi-info w-100">
                                    <h5 class="mb-0">Matthew Doe</h5>
                                    <span class="d-block">Account Manager, Ados</span>
                                </div>
                                <p class="mb-0">Maecenas vel nibh consequat, feugiat dui at, maximus arcu. Suspendisse ipsum nisi, suscipit vulputate nec.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-80 position-relative">
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Latest From</span> Blog</h2>
                    <i class="btm-ln bg-color14"></i>
                </div><!-- Sec Title -->
                <div class="blog-wrap list-view d-inline-block position-relative w-100">
                    <div class="post-box schm-14 brd-rd15 w-100">
                        <div class="post-img overflow-hidden position-relative w-100">
                            <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-6.jpg" alt="Post Image 6" height="329" width="585"></a>
                            <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>30</i>May</span>
                        </div>
                        <div class="post-info w-100">
                            <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Marketing</a></span>
                            <h3 class="mb-0"><a href="blog-detail.html" title="">Elegant style</a></h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nunc iaculis lobortis. Vestibulum pretium...</p>
                            <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color14"></i></a>
                        </div>
                    </div>
                </div><!-- Blog Wrap -->
                <div class="view-all d-inline-block mt-60 w-100 text-center position-relative z2">
                    <a class="thm-btn v2 rounded-pill d-inline-block" href="blog-3column.html" title="">Go To Blog</a>
                </div><!-- View All -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-130 pb-70 position-relative">
            <div class="fixed-bg back-size-cont bg-norepeate" style="background-image: url(assets/images/bg-shp-10.png);"></div>
            <div class="container">
                <div class="sec-title text-white text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Let's Create Something</span> Together</h2>
                    <i class="btm-ln bg-white"></i>
                </div><!-- Sec Title -->
                <div class="cnt-wrap text-center position-relative w-100">
                    <form class="w-100 d-inline-block" action="#" method="post" id="email-form">
                        <div class="form-group w-100">
                            <div class="response w-100"></div>
                        </div>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="field-box w-100">
                                    <input class="fname" type="text" name="fname" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="field-box w-100">
                                    <input class="email" type="email" name="email" placeholder="Your email" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="field-box w-100">
                                    <textarea class="contact_message" name="contact_message" placeholder="Send Message" required></textarea>
                                </div>
                                <div class="field-btn text-center w-100">
                                    <button class="thm-btn d-inline-block rounded-pill" type="submit">Send Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- Contact Form Wrap -->
            </div>
        </div>
    </section>
    <footer>
        <div class="w-100 pt-40 bg-color11 position-relative">
            <div class="container">
                <div class="logo text-center w-100"><h1 class="mb-0"><a href="index.html" title="Logo"><img class="img-fluid" src="assets/images/logo@2x-white.png" alt="Logo White" height="89" width="287"></a></h1></div>
                <div class="footer-data position-relative w-100">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100">
                                <ul class="footer-contact-list list-unstyled mb-0 w-100">
                                    <li><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(305) 222-3333" title="">+(305) 222-3333</a></li>
                                    <li><i class="flaticon-email"></i><a href="mailto:info@example.com" title="">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget text-center w-100">
                                <h4>Get latest SEO tips from us!</h4>
                                <div class="newsletter-wrap w-100">
                                    <form class="newsletter position-relative w-100" id="subscribe-form" method="post" action="#">
                                        <input class="rounded-pill email w-100" type="email" name="email" placeholder="Enter your email" required>
                                        <button class="thm-btn d-inline-block rounded-pill position-absolute" id="subscribe-button"><i class="flaticon-telegram"></i></button>
                                        <div class="response w-100"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget text-end w-100">
                                <h4>Subscribe to our social</h4>
                                <div class="social-links2 d-flex flex-wrap align-items-center justify-content-end w-100">
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
                    </div>
                </div><!-- Footer Data -->
            </div>
        </div>
    </footer><!-- Footer -->
    <div class="bottom-bar bg-color12 w-100">
        <div class="container">
            <div class="bottom-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <p class="mb-0">Copyright &copy; 2021 — All rights reserved</p>
                <p class="mb-0">We're on a mission to build a better future where technology creates good jobs for everyone.</p>
            </div>
        </div>
    </div><!-- Bottom Bar -->
</main>

@endsection
