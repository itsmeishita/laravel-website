@extends('default')
@section('title','Contact Us')

@section('style')
<link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
@endsection

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg"></div><!-- /.page-header__bg -->
    <div class="page-header__shape1"></div><!-- /.page-header__shape1 -->
    <div class="page-header__shape2"></div><!-- /.page-header__shape1 -->
    <div class="page-header__shape3 wow slideInRight" data-wow-delay="300ms"></div><!-- /.page-header__shape3 -->
    <div class="container">
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Contact</h2><!-- /.page-title -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!--Google Map Start-->
<section class="google-map google-map-two">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3210.5207862656416!2d82.58781030794823!3d25.415259434427515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398fdf508f0d0b77%3A0x4350490890b4b83!2sChiku%20Web!5e0!3m2!1sen!2sin!4v1731558356480!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
    </div>
</section>
<!--Google Map End-->
<!--Contact Info Start-->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="200ms">
                <div class="faq-page__help">
                    <div class="faq-page__help__icon"><span class="icon-phone-call-1"></span></div>
                    <h3 class="faq-page__help__title">Do you still<br> have questions?</h3>
                    <p class="faq-page__help__text">Call Anytime<a href="tel:+9288009850">+92 (8800) - 9850</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__box">
                    <div class="contact__box__icon"><span class="icon-mailbox"></span></div>
                    <h5 class="contact__box__title">Write email</h5>
                    <p class="contact__box__text"><a href="mailto:info@chikuweb.com">info@chikuweb.com</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__box contact__box-two">
                    <div class="contact__box__icon"><span class="icon-maps-and-flags"></span></div>
                    <h5 class="contact__box__title">Visit office</h5>
                    <p class="contact__box__text"> Nai Bazar, Bhadohi 221409, UP, India</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Info End-->
<!-- Contact Start -->
<section class="contact-one contact-page">
    <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="section-title text-center">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
            <h5 class="section-title__tagline">contact with us</h5>
            <h2 class="section-title__title">feel free to get in<br> touch with me</h2>
        </div><!-- section-title -->
        <div class="contact-one__form-box  text-center">
            <form action="https://bracketweb.com/nisoz-html/assets/inc/sendemail.php" class="contact-one__form contact-form-validated" novalidate="novalidate">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Your name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="email" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <select class="selectpicker" aria-label="Default select example">
                                <option selected>Select service</option>
                                <option value="1">Select service 01</option>
                                <option value="2">Select service 02</option>
                                <option value="3">Select service 03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-one__input-box text-message-box">
                            <textarea name="message" placeholder="Write Comment"></textarea>
                        </div>
                        <div class="contact-one__btn-box">
                            <button type="submit" class="nisoz-btn">
                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__text">Send a message</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="{{ asset('assets/vendors/countdown/bootstrap-select.min.js') }}"></script>
@endsection