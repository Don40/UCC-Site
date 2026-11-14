@extends('layouts.app')

@section('title', 'IQAC')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/jubilee-celebration.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Platinum Jubilee</h1>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block pj-page">

            <!-- Identity + Theme -->
            <div class="pj-identity">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-center">
                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/crest.png"
                                alt="Union Christian College Platinum Jubilee 1952-2027" class="pj-crest">
                        </div>
                        <div class="col-lg-8">
                            <h2>Union Christian College</h2>
                            <p class="pj-addr">Umiam Khwan, Ri Bhoi District, Meghalaya 793122</p>
                            <p class="pj-neicc">An Educational Project of the North East India Christian Council (NEICC)</p>
                            <h3 class="pj-title">Platinum Jubilee <small>Celebration</small></h3>
                            <div class="pj-theme">
                                <div class="pj-theme-label">Theme</div>
                                <p>Established by Grace, Empowered for Tomorrow:<br>Ripples of the Living Water</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calendar of Events -->
            <div class="pj-cal" id="calendar">
                <div class="container">
                    <h4 class="pj-cal-head">Calendar of Events</h4>
                    <p class="pj-cal-sub">Platinum Jubilee Celebration 2026–2027</p>
                    <span class="pj-rule"></span>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-12">
                            <div class="pj-tl">
                                <div class="pj-tl-item pj-ev-1">
                                    <div class="pj-tl-marker"><i class="fa fa-scissors" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/inauguration.jpg"
                                                alt="Inauguration of the Platinum Jubilee Celebration" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">August 14, 2026</span>
                                            <h5>Inauguration of the Platinum Jubilee Celebration</h5>
                                            <p>A historic beginning of our 75-year legacy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-2">
                                    <div class="pj-tl-marker"><i class="fa fa-book" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/first-lecture.jpg"
                                                alt="First Memorial Lecture" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">September 2026</span>
                                            <h5>First Memorial Lecture</h5>
                                            <p>Engaging minds, shaping leaders.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-3">
                                    <div class="pj-tl-marker"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/sports.jpg"
                                                alt="1st Inter-College Sports Festival" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">September – 1st week October 2026</span>
                                            <h5>1st Inter-College Sports Festival</h5>
                                            <p>Unity, teamwork and sportsmanship.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-4">
                                    <div class="pj-tl-marker"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/arts-literary.jpg"
                                                alt="Inter-College Arts and Literary Festival" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">October 2026</span>
                                            <h5>Inter-College Arts &amp; Literary Festival</h5>
                                            <p>Celebrating creativity, talent and expression.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-5">
                                    <div class="pj-tl-marker"><i class="fa fa-university" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/youth-parliament.jpg"
                                                alt="District-Level Youth Parliament" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">October 5–6, 2026</span>
                                            <h5>District-Level Youth Parliament</h5>
                                            <p>Conversations that inspire and empower.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-6">
                                    <div class="pj-tl-marker"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/faculty-development.jpg"
                                                alt="Faculty Development Program for Christian Colleges of Northeast India"
                                                loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">October 30 – November 1, 2026</span>
                                            <h5>Faculty Development Program for Christian Colleges of Northeast India</h5>
                                            <p>Equipping educators, strengthening institutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-7">
                                    <div class="pj-tl-marker"><i class="fa fa-microphone" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/talk-seminar.jpg"
                                                alt="Popular Talk / Seminar" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">November 2026</span>
                                            <h5>Popular Talk / Seminar</h5>
                                            <p>Conversations that inspire and empower.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-8">
                                    <div class="pj-tl-marker"><i class="fa fa-book" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/second-lecture.jpg"
                                                alt="Second Memorial Lecture" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">March 2027</span>
                                            <h5>Second Memorial Lecture</h5>
                                            <p>Honouring knowledge, reflecting our journey.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-9">
                                    <div class="pj-tl-marker"><i class="fa fa-music" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/gospel-concert.jpg"
                                                alt="Gospel Concert and Cultural Festival" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">April 2027</span>
                                            <h5>Gospel Concert and Cultural Festival</h5>
                                            <p>A celebration of faith, music and culture.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pj-tl-item pj-ev-10">
                                    <div class="pj-tl-marker"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    <div class="pj-tl-card">
                                        <div class="pj-tl-thumb">
                                            <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/events/closing.jpg"
                                                alt="Closing Ceremony of the Platinum Jubilee Celebration" loading="lazy">
                                        </div>
                                        <div class="pj-tl-text">
                                            <span class="pj-tl-date">August 14, 2027</span>
                                            <h5>Closing Ceremony of the Platinum Jubilee Celebration</h5>
                                            <p>A grateful close, a hopeful future.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pj-grace-emblem">
                                <img src="https://www.uccollegemeghalaya.ac.in/assets/images/jubilee/75-years-of-grace.jpg"
                                    alt="75 Years of Grace, 1952 - 2027" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invitation -->
            <div class="pj-invite">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 text-center">
                            <i class="fa fa-heart pj-invite-icon" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <h3>Be a part of our journey. Invest in our future.</h3>
                            <p>As we celebrate 75 years of God’s faithfulness, we invite you to partner with us in building
                                a stronger tomorrow for generations to come.</p>
                            <p class="pj-emph">Your support today creates lasting impact.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ways you can support -->
            <div class="pj-support">
                <div class="container">
                    <h4 class="pj-head">Ways You Can Support</h4>
                    <span class="pj-rule"></span>
                    <div class="row">
                        <div class="col-lg col-md-4 col-sm-6 col-6">
                            <div class="pj-way">
                                <i class="fa fa-inr pj-ico" aria-hidden="true"></i>
                                <h5>Financial Contributions</h5>
                                <p>Monetary donations towards the Platinum Jubilee Fund</p>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 col-sm-6 col-6">
                            <div class="pj-way">
                                <i class="fa fa-handshake-o pj-ico" aria-hidden="true"></i>
                                <h5>Corporate &amp; CSR Partnerships</h5>
                                <p>Partner with us through CSR initiatives</p>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 col-sm-6 col-6">
                            <div class="pj-way">
                                <i class="fa fa-gift pj-ico" aria-hidden="true"></i>
                                <h5>Sponsorship of Events</h5>
                                <p>Support our lectures, festivals, sports and other programmes</p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6 col-sm-6 col-6">
                            <div class="pj-way">
                                <i class="fa fa-leaf pj-ico" aria-hidden="true"></i>
                                <h5>In-Kind Support</h5>
                                <p>Contribute resources, goods, services or expertise</p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6 col-sm-6 col-6">
                            <div class="pj-way">
                                <i class="fa fa-users pj-ico" aria-hidden="true"></i>
                                <h5>Alumni &amp; Well-Wisher Support</h5>
                                <p>Come together to strengthen the legacy we all share</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Your gift / bank details / verse -->
            <div class="pj-gift">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <h4 class="pj-gift-head">Your Gift</h4>
                            <p class="pj-gift-sub">Transforms Lives</p>
                            <span class="pj-rule left"></span>
                            <p class="pj-gift-text">Together, let us continue the legacy of faith, education and service.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="pj-bank">
                                <p class="pj-bank-title">Donate to our dedicated Platinum Jubilee account</p>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pj-k"><i class="fa fa-university" aria-hidden="true"></i> Account
                                                Name</td>
                                            <td class="pj-sep">:</td>
                                            <td>UCC PLATINUM JUBILEE ACCOUNT</td>
                                        </tr>
                                        <tr>
                                            <td class="pj-k"><i class="fa fa-address-card-o" aria-hidden="true"></i> Account
                                                Number</td>
                                            <td class="pj-sep">:</td>
                                            <td class="pj-tbu">45450684628</td>
                                        </tr>
                                        <tr>
                                            <td class="pj-k"><i class="fa fa-bank" aria-hidden="true"></i> Bank</td>
                                            <td class="pj-sep">:</td>
                                            <td class="pj-tbu">SBI</td>
                                        </tr>
                                        <tr>
                                            <td class="pj-k"><i class="fa fa-key" aria-hidden="true"></i> IFSC Code</td>
                                            <td class="pj-sep">:</td>
                                            <td class="pj-tbu">SBIN0002010</td>
                                        </tr>
                                        <tr>
                                            <td class="pj-k"><i class="fa fa-map-marker" aria-hidden="true"></i> Branch</td>
                                            <td class="pj-sep">:</td>
                                            <td class="pj-tbu">SBI UMIAM BRANCH</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="pj-bank-note">All contributions are eligible for acknowledgement.<br>(Tax benefits
                                    as per applicable laws.)</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="pj-verse">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Being confident of this, that He who began a good work in you will carry it on to
                                    completion.</p>
                                <span class="pj-ref">Philippians 1:6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Closing -->
            <div class="pj-close">
                <div class="container">
                    <h3>Let us build tomorrow, together.</h3>
                    <p class="pj-thanks">Thank you for believing in our mission.</p>
                    <div class="pj-contact">
                        <div class="pj-c">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div>
                                <span>Contact Us</span>
                                <a href="tel:+919436108697">9436108697</a> / <a href="tel:+918974206428">8974206428</a>
                            </div>
                        </div>
                        <div class="pj-c">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <div>
                                <span>Email</span>
                                <a href="mailto:uccmegh2017@gmail.com">uccmegh2017@gmail.com</a>
                            </div>
                        </div>
                        <div class="pj-c">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div>
                                <span>Union Christian College</span>
                                <p>Umiam Khwan, Ri Bhoi District,<br>Meghalaya 793122</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- contact area END -->

@endsection