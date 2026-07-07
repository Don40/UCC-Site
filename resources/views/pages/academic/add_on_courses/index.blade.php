@extends('layouts.app')

{{-- @push('styles')
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
<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
<!-- 1. Add latest jQuery and fancybox files -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!--fancybox-->
<style>
    /*for image responsive*/
    .img-responsive>img {
        display: block;
        margin: 5px;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.css">
@endpush --}}

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url('{{ asset('assets/images/banner/banner2.jpg') }}');">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Ongoing Add-on Courses</h1>
                </div>
            </div>
        </div>
        <div class="content-block">
            <!-- Portfolio  -->
            <div class="section-area section-sp1 gallery-bx" id="bee_keeping">
                <div class="container">
                    <div class="heading-bx left">
                        <h3 class="m-b10 title-head"><span>Certificate Course in Apiculture (Bee Keeping)</span></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="list-star red" style="margin-left:20px;">
                                <li>In – Charge : Dr. J. Mathew, Vice Principal, UCC.</li>
                                <li>In collaboration : With Rural Research training Centre (RRTC), Umran.</li>
                                <li>Course Duration: Two Weeks</li>
                                <li>Intake: 40</li>
                            </ul>
                            <h5>Objectives:</h5>
                            <p style="font-size:18px;">The Training is to clearly spell out the relationship between
                                beekeeping and the beekeeper in terms of the role honey bees play and services they
                                provide for the benefit of mankind such as:</p>
                            <ul class="list-hand-point orange" style="margin-left:40px;">
                                <li>Honey production as a way of broadening food production for the rural population
                                </li>
                                <li>Increased food production in agriculture through pollination of crops</li>
                                <li>Provision of source of income through selling beeswax and honey</li>
                                <li>Demand for conservation of remaining woodlands in catchment areas</li>
                                <li>Promotion of rural afforestation programmes to provide honeybees with forage</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/Apiculture_1.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/Apiculture_1_thumb.jpg') }}" class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    padding:10px;
                                                                                                                    text-align:center;">
                            </a>
                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/Apiculture_2.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/Apiculture_2_thumb.jpg') }}" class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    padding:10px;
                                                                                                                    text-align:center;">
                            </a>
                        </div>
                    </div>
                </div><!--container-->
            </div>
            <div class="section-area section-sp1 bg-gray gallery-bx" id="mushroom">
                <div class="container">
                    <div class="heading-bx left">
                        <h3 class="m-b10 title-head"><span>Certificate Course in Mushroom Cultivation-I</span></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-star red" style="margin-left:20px;">
                                <li>In – Charge : Dr. (Mrs) Varginia Kalita, HOD, Dept of Botany </li>
                                <li>In collaboration : RRTC, Umran</li>
                                <li>Course Duration: Two Weeks</li>
                                <li>Intake: 40</li>
                            </ul>
                            <h5>Objectives:</h5>
                            <p style="font-size:18px;">The short term course training programme is in giving
                                augmentation knowledge along with the skill. This programme is an extensive work, which
                                can be useful to the unemployed youth of the area and also to persons interested in
                                learning the skills. The training is mainly targeted to students and persons from the
                                campus and neighboring villages. The training program will highlight the significance of
                                development and mobilization of human resources.</p>
                        </div>
                        <div class="col-md-6">
                            <a data-fancybox="gallery"
                                href="{{ asset('assets/add-on-course/mushroom_cultivation_1.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/mushroom_cultivation_1_thumb.jpg') }}"
                                    class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    padding:10px;
                                                                                                                    text-align:center;">
                            </a>
                            <a data-fancybox="gallery"
                                href="{{ asset('assets/add-on-course/mushroom_cultivation_2.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/mushroom_cultivation_2_thumb.jpg') }}"
                                    class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                    padding:10px;
                                                                                                                    text-align:center;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-area section-sp1 bg-white gallery-bx" id="beautiparlour">
                <div class="container">
                    <div class="heading-bx left">
                        <h3 class="m-b10 title-head"><span>Certificate course in Beauty Parlour</span></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-star red" style="margin-left:20px;">
                                <li>Course Duration: Three Months</li>
                                <li>Intake: 40</li>
                            </ul>
                            <h5>Objectives:</h5>
                            <p style="font-size:18px;">This course is design to equip students with the latest trend in
                                skin and hair styling and grooming techniques. Emphasis will also be made on the
                                importance of health and hygiene of the clients and general stakeholders.</p>
                        </div>
                        <div class="col-md-6"
                            style="-webkit-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); -moz-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); padding-top:10px; padding-bottom:10px; text-align:center">
                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/parlour_1.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/parlour_1_thumb.jpg') }}" class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                            -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                            box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                            padding:10px;
                                                                                                            text-align:center;">
                            </a>


                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/parlour_2.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/parlour_2_thumb.jpg') }}" class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                            -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                            box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                            padding:10px;
                                                                                                            text-align:center;">
                            </a>


                        </div>
                    </div>
                </div>
            </div>
            <div class="section-area section-sp1 bg-gray gallery-bx" id="basic_computer">
                <div class="container">
                    <div class="heading-bx left">
                        <h3 class="m-b10 title-head"><span>Certificate course in Basic Computer Course</span></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <ul class="list-star red" style="margin-left:20px;">
                                <li>In – Charge : Dr. J. Mathew, Vice-Principal and Mrs. Wandashisha Wahlang</li>
                                <li>Course Duration: 3 Months</li>
                                <li>Intake: 50</li>
                            </ul>
                            <h5>Objectives:</h5>
                            <p style="font-size:18px;">The course is designed and aimed at imparting a basic level
                                appreciation programme for the students. After completing the course, the student may be
                                able to use the computer for basic purposes like preparing his personal/business
                                letters, viewing information on internet, sending mails using internet banking services.
                                The training is mainly targeted to students. </p>
                        </div>
                        <div class="col-md-5">


                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/computer_course.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/computer_course_thumb.jpg') }}" class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    padding:10px;
                                                                                                    text-align:center;">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section-area section-sp1 bg-white gallery-bx" id="embroidery">
                <div class="container">
                    <div class="heading-bx left">
                        <h3 class="m-b10 title-head"><span>Certificate Course in Embroidery</span></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="list-star red" style="margin-left:20px;">
                                <li>In – Charge : Ms. Narylyne Bareh , M.A, Fashion Designing</li>
                                <li>Course Duration: 2 Months</li>
                                <li>Intake: 30</li>
                            </ul>
                            <h5>Objectives:</h5>
                            <p style="font-size:18px;">The short term course training programme is in giving
                                augmentation knowledge along with the skill. This programme is an extensive work, which
                                can be useful to the unemployed youth of the area and also to persons interested in
                                learning the skills. The training is mainly targeted to students and persons from the
                                campus and neighboring villages. The training program will highlight the significance of
                                development and mobilization of human resources. Alongside it will help in converting
                                ways to human food.</p>
                        </div>
                        <div class="col-md-4">

                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/fashion_design.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/fashion_design_thumb.jpg') }}" class="img-fluid"
                                    style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    padding:10px;
                                                                                                    text-align:center;">
                            </a>


                        </div>
                    </div>
                </div>
            </div>
            <div class="section-area section-sp1 bg-gray gallery-bx">
                <div class="container">
                    <div class="heading-bx left">
                        <h3 class="m-b10 title-head"><span>Certificate Course in Soft Skill Development</span></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-star red" style="margin-left:20px;">
                                <li>In – Charge : Mr. Banshaikupar Lyngdoh Mawlong, RUSA ADO.</li>
                                <li>Course Duration: To be notified</li>
                                <li>Intake: 1000 no. of students</li>
                            </ul>
                            <h5>Objectives:</h5>
                            <p style="font-size:18px;">The objectives of the Soft Skills Training are to give each
                                student a realistic perspective of work and work expectations, to help formulate problem
                                solving skills, to guide students in making appropriate and responsible decisions, to
                                create a desire to fulfill individual goals, and to educate students about unproductive
                                thinking, self-defeating emotional impulses, and self- defeating behaviors and also to
                                develop reading skills, communication skills, and speaking skills also to help the
                                students understand interpersonal skills, building interpersonal skills, better the
                                ability to work with others.</p>
                        </div>
                        <div class="col-md-6">
                            <a data-fancybox="gallery" href="{{ asset('assets/add-on-course/skill_dev_training.jpg') }}">
                                <img src="{{ asset('assets/add-on-course/skill_dev_training_thumb.jpg') }}"
                                    class="img-fluid" style="-webkit-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    -moz-box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    box-shadow:-1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                    padding:10px;
                                                                                                    text-align:center;">
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content END-->
@endsection