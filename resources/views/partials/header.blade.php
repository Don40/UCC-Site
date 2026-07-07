<div id="loading-icon-bx"></div>
<!-- Header Top ==== -->
<header class="header rs-nav header-transparent">
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <!-- Header Logo ==== -->
                <div class="menu-logo">
                    <a href="https://www.uccollegemeghalaya.ac.in/"><img src="{{ asset('assets/images/ucc_logo.png') }}"
                            alt="UCC Logo"></a>
                    <!--android-icon-72x72.png-->
                </div>
                <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                    data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Author Nav ==== -->
                <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                    <!--<div class="menu-logo">
       <a href="https://www.uccollegemeghalaya.ac.in/"><img src="assets/images/ucc_logo.png" alt=""></a>
      </div>-->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}"><i class="fa fa-home"
                                    aria-hidden="true"></i>&nbsp;Home</a></li>
                        <li><a href="{{ route('about') }}">About Us<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about') }}#principal_msg">Principal's Message</a></li>
                                <li>
                                    <a href="{{ asset('download/ORGANOGRAM OFFICE STRUCTURE.pdf') }}">
                                        Organogram
                                    </a>
                                </li>
                                <li><a href="{{ route('about') }}#history">History</a>
                                </li>
                                <li><a href="{{ route('about') }}#vision_mission">Vision
                                        and
                                        Mission</a>
                                </li>
                                <li><a href="{{ route('about') }}#affiliation&recognition">Recognition</a>
                                </li>
                                <li><a href="{{ route('about') }}#members">Governing
                                        Body</a>
                                </li>
                                <li><a href="{{ route('about') }}#rti">RTI</a></li>
                            </ul>
                        </li>
                        <li class="add-mega-menu"><a href="javascript:;">Academics<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                <li><a href="{{ route('department') }}">Departments</a>
                                <li>
                                <li><a href="{{ route('course') }}">Courses</a></li>
                                <li><a href="https://www.admissionucc.in" target="_blank">Admissions</a></li>
                                <li>
                                <li><a href="{{ route('examination') }}">Examination</a></li>
                                <li><a href="{{ route('examination') }}#library">Library</a>
                                </li>
                                <li><a href="{{ asset('assets/download/UCC -Reserach Grant Guidelines.pdf') }}"
                                        target="_blank">
                                        UCC Research Grant
                                    </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('student-services') }}">
                                Student's Services <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('student-services') }}#src">SRC</a></li>

                                <li><a href="{{ route('student-services') }}#nss">NSS</a></li>

                                <li><a href="{{ route('student-services') }}#ncc">NCC</a></li>

                                <li><a href="{{ route('student-services') }}#scm">SCM</a></li>

                                <li><a href="{{ route('student-services') }}#transport">Transport</a></li>

                                <li><a href="{{ route('student-services') }}#refectories">Refectories</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('iqac') }}">IQAC<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('iqac') }}#aqar_minutes">AQAR</a></li>
                                <li><a href="{{ route('ssr') }}">SSR</a></li>
                                <li><a href="{{ route('iqac') }}#aqar_minutes">Minutes</a></li>
                                <li><a href="{{ route('iqac') }}#iiqa">IIQA</a></li>
                                <li><a href="{{ route('iqac') }}#reports">Reports</a></li>
                                <li><a href="{{ route('iqac') }}#iqac_cells">Cells under IQAC</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('downloads') }}">
                                Downloads <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('downloads') }}#question-banks">Question Banks</a></li>

                                <li><a href="{{ route('downloads') }}#forms">Forms</a></li>

                                <li>
                                    <a href="{{ asset('assets/download/LIST_OF_HOLIDAYS_2020.pdf') }}" target="_blank">
                                        Holiday Lists
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <!--class="text text-warning blink_me"-->
                        <!--<li><a href="https://www.uccadmission.in" target="_blank" title="click here to register yourself for Under-Graduate Course">Admission-<//?php echo date("Y");?></a></li>-->
                        <li><a href="https://erp.uccollegemeghalaya.ac.in/">ERP</a></li>
                    </ul>
                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>