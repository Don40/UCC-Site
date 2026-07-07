@extends('layouts.app')

@section('title', 'student-services')

{{-- @push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/color/color-1.css') }}">

<style>
    .gallery-box {
        box-shadow: -1px -1px 15px -1px rgba(117, 109, 117, .76);
        padding: 10px;
        text-align: center;
    }

    .gallery-box img {
        margin: 2px;
    }
</style>
@endpush --}}

@section('content')

    <div class="page-content bg-white">
        <!-- Page Content -->
        <div class="content-block">
            <!-- Content -->

            <!-- inner page banner -->
            <div class="page-banner ovbl-dark"
                style="background-image:url('{{ asset('assets/images/banner/banner2.jpg') }}');">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Student's Services</h1>
                    </div>
                </div>
            </div>
            <div class="content-block">
                <!-- Portfolio  -->
                <div class="section-area section-sp1 gallery-bx" id="src">
                    <div class="container">
                        <div class="heading-bx left">
                            <h3 class="m-b10 title-head"><span>STUDENT’S REPRESENTATIVE COUNCIL (SRC)</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size:18px;">Adviser: Mr. R. S. Wahlang.</p>
                                <p style="font-size:18px;">The Council is the official students' body of the college,
                                    comprising of elected class representatives from the different classes in order to
                                    conduct extra-curricular activities in the College.</p>
                            </div>
                            <div class="col-md-6 gallery-popup" style="-webkit-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                               -moz-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                               box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                               padding-top:10px;
                                               padding-bottom:10px;
                                               text-align:center;">

                                <a href="{{ asset('std_service/s_rc/IMG-20210208-WA0008.jpg') }}">
                                    <img src="{{ asset('std_service/s_rc/IMG-20210208-WA0008_thumb.jpg') }}"
                                        class="img-fluid">
                                </a>

                                <a href="{{ asset('std_service/s_rc/IMG-20210208-WA0012.jpg') }}">
                                    <img src="{{ asset('std_service/s_rc/IMG-20210208-WA0012_thumb.jpg') }}"
                                        class="img-fluid">
                                </a>

                                <a href="{{ asset('std_service/s_rc/IMG-20210208-WA0020.jpg') }}">
                                    <img src="{{ asset('std_service/s_rc/IMG-20210208-WA0020_thumb.jpg') }}"
                                        class="img-fluid">
                                </a>

                                <a href="{{ asset('std_service/s_rc/IMG-20210208-WA0007.jpg') }}">
                                    <img src="{{ asset('std_service/s_rc/IMG-20210208-WA0007_thumb.jpg') }}"
                                        class="img-fluid">
                                </a>

                            </div>
                        </div>
                    </div><!--container-->
                </div>
                <div class="section-area section-sp1 bg-gray gallery-bx" id="nss">
                    <div class="container">
                        <div class="heading-bx left">
                            <h3 class="m-b10 title-head"><span>NATIONAL SERVICE SCHEME (NSS)</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size:18px;">Program Officer: Ms .B.S .Pde and Mr. A.B. S. Kharkongor.</p>
                                <p style="font-size:18px;">The NSS volunteers of UCC Unit participate in various
                                    activities viz. Blood donation programmes, Campus cleaning and white washing,
                                    Advocacy workshop on HIV/AIDS, Tree plantation programme etc. The College extends
                                    support to the NSS in all their activities and upholds the motto of the NSS “Not Me
                                    but You”.</p>
                            </div>
                            <div class="col-md-6 gallery-popup"
                                style="-webkit-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); -moz-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); padding-top:10px; padding-bottom:10px; text-align:center">
                                <a href="{{ asset('std_service/nss/NSS.png') }}">
                                    <img src="{{ asset('std_service/nss/NSS.png') }}" class="img-fluid" style="margin:2px;">
                                </a>
                                <!--<a data-fancybox="gallery" href="std_service/nss/IMG_2.jpg"><img src="std_service/nss/IMG_2_thumb.jpg" style="margin:2px;" class="img-responsive"></a>
                                                                                                                                                                                                                                                                            <a data-fancybox="gallery" href="std_service/nss/IMG-3.jpg"><img src="std_service/nss/IMG-3_thumb.jpg" style="margin:2px;" class="img-responsive"></a>
                                                                                                                                                                                                                                                                            <a data-fancybox="gallery" href="std_service/nss/IMG-4.jpg"><img src="std_service/nss/IMG-4_thumb.jpg" style="margin:2px;" class="img-responsive"></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-area section-sp1 bg-white gallery-bx" id="ncc">
                    <div class="container">
                        <div class="heading-bx left">
                            <h3 class="m-b10 title-head"><span>NATIONAL CADET CORPS (NCC)</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size:18px;">i/c 2 Megh Boy’s Battalion: <b>Mr. Steferson Malngiang,
                                        CTO</b><br>
                                    <span>61&nbsp;&nbsp;MeghGirl’s Battalion: <b>Mrs. P. Kharsyntiew, ANO</b></span>
                                </p>
                                <p style="font-size:18px;">The NCC is one of the youth organizations which functions to
                                    develop character, secular outlook, comradeship, discipline, leadership and ideas of
                                    selfless service amongst the youth. The College has an NCC Army wings for both boys
                                    and girls under Meghalaya Battalion which extends support to the NCC in all their
                                    activities.</p>
                            </div>
                            <div class="col-md-6 gallery-popup"
                                style="-webkit-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); -moz-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); padding-top:10px; padding-bottom:10px; text-align:center">
                                <a href="{{ asset('std_service/ncc/NCC.png') }}">
                                    <img src="{{ asset('std_service/ncc/NCC-thumb.png') }}" class="img-fluid"
                                        style="margin:2px;">
                                </a>
                                <!--<a data-fancybox="gallery" href="std_service/ncc/DSC_0894.jpg"><img src="std_service/ncc/DSC_0894_thumb.jpg" style="margin:2px;" class="img-responsive"></a>
                                                                                                                                                                                                                                                                            <a data-fancybox="gallery" href="std_service/ncc/NCC.jpg"><img src="std_service/ncc/NCC_thumb.jpg" style="margin:2px;" class="img-responsive"></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="section-area section-sp1 bg-gray gallery-bx" id="scm">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>STUDENT CHRISTIAN MOVEMENT OF INDIA (SCMI)</span>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="font-size:18px;">The Student Christian Movement of India (SCMI) Unit is a
                                        students’ movement with Christian ethos which maintains a fellowship of
                                        students, teachers and senior friends with commitment to translate Christian
                                        Faith into action and has been in the mission of shaping young leaders with
                                        integrity and commitment. The SCM Unit of the College conducts morning services
                                        during weekdays as well as Sunday evening. It also conducts quarter visit and
                                        organise regular camps and food fest.</p>
                                </div>
                                <div class="col-md-6 gallery-popup"
                                    style="-webkit-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                                                                                                                                                -moz-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                                                                                                                                                box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); padding-top:10px; padding-bottom:10px; text-align:center">
                                    <a href="{{ asset('std_service/scmi/DSC_0815.jpg') }}">
                                        <img src="{{ asset('std_service/scmi/DSC_0815_thumb.jpg') }}" class="img-fluid">
                                    </a>

                                    <a href="{{ asset('std_service/scmi/scmi.jpg') }}">
                                        <img src="{{ asset('std_service/scmi/scmi_thumb.jpg') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-area section-sp1 bg-white gallery-bx" id="transport">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>TRANSPORT </span></h3>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p style="font-size:18px;">The College also provides daily transportation service
                                        for college staffs and students coming from Shillong. Bus services are also
                                        available for students outing to Shillong twice a month on every alternate
                                        Saturdays.</p>
                                </div>
                                <div class="col-md-4 gallery-popup"
                                    style="-webkit-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                                                                                                                                                -moz-box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76);
                                                                                                                                                                                                                                                box-shadow: -1px -1px 15px -1px rgba(117,109,117,0.76); padding-top:10px; padding-bottom:10px; text-align:center">
                                    <a
                                        href="{{ asset('std_service/transport/Transport.jpg') }}
                                                                                                                                                                                                                            ">
                                        <img src="{{ asset('std_service/transport/Transport_thumb.jpg') }}"
                                            class="img-fluid" style="margin:2px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-area section-sp1 bg-gray gallery-bx" id="refectories">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>COLLEGE REFECTORIES</span></h3>
                            </div>
                            <p style="font-size:18px;">The College has separate refectories for boys and girls. The
                                Mess
                                is looked after by the Mess Committee constituted by the Principal.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END-->
        </div>
    </div>


    @push('scripts')
        <script>
            $(document).ready(function () {
                $('.gallery-popup').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    image: {
                        titleSrc: 'title'
                    }
                });
            });
        </script>
    @endpush
@endsection