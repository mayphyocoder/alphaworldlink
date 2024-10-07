<!--Start footer area-->
<footer class="footer-area">
    <div class="layer-outer" style="background-image: url({{ asset('assets/images/pattern/footer-bg.png') }})"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="subscribe-content-box">
                    <div class="subscribe-title">
                        <h2>Keep in Touch</h2>
                        <p>If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                            response all your queries. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget pdtop martop10">
                        <div class="title">
                            <h3>Contact</h3>
                        </div>
                        <div class="footer-contact-info">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-worldwide thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>ADDRESS</h4>
                                        <p>အမှတ်- ၉၉ (မြေညီ)၊ ၉၃လမ်း၊ ကန်တော်ကလေး မင်္ဂလာတောင်ညွန့်မြို့နယ်၊
                                            ရန်ကုန်မြို့၊</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-mail-1 thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Send Your Mail At</h4>
                                        <p><a href="mailto:info@alphaworldlink.com">info@alphaworldlink.com</a></p>
                                    </div>
                                </li>

                                <li class="single">
                                    <div class="icon">
                                        <span class="flaticon-phone thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Phone</h4>
                                        <p>
                                            <a href="tel:09 765 176 291">
                                                09 765 176 291,
                                            </a>
                                            <a href="tel:09 44780 8430">
                                                09 44780 8430
                                            </a>
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="flaticon-countdown thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Working Hours</h4>
                                        <p>Mon-Sat:9.00am To 5.00pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget martop10 marleftminus40 marbtm">
                        <div class="title">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="countries-links">
                            <li>
                                <a href="{{ route('about.index') }}">
                                    Company Profile
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('organization.index') }}">
                                    Our Organization
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team.index') }}">
                                    Our Team
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('partners.index') }}">
                                    Our Partners
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('director_message.index') }}"
                                    class="{{ request()->routeIs('about.index') ? 'current' : '' }}">
                                    MD's Message
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget martop10 marlef20">
                        <div class="title">
                            <h3>Manpower Services</h3>
                        </div>
                        <ul class="visa-type-links">
                            @foreach ($countries as $countryie)
                                <li>
                                    <a href="{{ route('country.show', $countryie->id) }}">
                                        {{ $countryie->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget martop10 marlef20">
                        <div class="title">
                            <h3>Social Media</h3>
                        </div>
                        <div class="footer-social-links">

                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                nonce="PosYNXjc"></script>

                            <div class="fb-page"
                                data-href="https://www.facebook.com/Alpha-World-Link-Overseas-Employment-Agency-1904429756535572"
                                data-tabs="timeline" data-width="" data-height="200" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote
                                    cite="https://www.facebook.com/Alpha-World-Link-Overseas-Employment-Agency-1904429756535572"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/Alpha-World-Link-Overseas-Employment-Agency-1904429756535572"></a>
                                </blockquote>
                            </div>

                            <br><br>
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
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <button class="scroll-top style2 scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>
        <div class="container">
            <div class="outer-box">
                <div class="copyright-text">
                    <p>
                        Alpha World Link Co.,Ltd
                        &copy; {{ now()->year }} All Right Reserved
                    </p>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                        <li><a href="{{ route('cv.index') }}">CV</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End footer area-->
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.enllax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.polyglot.language.switcher.js') }}"></script>
<script src="{{ asset('assets/js/map-script.js') }}"></script>
<script src="{{ asset('assets/js/nouislider.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/timePicker.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
<!-- thm custom script -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>
@yield('script')
</body>

</html>
