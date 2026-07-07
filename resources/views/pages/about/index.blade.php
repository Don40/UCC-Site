@extends('layouts.app')

<style>
    .morecontent {
        display: none;
    }

    .morelink {
        color: #007bff;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
    }

    .morelink:hover {
        text-decoration: underline;
    }
</style>
@section('content')
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">About College</h1>
                </div>
            </div>
        </div>
        <!-- Page Content Box ==== -->
        <div class="content-block"><!--  Principal's Message  ==== -->
            <div class="section-area section-sp2 bg-gray" id="principal_msg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx left">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>Principal Message</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="testimonial-bx">
                            <div class="testimonial-thumb">
                                <img src="assets/images/profile/dr_r_m_manih.jpg" alt="principal img">
                            </div>
                            <div class="testimonial-info">
                                <h4 class="name">Dr. R.M. Manih</h4>
                                <p>M.Sc, Ph.D., B.C.S</p>
                                <p>Principal, UCC</p>
                            </div>
                            <div class="testimonial-content">
                                <div class="description">
                                    <div class="comment more"
                                        style="font-family:lato; font-size:20px; text-align: justify;">
                                        Beneath the cloud-capped hills, amidst luxuriant woodlands and surrounded by the
                                        shimmering waters of the Umiam Lake, lies an idyllic conclave of houses and
                                        buildings
                                        that make up one of the unique educational institutions in the North Eastern region-
                                        the
                                        Union Christian College, popularly known by its acronym, UCC.<br><br>
                                        Established on the 14th of August 1952, Union Christian College is an Educational
                                        project of the North East India Christian Council (NEICC). For 67 years, the college
                                        has
                                        been quenching the academic thirst of all those who had come to seek wisdom and
                                        knowledge within its hallowed grounds and for this we must give thanks to the vision
                                        of
                                        our Founding Fathers. We are here because of what they did then. Jutting out into
                                        the
                                        Umiam Lake like a mini-peninsula, the sprawling 170-acre campus of the UCC sported
                                        tree-lined avenueshas homed generation after generation of students from across the
                                        North-eastern states of Assam, Manipur, Tripura, Nagaland, Arunachal Pradesh,
                                        Mizoram,
                                        Sikkim and Meghalaya and students from countries like South Africa, Uganda, Zambia,
                                        Somalia, Myanmar and Bangladesh.
                                        From a little acorn, it is now a towering oak, making steadfast progress on all
                                        fronts
                                        living up to its motto – ‘Come to the living water’. A patch of beauty and grace in
                                        North East India, away from the madding crowd of Shillong, UCC provides an excellent
                                        academic ambience and opportunities for you to grow and to explore your potentials.
                                        We,
                                        at UCC, believe that every learner is unique and special and it is, therefore, our
                                        utmost duty and responsibility as educators to nurture and develop every learner to
                                        prepare them for life.<br><br>
                                        It is our humble goal at Union Christian College to bring about the innate harmony
                                        in
                                        existence, harmony within themselves and with others in society and mother nature. I
                                        am
                                        sure thatour exciting academic and co-curricular activities will have a
                                        life-changing
                                        impact not only in your education abilities but in your development as a responsible
                                        and
                                        God-fearing human being.I also take this opportunity to inform all of you that is
                                        our
                                        utmost endeavour to improve our teaching-learning infrastructure and to also
                                        introduce
                                        new programs to keep with the demand of time and space. We look forward to serving
                                        you
                                        and your children over the coming years.<br><br>
                                        Come to the Living Water of UCC
                                        <span>Thankyou and God Bless.</span>
                                        <span>Principal</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Principal's Message END ==== -->
                <!-- Our Story ==== -->
                <div class="section-area section-sp1 bg-white gallery-bx" id="history">
                    <div class="container">
                        <div class="heading-bx left">
                            <h3 class="m-b10 title-head"><span>A BRIEF HISTORY</span></h3>
                        </div>
                        <div class="description">
                            <div class="comment more" style="font-family:lato; font-size:20px; text-align: justify;">Beneath
                                the
                                cloud-capped hills, amidst luxuriant woodlands and surrounded by the shimmering waters of
                                the
                                Umiam
                                Lake, lays an idyllic conclave of houses and buildings that make up one of the unique
                                educational
                                institutions in the North Eastern region - the Union Christian College, popularly known by
                                its
                                acronym, UCC.<br><br>
                                Jutting out into the Umiam Lake like a mini-peninsula, the sprawling campus of the UCC
                                sported
                                tree-lined avenues, hedges of forget-me-nots, patches of greenery and quiet roofs beneath
                                huge
                                stately trees whose leaves flutter incessantly in the caresses of the gentle breeze. It was
                                as
                                quiet
                                and tranquil as one wishes it to be – an ideal setting for young minds to gather precious
                                gems
                                of
                                knowledge.<br><br>
                                However, the place is once a wild land, stuck in timelessness, until a seed for its destiny
                                was
                                sown
                                by the high ideals of its founding fathers. It was on 22nd September, 1936 that a group of
                                representatives from various missions in Assam met in Shillong to consider the organization
                                of a
                                council of churches in the erstwhile undivided Assam. One year later on the 23rd September
                                1937,
                                that a committee to set up a college was formed. It included Rev.T.E. Pugh, J.M. Forbes,
                                Rev.J.J.M.
                                Nichols Roy and RaiBahadurD.Ropmay, with Dr. Victor Hugo Sword as its Chairman and
                                Treasurer.In
                                1941, the Assam Christian Council communicated with the other member-affiliated churches to
                                generate
                                funds for the noble project, and was assured of receiving four annas (25 paise) from each
                                member, as
                                well as other special gifts.<br><br>
                                Thus strengthened, Dr. Sword was entrusted with the task of procuring a suitable site for
                                the
                                proposed college on 28th August 1948. His pleas to the Baptist Church to provide the
                                Guwahati
                                campus
                                which had 22 acres of land was turned down because of the financial burden it would incur.
                                It
                                was at
                                this juncture that providence took a hand when the thenSyiem of Mylliem, Sati Raja offered
                                to
                                donate
                                900 acres of land on lease. It really was remarkable that with a humble sum of just Rs.
                                8475/-,
                                one
                                of the most renowned Colleges in the region was established.It was after a long awaited
                                beginning of
                                the College can see the light of day on Friday, the 14th August, 1952, the day which the
                                College
                                celebrated as its foundation day every year.<br><br>
                                It was notable that in retrospect, this College which was started with just one student
                                could
                                have
                                grown to what it is today. The first student, GasperleyMarwein hailing from West Khasi Hills
                                was
                                joined by Onershing Q. Marak from Garo Hills, YasathungLotha from Nagaland, Miss Alice
                                Laurence
                                from
                                Jorhat, TekachangtAoChangki from Nagaland, SanmongerAoChangki from Nagaland, Plausing. K.
                                Marak
                                from
                                Garo Hills, A.S. Tuisem from Ukhrul, Manipur, Samuel Hembrom from Goalpara, Assam, Wilfred
                                Goldsmith
                                from Jorhat, Assam and ElphinstoneR.Marak from Garo Hills.<br><br>
                                63 years hence, the College is steadily progressing and growing from day to day.From a
                                little
                                acorn,
                                it is now a towering oak, making steadfast progress on all fronts living up to its motto –
                                ‘Come
                                to
                                the living water’ – quenching the thirst of all those who had come to seek wisdom and
                                knowledge
                                within its hallowed grounds. The College has had a fascinating run. It is still on the path
                                laid
                                down by its founding fathers – keeping their vision and striving ever onward.<br><br>
                                And so once again, as the sun sets over the horizon, a new dawn will arise where in its
                                tryst
                                with
                                destiny, UCC can march ahead the passage of time secure in the knowledge that it will have
                                given
                                the
                                best to the best that had been given it. <p><b>“Come to the Living Water”</b></p>
                            </div>

                        </div>
                    </div>
                    <!-- Our Story END ==== -->
                    <!-- Our Status ==== -->
                    <div class="section-area content-inner bg-gray section-sp1" id="vision_mission">
                        <div class="container">
                            <div class="section-content">
                                <div class="heading-bx left">
                                    <h3 class="m-b10 title-head"><span>College Motto</span></h3>
                                </div>
                                <p><em><span style='font-size:18px;font-family:"Times New Roman","serif";'>&nbsp; &nbsp;
                                            &nbsp;&ldquo;VENITE AD VIVAM AQUAM&rdquo; (Come to the Living
                                            Water).</span></em>
                                </p>
                                <div class="heading-bx left">
                                    <h3 class="m-b10 title-head"><span>Add-on Vision</span></h3>
                                </div>
                                <p><em><span style='font-size:18px;font-family:"Times New Roman","serif";color:#57616e;'>&nbsp;
                                            &nbsp; &nbsp; To empower the students for workplace and life&nbsp;</span></em>
                                </p>
                                <div class="heading-bx left">
                                    <h3 class="m-b10 title-head"><span>Core Mission of the College</span></h3>
                                </div>
                                <p><em><span style='font-size:18px;font-family:"Times New Roman","serif";color:#57616e;'>&nbsp;
                                            &nbsp; &nbsp; To empower stakeholders for development, sustenance and
                                            enhancement of
                                            quality in life.</span></em></p>
                                <h2 class="m-b10"></h2>
                                <div class="heading-bx left">
                                    <h3 class="m-b10 title-head"><span></span></h3>
                                </div>
                                <ul class="list-checked">
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>Providing
                                                empowerment workshop and training to students that foster workplace
                                                readiness</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>Providing
                                                empowerment counseling that builds stronger self -efficiency to face the
                                                challenges
                                                and learning needs of daily life.</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>Providing
                                                students with facilities that help them in their vertical and horizontal
                                                progression.</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>Inculcating
                                                qualitative improvement of teaching-learning, evaluation</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>Retraining
                                                teachers for capacity building for empowering the students</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>To
                                                promote knowledge and value-based education through academic
                                                excellence.</span></em>
                                    </li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>To
                                                train students for self-employment.</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>To
                                                inculcate spirit of leadership among the students</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>To
                                                constantly improve the quality of academic inputs.</span></em></li>
                                    <li><em><span
                                                style='font-family:"Times New Roman","serif";font-family:"Times New Roman","serif";font-size:14.0pt;color:#57616e;'>To
                                                mould leaders to serve the Church, the North East, and the country as a
                                                whole,
                                                by
                                                equipping them with the ministry of the Church in a Christian setting, and
                                                provide
                                                quality education to all, irrespective of their diverse belief
                                                systems</span></em>
                                    </li>
                                    </ol>
                                    <p
                                        style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:18px;font-family:"Calibri","sans-serif";'>
                                        <span style='font-size:18px;font-family:"Times New Roman","serif";'>&nbsp;</span>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="section-area section-sp1 bg-white gallery" id="affiliation&recognition">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head"><span>AFFILIATION & RECOGNITION</span></h3>
                            </div>
                            <ul class="list-circle orange">
                                <li>The College is permanently affiliated to the North Eastern Hill University (Affiliation
                                    No.
                                    CD/A.5/94-95/1064-65 dated December 13, 1995)</li>
                                <li>The College is recognised under Section 2(f) and 12(B) of UGC, Act 1958 (Recognition
                                    Letter
                                    No,
                                    F. No.1-1/2004 (CPP-I) dated 29 April 2009)</li>
                            </ul>
                        </div>
                    </div>
                    <!-- About Content ==== -->
                    <div class="section-area section-sp2 bg-fix ovbl-dark" id="members">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head text-white"><span>MEMBER OF GOVERNING BODY</span></h3>
                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="about_us#2023-2026"
                                            class="collapsed" data-parent="#2023-2026" style="color:white;"><i
                                                class="fa fa-angle-double-down"></i>MEMBER OF GOVERNING BODY (2023-2026)</a>
                                    </h5>
                                    <br>
                                </div>
                                <div id="2023-2026" class="acod-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="section-content text-white">
                                                <ul class="list-circle red" style="font-size:20px;">
                                                    <li>Mr. Lalmalsawma Pachuau, <br><small>Chairman, (Mizoram Synod)
                                                        </small>
                                                    </li>
                                                    <li> Mr Jonathan Giri, <br><small>Vice-Chairman, Church of North India -
                                                            NEI
                                                        </small></li>
                                                    <li>Rev. Dr. Ramengliana, <br><small>General Secretary NEICC</small>
                                                    </li>
                                                    <li>Rev. Dr. Brightstar J. Syiemlieh, <br><small>Treasurer UCC</small>
                                                    </li>
                                                    <li>Rev Zonunkima, <br><small>Tripura Baptist Christian Union</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-content text-white">
                                                <ul class="list-circle red" style="font-size:20px;">
                                                    <li> Rev L. P. Nongkseh, <br><small>KJP Synod Sepngi</small></li>
                                                    <li> Rev P. S. Tmung, <br><small>Ri Bhoi Presbyterian Church
                                                            Synod</small>
                                                    </li>
                                                    <li>Mr Wallambor Rynjah, <br><small>Church of God (Ecclesia)</small>
                                                    </li>
                                                    <li>Prof. Marco Mitri, <br><small>NEHU Nominee member</small></li>
                                                    <li>Prof. Rekha Shangpliang, <br><small>NEHU Nominee Member</small></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-content text-white">
                                                <ul class="list-circle red" style="font-size:20px;">
                                                    <!--<li>Prof. H. J. Syiemlieh, <br><small>Local Society representative</small></li> -->
                                                    <li>Shri. Midnight Born Kharlukhi, <br><small>Donor
                                                            representative</small>
                                                    </li>
                                                    <li>Dr. R. M. Manih,<br><small>Principal/Secretary Governing
                                                            Body</small>
                                                    </li>
                                                    <li>Dr. Mrs. Mercy Chand Daimari, <br><small>Vice Principal</small></li>
                                                    <li>Dr. J. P. Marak, <br><small>Staff representative</small></li>
                                                    <li>Mr. Banshaikupar L. Mawlong, <br><small>Staff representative</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--row end 2023-2026-->
                                </div>
                            </div><!--2022-24 ends-->
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                <div class="acod-head">
                                    <h5 class="acod-title"><a data-toggle="collapse" href="about_us#2020-2023"
                                            class="collapsed" data-parent="#2020-2023" style="color:white;"><i
                                                class="fa fa-angle-double-down"></i>MEMBER OF GOVERNING BODY (2020-2023)</a>
                                    </h5>
                                    <br>
                                </div>
                                <div id="2020-2023" class="acod-body collapse">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="section-content text-white">
                                                <ul class="list-circle red" style="font-size:20px;">
                                                    <li>Rev. Lallienvel Pakhuongte, <br><small>Chairman</small></li>
                                                    <li>Shri. Sanggra A. Sangma, <br><small>Vice-Chairman</small></li>
                                                    <li>Rev. Dr. Ramengliana, <br><small>Secretary NEICC</small></li>
                                                    <li>Rev. Dr. Brightstar J. Syiemlieh, <br><small>Treasurer NEICC</small>
                                                    </li>
                                                    <li>Rev. M. ShyIla, <br><small>Member/KJP Synod Mihngi, Jowai</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-content text-white">
                                                <ul class="list-circle red" style="font-size:20px;">
                                                    <li>Rev. Hemkhomang Haokip, <br><small>Member/Evangelical Churches
                                                            Association</small></li>
                                                    <li>Rev. Stephen Chinzathang, <br><small>Member/Zou Presbyterian Synod,
                                                            Manipur</small></li>
                                                    <li>Rev. Dr. Mar Atsongchanger, <br><small>Member/Nagaland Baptist
                                                            Church
                                                            Council</small></li>
                                                    <li>Prof. Uma Shankar, <br><small>NEHU Nominee Member</small></li>
                                                    <li>Prof. P. K. Patra, <br><small>NEHU Nominee Member</small></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-content text-white">
                                                <ul class="list-circle red" style="font-size:20px;">
                                                    <li>Shri. Midnight Born Kharlukhi, <br><small>Donor
                                                            representative</small>
                                                    </li>
                                                    <li>Dr.R.M.Manih, <br><small>Principal/Secretary GB</small></li>
                                                    <li>Dr. Sunil Pio,<br><small>Vice Principal</small></li>
                                                    <li>Dr. J.P Marak, <br><small>Staff Representative/Member</small></li>
                                                    <li>DHTE Govt. of Meghalaya, <br><small>One Nominee/Member</small></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--row end 2020-2023-->
                                </div>
                            </div><!--2022-24 ends-->
                        </div>
                    </div>
                    <!-- About Content ==== -->
                    <div class="section-area content-inner bg-gray section-sp1" id="rti">
                        <div class="container">
                            <div class="heading-bx left">
                                <h3 class="m-b10 title-head text-black"><span>Right To Information(RTI)</span></h3>
                            </div>
                            <div class="section-content text-black">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>FIRST APPELLATE AUTHORITY (FAA)</h5>
                                        <div class="section-content text-black">
                                            <ul class="list-star red" style="font-size:20px;">
                                                <li>Dr. R. M. Manih, Principal, <br>Union Christian College</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>PUBLIC INFORMATION OFFICER (PIO)</h5>
                                        <div class="section-content text-black">
                                            <ul class="list-star red" style="font-size:20px;">
                                                <li>Dr. J.P Marak, Associate Professor/IQAC Coordinator, <br>Union Christian
                                                    College.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>ASSISTANT PUBLIC INFORMATION OFFICER (APIO)</h5>
                                        <div class="section-content text-black">
                                            <ul class="list-star red" style="font-size:20px;">
                                                <li>--</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-circle red" style="font-size:20px;">
                                    <li><a href="download/RTI-Act.pdf">RTI-Act</a></li>
                                    <li><a href="download/RTI-Rules-min.pdf">RTI-Rules</a></li>
                                    <li><a
                                            href="download/Voluntary&#32;Disclosure&#32;of&#32;Information&#32;under&#32;the&#32;RTI&#32;Act,&#32;2005-min.pdf">Voluntary
                                            Disclosure of Information under the RTI Act, 2005</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- About Content END ==== -->
                </div>
                <!-- Page Content Box END ==== -->
            </div>


            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script>
                $(document).ready(function () {

                    var showChar = 500;

                    $(".more").each(function () {

                        var content = $(this).html();

                        if (content.length > showChar) {

                            var visible = content.substr(0, showChar);
                            var hidden = content.substr(showChar);

                            $(this).html(
                                visible +
                                '<span class="moreellipses">...</span>' +
                                '<span class="morecontent" style="display:none;">' +
                                hidden +
                                '</span><br>' +
                                '<a href="#" class="morelink">Read More</a>'
                            );
                        }

                    });

                    $(document).on("click", ".morelink", function (e) {

                        e.preventDefault();

                        var hidden = $(this).siblings(".morecontent");
                        var dots = $(this).siblings(".moreellipses");

                        hidden.toggle();
                        dots.toggle();

                        if ($(this).text() === "Read More") {
                            $(this).text("Close Content");
                        } else {
                            $(this).text("Read More");
                        }

                    });

                });
            </script>
@endsection