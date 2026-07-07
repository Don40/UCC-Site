@extends('layouts.app')

@push('styles')
    <style>
        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/color/color-1.css') }}">
@endpush

@section('content')

    <div class="page-content">

        <!-- Content -->
        <div class="page-content bg-gray">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark"
                style="background-image:url('{{ asset('assets/images/banner/banner2.jpg') }}');">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Departments and Faculties</h1>
                    </div>
                </div>
            </div>
            <!-- contact area -->
            <div class="content-block">
                <!-- Portfolio  -->
                <div class="section-area section-sp2 bg-gray">
                    <div class="container">
                        <div class="col-lg-12 col-md-12">
                            <div class="heading-bx left">
                                <h4 class="m-b10 title-head">Arts</span></h4>
                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#english" class="collapsed"
                                            data-parent="#accordion1"><i class="fa fa-angle-double-down"></i>English
                                            Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="english" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="english_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="{{ asset('assets/images/faculties/REBECCA.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Rebecca Lalrintluangi, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, M.Phil, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="{{ asset('assets/images/faculties/Julie.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr.Ms.Julie Sun Wahlang</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, Ph.D., BEd.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="{{ asset('assets/images/faculties/no_img_female.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Amanda Khyriem</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, M.Phil., Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="{{ asset('assets/images/faculties/BARABARIA.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms.Barbaria R Lyngdoh</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="{{ asset('assets/images/faculties/DARLENE.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. Darlene P. Sawian</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Longnam.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms.Longnam W. Kharpuri</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET, M.Phil.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                            <!--English Ends-->
                                        </div>
                                    </div>
                                </div>
                            </div><!--English Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#economics" class="collapsed"
                                            data-parent="#accordion1"><i class="fa fa-angle-double-down"></i>Economics
                                            Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="economics" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="economics_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/jwlyngskor.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. J. W. Lyngskor, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/ibansiewdor.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Ibansiewdor Lyngdoh</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Balonging.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Balonging S. Pde</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_female.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Iadashisha Shanpru</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--economics Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#history"
                                            class="collapsed" data-parent="#history"><i
                                                class="fa fa-angle-double-down"></i>History Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="history" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="history_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_male.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Richard Wahlang, HoD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/ARPHRA.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Arphra B.S Kharkongor</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, SLET, M.Phil</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">



                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Phidariing.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Phida-Ri-Ing Kharsyntiew</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                            <!--History Ends-->
                                        </div>
                                    </div>
                                </div>
                            </div><!--History Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#geography"
                                            class="collapsed" data-parent="#geography"><i
                                                class="fa fa-angle-double-down"></i>Geography Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="geography" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="geography_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/MERCEY_DAIMARI.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. (Mrs.) Mercy Chand Daimari</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Synshar.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. S. Kharshiing</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, M.Phil.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/JONESTAR.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. J. L. Nonglait</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/andy.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Andy Wilson Rympeit</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                            <!--English Ends-->
                                        </div>
                                    </div>
                                </div>
                            </div><!--geography Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#pol_science"
                                            class="collapsed" data-parent="#pol_science"><i
                                                class="fa fa-angle-double-down"></i>Political Science Dept.</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="pol_science" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="politicalscience_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/ARTHUR_LYNGDOH.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Arthur Lyngdoh, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/RANI_KHARPURI.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. Rani B. Kharpuri</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/BL_mawlong.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. BL Mawlong</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Anjelis.jpeg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. Anjelis Rumnong</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--pol_science Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#philosophy"
                                            class="collapsed" data-parent="#philosophy"><i
                                                class="fa fa-angle-double-down"></i>Philosophy Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="philosophy" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="philosophy_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Stanley.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Stanley Sohlang, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MA</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/BATSKHEM_MAWLEIN.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Batskhem Mawlein</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, PhD, NET, B.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Ban_Nadon.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Ban Nadon</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Ibalinda.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Ibalinda Mawniuh</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--philosophy Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#education"
                                            class="collapsed" data-parent="#education"><i
                                                class="fa fa-angle-double-down"></i>Education Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="education" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="education_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">

                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_female.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Batipshisha Nongbri, HOD</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Imorabilia.jpeg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Imorabilia Mawlong</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Joyti_Mary.jpeg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Jyoti Rani</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/CAMELIA_SUTING.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Camelia M. Suting</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--education Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#khasi"
                                            class="collapsed" data-parent="#khasi"><i
                                                class="fa fa-angle-double-down"></i>Khasi Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="khasi" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="khasi_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <!--<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"  style="margin-bottom:20px;">-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:20px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="public/faculties/ALPHA_SAWKMIE.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Mr. A. Hercules Sawkmie,<br> HOD</h6>
                                                                <span>Assistant Professor</span>
                                                                <p>MA</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--</div>Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--khasi Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#social_work"
                                            class="collapsed" data-parent="#social_work"><i
                                                class="fa fa-angle-double-down"></i>Bachelor of Social Work Department (BSW)
                                        </a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="social_work" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="social_work_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <!--<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"  style="margin-bottom:20px;">-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:25px; margin-right:10px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="public/faculties/jarnel.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Mr Jarnel Syiem, HOD</h6>
                                                                <span>Assistant Professor</span>
                                                                <p>MSW, NET</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--padding: 10px 30px 0px 20px;-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:25px; margin-right:10px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="public/faculties/wanpynsuk.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Mr Wanpynsuk Kyndiah</h6>
                                                                <span>Assistant Professor</span>
                                                                <p>MSW</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--</div>--><!--carousel-->
                                                    <!--padding: 10px 30px 0px 20px;-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:25px; margin-right:10px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="public/faculties/MEI.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Ms Leah Meiling Shangpliang</h6>
                                                                <span>Assistant Professor</span>
                                                                <p>MSW,UGC(NET),M.Phil Psychiatric Social Work</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--</div>--><!--carousel-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--social_work Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#assamese"
                                            class="collapsed" data-parent="#assamese"><i
                                                class="fa fa-angle-double-down"></i>Assamese Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="assamese" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="assamese_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <!--<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"  style="margin-bottom:20px;">-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="public/faculties/K_SHARMA.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Mr. Khargesar Sarma, HOD</h6>
                                                                <span>Associate Professor</span>
                                                                <p>MA, NET</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--</div>Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--assamese Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#mizo"
                                            class="collapsed" data-parent="#mizo"><i
                                                class="fa fa-angle-double-down"></i>Mizo Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="mizo" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="mizo_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <!--<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"  style="margin-bottom:20px;">-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="https://www.uccollegemeghalaya.ac.in/public/faculties/"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Mizo</h6>
                                                                <span>Assistant Professor</span>
                                                                <p>MA</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--</div>Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--mizo Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#evs" class="collapsed"
                                            data-parent="#evs"><i class="fa fa-angle-double-down"></i>EVS Department</a>
                                    </h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="evs" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="evs_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <!--<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"  style="margin-bottom:20px;">-->
                                                    <div class="item"
                                                        style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:20px;">
                                                        <div class="row">
                                                            <div class="instructor-author" style="margin-left:12px;">
                                                                <img src="public/faculties/no_img_male.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>Mr Daniel S Manih</h6>
                                                                <span>Assistant Professor</span>
                                                                <p>MSc, NET</p>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-info">
                                                            <ul class="list-inline m-tb10">
                                                                <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!--</div>Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--evs Cordion ends-->
                            <!--Arts Ends-->
                            <div class="heading-bx left">
                                <h4 class="m-b10 title-head">Science</span></h4>
                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#botany"
                                            class="collapsed" data-parent="#botany"><i
                                                class="fa fa-angle-double-down"></i>Botany Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="botany" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="botany_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/VARJINIA.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Mrs. Varjinia Kalita, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, Ph.D.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Ublari.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Mrs. Ublari Shilla</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, Ph.D.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/JPMarak.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Jimcarbrist P. Marak</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/MELBOREEN.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Melboreen Dkhar</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--botany Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#chemistry"
                                            class="collapsed" data-parent="#chemistry"><i
                                                class="fa fa-angle-double-down"></i>Chemistry Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="chemistry" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="chemistry_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/ASHISH.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Ashish Malhotra, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/CORNELIA.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Cornelia M. Lyngdoh</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Hynniewta.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. H. Shangpliang</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Jim_Rani.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Jims World Star Rani</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--chemistry Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#mathematics"
                                            class="collapsed" data-parent="#mathematics"><i
                                                class="fa fa-angle-double-down"></i>Mathematics Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="mathematics" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="mathematics_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/SANJEEV.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Sanjeev Kumar Singh, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, MCA, PGDHE, PhD.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Santosh.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr.Santosh Safi</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, SLET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Stefferson.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr.Stefferson Malngiang</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--mathematics Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#physics"
                                            class="collapsed" data-parent="#physics"><i
                                                class="fa fa-angle-double-down"></i>Physics Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="physics" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="physics_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Merline.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. Marlene Sebastian, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, BEd</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Kerlang.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr.Kerlang Kharchandy</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>MSc, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Phlegon.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr.Phlegon Syndai</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, SLET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_male.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr B. Kharkongor</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, PhD, SLET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--physics Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#zoology"
                                            class="collapsed" data-parent="#zoology"><i
                                                class="fa fa-angle-double-down"></i>Zoology Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="zoology" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="zoology_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Anita.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr. Mrs. Anita G. Paul, HOD</h6>
                                                                    <span>Associate Professor</span>
                                                                    <p>Msc, Ph.D.</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Amesha.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs.Amesha Lyndem</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/RIVIANA.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms. Riviana Thabah</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/turnia.jpeg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Dr.(Ms). I. Turnia</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, Ph.D</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--zoology Cordion ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#home_science"
                                            class="collapsed" data-parent="#home_science"><i
                                                class="fa fa-angle-double-down"></i>Home Science Department</a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="home_science" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="home_science_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_female.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. L. Sica Lyngdoh, HOD</h6>
                                                                    <span>Assistant Professor & HoD</span>
                                                                    <p>MSc</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_female.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms Phiba Umdor</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, Net</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_female.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs Ibarihun Wanniang</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MSc, Net</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--home_science Cordion ends-->

                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="department#commerce"
                                            class="collapsed" data-parent="#commerce">
                                            <div class="heading-bx left">
                                                <h4 class="m-b10 title-head">Commerce Department</span></h4>
                                            </div>
                                        </a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <div id="commerce" class="acod-body collapse">
                                        <div class="acod-content">
                                            <h5>Faculties</h5>
                                            <div class="" id="commerce_faculties" style="margin-bottom:20px;">
                                                <div class="row">
                                                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0"
                                                        style="margin-bottom:20px;">
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/BABIANG.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Babiang K. Lyngdoh, HOD</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MCom, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/no_img_female.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mrs. Ladalin Kharbithai</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>Mcom, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/Emmy.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Ms.Emmy M. Kharumnuid</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>Mcom, NET</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="item"
                                                            style="border: 1px solid rgb(200, 200, 200); border-radius:5px; padding:5px;">
                                                            <div class="row">
                                                                <div class="instructor-author" style="margin-left:12px;">
                                                                    <img src="public/faculties/GABRIEL.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>Mr. Gabriel Mawniuh</h6>
                                                                    <span>Assistant Professor</span>
                                                                    <p>MA</p>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-info">
                                                                <ul class="list-inline m-tb10">
                                                                    <!--<li><i class="fa fa-phone text-green"></i>+91-0000-11111</li>,&nbsp;<li><i class="fa fa-envelope text-orange"></i>xyzemail@gmail.com</li>-->
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div><!--Corousal-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--commerce Cordion ends-->
                        </div>
                    </div>
                </div><!--Container-->
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->

@endsection