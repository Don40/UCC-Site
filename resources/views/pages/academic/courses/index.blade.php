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
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Courses Offered</h1>
                    </div>
                </div>
            </div>
            <!-- contact area -->
            <div class="content-block">
                <!-- Portfolio  -->
                <div class="section-area section-sp2 gallery-bx">
                    <div class="container">
                        <div class="heading-bx left">
                            <h3 class="m-b10 title-head"><span>COURSES AND PROGRAMS OFFERED</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="heading-bx left">
                                    <h5 class="m-b10 title-head"><b><i class="fa fa-graduation-cap"></i>B. Com (Hons.
                                            Course)</b></h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="heading-bx left">
                                    <h5 class="m-b10 title-head"><b><i class="fa fa-graduation-cap"></i>Bachelor of Social
                                            Work (BSW)</b></h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="heading-bx left">
                                    <h5 class="m-b10 title-head"><b><i class="fa fa-graduation-cap"></i>BSc. Home
                                            Science</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="heading-bx left">
                                    <h5 class="m-b10 title-head"><b><i class="fa fa-graduation-cap"></i>Bachelor of Arts
                                            (Hons. Course)</b></h5>
                                </div>
                                <ul class="list-checked orange">
                                    <li>English</li>
                                    <li>Economics</li>
                                    <li>Education</li>
                                    <li>Geography</li>
                                    <li>History</li>
                                    <li>Political Science</li>
                                    <li>Philosophy</li>
                                    <li>Nutrition</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="heading-bx left">
                                    <h5 class="m-b10 title-head"><b><i class="fa fa-graduation-cap"></i>Bachelor of Science
                                            (Hons. Course)</b></h5>
                                </div>
                                <ul class="list-checked orange">
                                    <li>Mathematics</li>
                                    <li>Chemistry</li>
                                    <li>Physics</li>
                                    <li>Botany</li>
                                    <li>Zoology</li>
                                </ul>
                                <p><b>* All Courses are under Semester Pattern.</b></p>
                            </div>
                            <div class="col-md-4">
                                <p style="font-size:16px;">The College also run the following Certificate Course under the
                                    Equity Initiatives Programs, RUSA Scheme, Ministry of Human Resource Development, GOI
                                </p>
                                <ul class="list-checked orange">
                                    <li><a href="add_on_courses#beautiparlour" title="click to view more">Beauty Parlour</a>
                                    </li>
                                    <li><a href="add_on_courses#embroidery" title="click to view more">Fashion Designing</a>
                                    </li>
                                    <li><a href="add_on_courses#mushroom" title="click to view more">Mushroom
                                            Cultivation</a></li>
                                    <li><a href="add_on_courses#bee_keeping" title="click to view more">Apiculture
                                            (Bee-keeping)</a></li>
                                    <li><a href="add_on_courses#soft_skill" title="click to view more">Soft Skills
                                            Development Training</a></li>
                                    <li><a href="add_on_courses#basic_computer" title="click to view more">Computer
                                            Certificate Course</a></li>
                                </ul>
                            </div>
                        </div><!--row ends-->
                    </div>
                </div>
            </div>
            <!-- contact area END -->
        </div>
        <!-- Content END-->
    </div>
@endsection