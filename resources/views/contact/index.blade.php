@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/breadcrumb/breadcrumb-1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content text-center clearfix">
                        <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s"
                            data-wow-duration="1500ms">
                            <ul class="clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-form-area">
        <div class="container">
            <div class="title text-center">
                <h2>Get in Touch</h2>
                <p>
                    Alternatively, you may contact us by filling up the contact form. Our team will response you shortly.
                </p>
            </div>
            <div class="row">
                <div class="col-xl-7">
                    <div class="contact-form">
                        <form autocomplete="off" method="POST" action="{{ route('contact.store') }}" id="create-form">
                            @csrf

                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                @error('email')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message" class="form-control" cols="30" rows="10" data-error="Write your message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="button-box">
                                <button class="btn-one" type="submit">
                                    <span class="txt">Send Massage</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-5"
                    style="background-image: url({{ asset('assets/images/pattern/getin-touch-bg.jpg') }})">
                    <div class="getin-touch-content">
                        <div class="sec-title">
                            <h2>
                                <span>Contact Information</span>
                            </h2>
                        </div>
                        <div class="inner-content">
                            <ul class="contact-info">
                                <li class="single">
                                    <div class="icon">
                                        <span class="flaticon-worldwide thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Address</h4>
                                        <p>
                                            အမှတ်- ၉၉ (မြေညီ)၊ ၉၃လမ်း၊ ကန်တော်ကလေး မင်္ဂလာတောင်ညွန့်မြို့နယ်၊ ရန်ကုန်မြို့၊
                                        </p>
                                    </div>
                                </li>
                                <li class="single">
                                    <div class="icon">
                                        <span class="flaticon-mail-1 thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Send Your Mail At</h4>
                                        <p>
                                            <a href="mailto:info@alphaworldlink.com">
                                                info@alphaworldlink.com
                                            </a>
                                        </p>
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
                                <li class="single">
                                    <div class="icon">
                                        <span class="flaticon-countdown thm-clr"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Working Hours</h4>
                                        <p>Mon-Fri:9.30am To 5.00pm</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-media-box">
                                <h3>Social Media</h3>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 py-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.7829734893744!2d96.16417761498363!3d16.787469724247483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec91a99f9e9f%3A0x82f321a7b884926b!2sAlpha%20World%20Link%20Co.%2CLtd.!5e0!3m2!1sen!2smm!4v1662212643985!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
