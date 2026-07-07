@extends('layouts.app')

@section('title', 'Examination')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/color/color-1.css') }}">
@endpush

@section('content')

    <div class="page-content bg-white">



        <!-- Page Content -->
        <div class="content-block">

            <!-- Content -->
            <div class="page-content bg-white">
                <!-- inner page banner -->
                <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
                    <div class="container">
                        <div class="page-banner-entry">
                            <h1 class="text-white">Examination</h1>
                        </div>
                    </div>
                </div>
                <!-- contact area -->
                <div class="content-block">
                    <!-- Portfolio  -->
                    <div class="section-area section-sp1 gallery-bx">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>Examination</span></h3>
                            </div>
                            <p style="font-size:18px;">At the end of each Semester, there shall be an examination as per the
                                Semester Academic Calendar given below:</p>
                            <ol class="list-num-count">
                                <li><span style='font-family:"Bookman Old Style","serif";font-size:12.0pt;'>Evaluation in
                                        each course shall be on the basis of performance through continuous assessment and
                                        the end semester examinations. The weightage assigned to the continuous assessment
                                        and end semester examinations shall be in the ratio1:3</li>
                                <li><span style='font-family:"Bookman Old Style","serif";font-size:12.0pt;'>The pattern and
                                        schedule of continuous assessment and evaluation thereof shall be such as laid down
                                        in the relevant Regulation.</li>
                            </ol>
                            <p style='font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'>
                            <p style="font-size:18px;">Student shall be allowed to proceed to the next semester irrespective
                                of failed papers/arrear papers subject to payment of fees and fulfillment of other
                                prescribed conditions laid down by the University</p>
                            <p style='font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span
                                        style='font-size:16px;font-family:"Bookman Old Style","serif";color:red;'>&nbsp;</span></strong>
                            </p>
                            <div class="heading-bx left">
                                <h4 class="m-b10 title-head"><span>Examination Rules for Students</span></h4>
                            </div>
                            <ol class="list-num-count"
                                style='font-size:18px;font-family:"Calibri","sans-serif";text-align:justify;'>
                                <li>Students must carry their Identity Card, Admit Card and Registration Card every day to
                                    the Examination Hall.</li>
                                <li>Students must sit according to the seating arrangement made every day.</li>
                                <li>Students must enter the examination hall 10 minutes before the commencement of the
                                    examination.&nbsp;</li>
                                <li>Students who come late- half an hour after the commencement of the examination will not
                                    be permitted to sit for the examination.</li>
                                <li>Students are not allowed to go out to the wash room before one hour after the
                                    commencement of the examination.&nbsp;</li>
                                <li>Students must sign the &lsquo;lavatory sheet&rsquo; and mention the timing before
                                    leaving and after returning to the examination hall.</li>
                                <li>Students cannot submit their Answer- scripts before one hour after the commencement of
                                    the examination.</li>
                                <li>Students must not talk or discuss among themselves during the examination.&nbsp;</li>
                                <li>Students must not carry Mobile Phones and electronic devices inside the examination
                                    hall.Use of Mobile and electronic devices in the examination hall is strictly prohibited
                                    and such usage would be confiscated and sent to NEHU as evidence.</li>
                                <li>Books and bags are not allowed to keep inside the examination hall.</li>
                                <li>Students must write their Examination Roll Nos. as mentioned in the Admit Card issued by
                                    NEHU, Class and subject with paper no. correctly in the Answer Scripts. If there is any
                                    wrong entry in the answer scripts the College/ NEHU will not be responsible.&nbsp;</li>
                                <li>As per NEHU Ordinance OD 6 (Ref. No. AR.UG/SEM-EXAM/2015-113648 dated 27<sup>th</sup>
                                    September 2016), student indulging in malpractice during the examination will invite
                                    expulsion only in that particular paper. Decision on debarring such students from
                                    appearing with the remaining examination or penalty thereof, rest with the Examination
                                    Discipline Committee, NEHU.</span></li>
                            </ol>
                            <p
                                style='margin-top:0in;margin-right:0in;margin-bottom:5.0pt;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'>
                            <div class="heading-bx left">
                                <h4 class="m-b10 title-head"><span>Improvement Facility:</span></h4>
                            </div>
                            <ol class="list-num-count"
                                style='font-size:18px;font-family:"Calibri","sans-serif";text-align:justify;'>
                                <li>The Improvement facility of an Examination will be given to a desirous student after
                                    successful completion of the Honours Degree Course of Six Semesters on the
                                    recommendation of the College.</li>
                                <li>The facility for improvement will be extended to a student securing less than 45% marks
                                    in any of the papers</li>
                                <li>No forfeiture condition shall be applied to the candidate.</li>
                                <li>In case of improvement in the marks, the students will be required to surrender their
                                    Original Mark Sheet and the improved Mark Sheet shall be retained by the student.</li>
                                <li>Student availing improvement facility shall not be eligible for Ranking.</li>
                                <li>Other details to be notified in due course.</li>
                            </ol>
                            <p
                                style='margin-top:0in;margin-right:-8.25pt;;margin-left:1.0in;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'>
                            <div class="heading-bx left">
                                <h4 class="m-b10 title-head"><span>Re-evaluation facility:</span></h4>
                            </div>
                            <ol class="list-num-count"
                                style='font-size:18px;font-family:"Calibri","sans-serif";text-align:justify;'>
                                <li>A student who scores less than 15% marks in a paper shall not be eligible for
                                    re-evaluation facility.</li>
                                <li>Re-evaluation facility is permissible for one paper only in a Semester.</li>
                                <li>Re-evaluation facility is not applicable in respect of Practical Examinations.</li>
                                <li>The higher marks awarded post re-evaluation shall be awarded</li>
                                <li>A student who was declared passed initially shall not be declared unsuccessful as a
                                    result of re-evaluation and downward revision of marks shall be limited to pass level.
                                </li>
                                <li>A student may apply for re-evaluation within 30 days of declaration of the concerned
                                    results on payment of the prescribed fee to the Controller of Examination.</li>
                            </ol>
                        </div><!--container-->
                    </div>
                    <div class="section-area section-sp1 bg-gray gallery-bx" id="library">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>Library</span></h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-angle-right">
                                        <li>Librarian: Mrs. R. Kharumnuid.</li>
                                        <li>Asst. Librarian: Mr. M. P. Najiar.</li>
                                    </ul>
                                    <p>The College Central Library is equipped with a good number of text books, reference
                                        books, journals, etc. The Library is also equipped with digital database like
                                        Inflibnet and N-LIST.</p>
                                </div>
                                <div class="col-md-8">

                                    <a data-fancybox="gallery" href="{{ asset('assets/library/DSC_0001.JPG') }}">
                                        <img src="{{ asset('assets/library/DSC_0001-thumb.JPG') }}"
                                            class="img-fluid course-img">
                                    </a>

                                    <a data-fancybox="gallery" href="{{ asset('assets/library/DSC_0005.JPG') }}">
                                        <img src="{{ asset('assets/library/DSC_0005-thumb.JPG') }}"
                                            class="img-fluid course-img">
                                    </a>

                                    <a data-fancybox="gallery" href="{{ asset('assets/library/DSC_0007.JPG') }}">
                                        <img src="{{ asset('assets/library/DSC_0007-thumb.JPG') }}"
                                            class="img-fluid course-img">
                                    </a>

                                    <a data-fancybox="gallery" href="{{ asset('assets/library/DSC_0009.JPG') }}">
                                        <img src="{{ asset('assets/library/DSC_0009-thumb.JPG') }}"
                                            class="img-fluid course-img">
                                    </a>

                                    <a data-fancybox="gallery" href="{{ asset('assets/library/DSC_0011.JPG') }}">
                                        <img src="{{ asset('assets/library/DSC_0011-thumb.JPG') }}"
                                            class="img-fluid course-img">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area END -->
            </div>
            <!-- Content END-->

        </div>

    </div>

@endsection