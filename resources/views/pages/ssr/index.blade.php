@extends('layouts.app')

@section('title', 'IQAC')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url('{{ asset('assets/images/banner/banner2.jpg') }}');">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Self Study Report (SSR)</h1>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Portfolio  -->
            <div class="section-area section-sp1 bg-gray gallery-bx" id="ssr">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>Self Study Report (SSR)</span></h3>
                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#circular_aspects"
                                            class="collapsed" data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">1. Curricular Aspects</span></h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="circular_aspects" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.1.1 Curricular Enrichment Documents-merged.pdf') }}"
                                                target="_blank">1.1.1 Curricular Enrichment Documents-merged <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.1.3 Curricular Planning and Implementation -BoS-Paper setter.pdf') }}"
                                                target="_blank">1.1.3 Curricular Planning and Implementation -BoS-Paper
                                                setter <i class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.1.3A Paper Setter.pdf') }}"
                                                target="_blank">1.1.3A Paper Setter <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.1.3B BoS.pdf') }}"
                                                target="_blank">1.1.3B BoS <i class="fa fa-file-pdf-o text-danger"></i></a>
                                        </li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.2 Academic Flexibility (30).pdf') }}"
                                                target="_blank">1.2 Academic Flexibility (30) <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.2.2 -1.2.3 Number of Add on Certificate programs offered during the last five years.pdf') }}"
                                                target="_blank">1.2.2 -1.2.3 Number of Add on Certificate programs offered
                                                during the last five years <i class="fa fa-file-pdf-o text-danger"></i></a>
                                        </li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.3 Curriculum Enrichment.pdf') }}"
                                                target="_blank">1.3 Curriculum Enrichment <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.3.3 Latest Complete years 2020.pdf') }}"
                                                target="_blank">1.3.3 Latest Complete years 2020 <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/1.4 STUDENTS FEEDBACK 2015-20.pdf') }}"
                                                target="_blank">1.4 STUDENTS FEEDBACK 2015-20 <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/crosscutting.pdf') }}"
                                                target="_blank">Crosscutting <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/Botany Syllabus.pdf') }}"
                                                target="_blank">Botany Syllabus <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/Geography Syllabus.pdf') }}"
                                                target="_blank">Geography Syllabus <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/Nutrition Syllabus.pdf') }}"
                                                target="_blank">Nutrition Syllabus <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/Zoology Syllabus.pdf') }}"
                                                target="_blank">Zoology Syllabus <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/Project last 5 years.pdf') }}"
                                                target="_blank">Project last 5 years <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>

                                        <li><a href="{{ asset('assets/ssr/circular_aspects/Report of Add on Course.pdf') }}"
                                                target="_blank">Report of Add on Course <i
                                                    class="fa fa-file-pdf-o text-danger"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#teaching_learning"
                                            class="collapsed" data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">2. Teaching-Learning and Evaluation</span></h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="teaching_learning" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.1.1 Average enrolment Percentage(Average of last five years).pdf') }}"
                                                target="_blank">2.1.1 Average enrolment Percentage(Average of last five
                                                years)&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.1.2 Average percentage of seats filled against seats reserved for various categories (SC, ST, OBC, Divyangjan, etc).pdf') }}"
                                                target="_blank">2.1.2 Average percentage of seats filled against seats
                                                reserved for various categories (SC, ST, OBC, Divyangjan, etc&nbsp;<i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.2.2 Number of student enrolled and full time teacher.pdf') }}"
                                                target="_blank">2.2.2 Number of student enrolled and full time
                                                teacher&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.2.2 Total number of full time teachers in the Institution.pdf') }}"
                                                target="_blank">2.2.2 Total number of full time teachers in the
                                                Institution&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.3.3 Mentor mentee.pdf') }}"
                                                target="_blank">2.3.3 Mentor mentee&nbsp;<i class="fa fa-file-pdf-o"
                                                    aria-hidden="true" style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.3.3. Number of full time teacher and enrolled students.pdf') }}"
                                                target="_blank">2.3.3. Number of full time teacher and enrolled
                                                students&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.4.1 List of Faculty Authenticate by Principal.pdf') }}"
                                                target="_blank">2.4.1 List of Faculty Authenticate by Principal&nbsp;<i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.4.1 List of Full time teacher last five years.pdf') }}"
                                                target="_blank">2.4.1 List of Full time teacher last five years&nbsp;<i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.4.2 List of faculty with PhD year of awarding.pdf') }}"
                                                target="_blank">2.4.2 List of faculty with PhD year of awarding&nbsp;<i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.4.2 Number of Phd and total number of Full time teacher.pdf') }}"
                                                target="_blank">2.4.2 Number of Phd and total number of Full time
                                                teacher&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.4.3 Average Experience with PAN details.pdf') }}"
                                                target="_blank">2.4.3 Average Experience with PAN details&nbsp;<i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.4.3 Teaching experience latest academic year.pdf') }}"
                                                target="_blank">2.4.3 Teaching experience latest academic year&nbsp;<i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                        <li><a href="{{ asset('assets/ssr/teaching_learning_evaluation/2.6.3 Average pass percentage of Students during last five years(30).pdf') }}"
                                                target="_blank">2.6.3 Average pass percentage of Students during last five
                                                years(30)&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"
                                                    style="color:#b80214;"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--research_innovation_extension-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#research_innovation_extension"
                                            class="collapsed" data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">3. Research, Innovation & Extensions</span>
                                                </h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="research_innovation_extension" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Final_Project_UGC-merged.pdf') }}"
                                                target="_blank">
                                                3.1.1 Grants received from Government and non-governmental
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/3.1.2Final_Project_UGC-merged.pdf') }}"
                                                target="_blank">
                                                3.1.2 Percentage of departments having Research projects funded
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Seminar Conference.pdf') }}"
                                                target="_blank">
                                                3.1.3 Seminar Conference
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('ssr') }}#journal-books">
                                                3.2 Journal &amp; Books
                                            </a>
                                        </li>

                                        <li class="list-download" style="margin-left:20px;">
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Journal.pdf') }}"
                                                target="_blank">
                                                Journal <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>

                                            &nbsp;&nbsp;&nbsp;

                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Books.pdf') }}"
                                                target="_blank">
                                                Books <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Award.pdf') }}"
                                                target="_blank">
                                                3.3.2 Award
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Extension Activities.pdf') }}"
                                                target="_blank">
                                                3.3.3 Extension Program
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Extension Activities(1).pdf') }}"
                                                target="_blank">
                                                3.3.4 Average Extension
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/Colaboration.pdf') }}"
                                                target="_blank">
                                                3.4 Collaboration
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/research_innovation_extension/MoUs.pdf') }}"
                                                target="_blank">
                                                3.4.2 MoUs
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--infrastructure_learning_resources-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse"
                                            href="#infrastructure_learning_resources" class="collapsed"
                                            data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">4. Infrastructure and Learning Resources</span>
                                                </h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="infrastructure_learning_resources" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.1.1-INSTITUTION ADEQUATE INFRASTRUCTURE.pdf') }}"
                                                target="_blank">
                                                4.1.1-INSTITUTION ADEQUATE INFRASTRUCTURE
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.1.2A Dispensary Data.pdf') }}"
                                                target="_blank">
                                                4.1.2A Dispensary Data
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.1.2 Details of Infrastructure within the Campus.pdf') }}"
                                                target="_blank">
                                                4.1.2 Details of Infrastructure within the Campus
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.1.3 PERCENTAGE OF CLASSROOM AND SEMINAR.pdf') }}"
                                                target="_blank">
                                                4.1.3 PERCENTAGE OF CLASSROOM AND SEMINAR
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.1.4 A Budget 2015-20.pdf') }}"
                                                target="_blank">
                                                4.1.4 A Budget 2015-20
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.1.4 Financial Audit Report 2015-2020.pdf') }}"
                                                target="_blank">
                                                4.1.4 Financial Audit Report 2015-2020
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.2.2 NLIST Subscription.pdf') }}"
                                                target="_blank">
                                                4.2.2 NLIST Subscription
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.2.2 LIBRARY RESOURCES.pdf') }}"
                                                target="_blank">
                                                4.2.2 LIBRARY RESOURCES
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.2.3 AVERAGE ANNUAL PURCHASE OF BOOK.pdf') }}"
                                                target="_blank">
                                                4.2.3 AVERAGE ANNUAL PURCHASE OF BOOK
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.3.2 IT Audit 2020.pdf') }}"
                                                target="_blank">
                                                4.3.2 IT Audit 2020
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/infrastructure_learning_resources/4.4.1 AVERAGE PERCENTAGE.pdf') }}"
                                                target="_blank">
                                                4.4.1 AVERAGE PERCENTAGE
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--student_support_progression-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#student_support_progression"
                                            class="collapsed" data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">5. Student Support Progression</span></h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="student_support_progression" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.1.1 Scholarship and Financial Support 2015-20.docx') }}"
                                                target="_blank">
                                                5.1.1 Scholarship and Financial Support 2015-20
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.1.2 Students Free Scholarship Data 2011-2019.docx') }}"
                                                target="_blank">
                                                5.1.2 Student's Free Scholarship Data 2011-2019
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.1.3 Capacity Building and Skills Enhancement Initiatives.pdf') }}"
                                                target="_blank">
                                                5.1.3 Capacity Building and Skills Enhancement Initiatives
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.1.5 Mechanism for timely redressal of student grievances.pdf') }}"
                                                target="_blank">
                                                5.1.5 Mechanism for timely redressal of student grievances
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.2 Students Progression.pdf') }}"
                                                target="_blank">
                                                5.2 Students Progression
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.3.1.pdf') }}"
                                                target="_blank">
                                                5.3.1
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.3.2.pdf') }}"
                                                target="_blank">
                                                5.3.2
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/student_support_progression/5.3.3.docx') }}"
                                                target="_blank">
                                                5.3.3
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--GLM-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#glm" class="collapsed"
                                            data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">6. Governance, Leadership and Management</span>
                                                </h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="glm" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.2.1 Five year Strategic Plan.pdf') }}"
                                                target="_blank">
                                                6.2.1 Five year Strategic Plan <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.2.1 Grants.pdf') }}" target="_blank">
                                                6.2.1 Grants <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.2.2 Organogram.pdf') }}" target="_blank">
                                                6.2.2 Organogram <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.2.3 Implementation of e-governance in areas of operation.pdf') }}"
                                                target="_blank">
                                                6.2.3 Implementation of e-governance in areas of operation
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.3.2. Teachers registration fee.pdf') }}"
                                                target="_blank">
                                                6.3.2 Teachers registration fee <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.3.3 Average number of professional development-min.pdf') }}"
                                                target="_blank">
                                                6.3.3 Average number of professional development
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.3.4-min.pdf') }}" target="_blank">
                                                6.3.4 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.3.5 Academic Audit Report-min.pdf') }}"
                                                target="_blank">
                                                6.3.5 Academic Audit Report <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.3.5 IQAC Activities-min.pdf') }}"
                                                target="_blank">
                                                6.3.5 IQAC Activities <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/6.4.1. Financial Audit Report 2015-2020.pdf') }}"
                                                target="_blank">
                                                6.4.1 Financial Audit Report 2015-2020 <i
                                                    class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/glm/Criterion VI Template-min.pdf') }}"
                                                target="_blank">
                                                Criterion VI Template <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--ivbp-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="#ivbp" class="collapsed"
                                            data-parent="#accordion1">
                                            <div class="heading left">
                                                <h5 class="m-b10 title-head">7. Institutional Values and Best
                                                    Practices</span></h5>
                                            </div>
                                        </a></h5>
                                </div>
                                <div id="ivbp" class="acod-body collapse">
                                    <ul class="list-circle red">
                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.1.pdf') }}" target="_blank">
                                                7.1.1 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.3.pdf') }}" target="_blank">
                                                7.1.3 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.4.pdf') }}" target="_blank">
                                                7.1.4 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.5.pdf') }}" target="_blank">
                                                7.1.5 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.6.pdf') }}" target="_blank">
                                                7.1.6 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.8.pdf') }}" target="_blank">
                                                7.1.8 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.9.pdf') }}" target="_blank">
                                                7.1.9 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.10.pdf') }}" target="_blank">
                                                7.1.10 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.1.11.pdf') }}" target="_blank">
                                                7.1.11 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('assets/ssr/ivbp/7.2.1.pdf') }}" target="_blank">
                                                7.2.1 <i class="fa fa-file-pdf-o text-danger"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->



@endsection