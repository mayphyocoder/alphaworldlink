<header class="main-header header-style-one">
    <div class="border-top" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"></div>
    <!--Start header-->
    <div class="header">
        <div class="container">
            <div class="outer-box clearfix">

                <div class="header-left clearfix pull-left">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="Alpha World Link Co.,Ltd"
                                title="Alpha World Link Co.,Ltd" style="width: 90px;">
                        </a>
                    </div>
                </div>

                <div class="header-right pull-right clearfix">
                    <div class="top">
                        <div class="header-contact-info">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-worldwide thm-clr"></span>
                                    </div>
                                    <div class="title">
                                        <h3>Office</h3>
                                        <p>Yangon, Myanmar</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-countdown thm-clr"></span>
                                    </div>
                                    <div class="title">
                                        <h3>Office Timeing</h3>
                                        <p>Mon - Fri: 09:00 - 5:00</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-email thm-clr"></span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tel:09 44780 8430">
                                                09 44780 8430
                                            </a>
                                        </h3>
                                        <p>
                                            <a href="mailto:info@alphaworldlink.com">
                                                info@alphaworldlink.com
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom clearfix">
                        <div class="left pull-left">
                            <ul class="header-menu">
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        About Us
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        Contact Us
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Submit CV
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('employer.index') }}">
                                        Employer Form
                                        <i class="fa fa-angle-double-right" aria-hidden="true">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right pull-right">
                            <div class="header-social-link">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/Alpha-World-Link-Overseas-Employment-Agency-1904429756535572"
                                            target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Header Right-->
            </div>
        </div>
    </div>
    <!--End header -->

    <!--Start Header Bottom-->
    <div class="header-bottom">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-bottom-left pull-left">

                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>

                                    <li class="dropdown {{ request()->routeIs('about.index') ? 'current' : '' }}">
                                        <a href="javascript:void(0)">
                                            About Us
                                        </a>

                                        <ul>

                                            <li>
                                                <a href="{{ route('about.index') }}" class="nav-link active">
                                                    Company Profile
                                                </a>
                                            </li>


                                            <li hidden>
                                                <a href="{{ route('statement.index') }}" class="nav-link active">
                                                    Vision & Mission
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('organization.index') }}" class="nav-link active">
                                                    Our Organization
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team.index') }}" class="nav-link active">
                                                    Our Team
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('partners.index') }}" class="nav-link active">
                                                    Our Partners
                                                </a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{ route('director_message.index') }}"
                                            class="{{ request()->routeIs('about.index') ? 'current' : '' }}">
                                            MD's Message
                                        </a>
                                    </li>

                                    <li class="dropdown {{ request()->routeIs('country.index') ? 'active' : '' }}">
                                        <a href="javascript:void(0)">
                                            Manpower Services
                                        </a>

                                        <ul>
                                            @foreach ($countries as $countryie)
                                                <li>
                                                    <a href="{{ route('country.show', $countryie->id) }}"
                                                        class="nav-link active">
                                                        {{ $countryie->country ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach

                                            <li hidden>
                                                <a href="{{ route('country.index') }}" class="nav-link active">
                                                    Countries We Serve
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('recruitment_services.index') }}"
                                                    class="nav-link active">
                                                    Our Recruitment Services
                                                </a>
                                            </li>

                                            <li hidden>
                                                <a href="{{ route('milestones.index') }}" class="nav-link active">
                                                    Milestones
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="dropdown {{ request()->routeIs('cv.index') ? 'active' : '' }}">
                                        <a href="javascript:void(0)">
                                            Application
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="{{ route('cv.index') }}">
                                                    Submit CV
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('employer.index') }}">
                                                    Employer Form
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="{{ request()->routeIs('news.index') ? 'active' : '' }}">
                                        <a href="{{ route('news.index') }}">
                                            Blog
                                        </a>
                                    </li>

                                    <li class="{{ request()->routeIs('activities.index') ? 'active' : '' }}">
                                        <a href="{{ route('activities.index') }}">
                                            Our Activities
                                        </a>
                                    </li>

                                    <li class="{{ request()->routeIs('contact.index') ? 'active' : '' }}">
                                        <a href="{{ route('contact.index') }}">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Bottom-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
            <span class="icon flaticon-multiply"></span>
        </div>
        <nav class="menu-box">
            <div class="menu-outer">
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://www.facebook.com/Alpha-World-Link-Overseas-Employment-Agency-1904429756535572" target="_blank"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
