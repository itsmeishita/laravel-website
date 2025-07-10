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
            <li><a href="/">Home</a></li>
            <li><span>RAMADAN-FORM</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">RAMADAN-FORM</h2><!-- /.page-title -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<!-- Contact Start -->
<section class="contact-one contact-page">
    <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="section-title text-center">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
            <h5 class="section-title__tagline">you can edit here</h5>
            <h2 class="section-title__title">Customize Template Form</h2>
        </div><!-- section-title -->
        <div class="contact-one__form-box  text-center">
            <form method="post" action="{{ route('contact.send') }}" class="contact-one__form contact-form-validated" id="contact-form">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-one__input-box">
                            <input type="file" placeholder="Your logo" id="fileInput" name="logo" accept="image/*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" name="company_name" placeholder="Company Name : eg. Chiku Web" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" name="slogan" placeholder="Slogan: eg. Fresh Solution, Always.">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-one__input-box">
                            <input type="text" name="website" placeholder="Website: eg. chikuweb.in">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-one__input-box">
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" name="number" placeholder="Contact Number" pattern="[6-9]\d{9}" title="Please enter a valid 10-digit Indian mobile." required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box text-message-box">
                            <input type="email" name="email" placeholder="E-mail Address" required>
                        </div>
                        <div class="contact-one__btn-box">
                            <button type="submit" class="nisoz-btn">
                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__text">Create Now</span>
                            </button>
                        </div>
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
@endsection