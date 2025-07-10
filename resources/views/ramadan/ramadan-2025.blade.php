@extends('default')
@section('title','Ramadan 2026')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="page-header__shape1"></div>
    <!-- /.page-header__shape1 -->
    <div class="page-header__shape2"></div>
    <!-- /.page-header__shape1 -->
    <div
        class="page-header__shape3 wow slideInRight"
        data-wow-delay="300ms"></div>
    <!-- /.page-header__shape3 -->
    <div class="container">
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>Ramadan 2025</span></li>
        </ul>
        <!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Ramadan 2025</h2>
        <!-- /.page-title -->
    </div>
    <!-- /.container -->
</section>
<!-- /.page-header -->
<!-- Service Start -->
    <section class="service-one service-one-padding" style="background-image: url(assets/images/shapes/service-bg-4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="section-title__triangle">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">Time Tables</h5>
                        <h2 class="section-title__title">Select Template And Download</h2>
                    </div><!-- section-title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-one__item">
                        <div class="service-one__item__wrapper p-0" style="height:350px !important;">
                            <img src="{{ asset('assets/images/ramadan/ramadan1thumb.jpg') }}" class="h-100 w-100"/>
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-one__item">
                        <div class="service-one__item__wrapper">
                            <div class="service-one__item__hover" style="background-image: url(assets/images/shapes/service-1-hover-shape.png);"></div>
                            <div class="service-one__item__number">Service</div><!-- /.service-number -->
                            <div class="clearfix"></div>
                            <div class="service-one__item__icon">
                                <span class="icon-website-development"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">
                                <a href="website-development.html">Website Development</a>
                            </h3><!-- /.service-title -->
                            <p class="service-one__item__text"></p><!-- /.service-content -->
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-one__item">
                        <div class="service-one__item__wrapper">
                            <div class="service-one__item__hover" style="background-image: url(assets/images/shapes/service-1-hover-shape.png);"></div>
                            <div class="service-one__item__number">Service</div><!-- /.service-number -->
                            <div class="clearfix"></div>
                            <div class="service-one__item__icon">
                                <span class="icon-mobile-application"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">
                                <a href="mobile-application.html">Mobile Application</a>
                            </h3><!-- /.service-title -->
                            <p class="service-one__item__text"></p><!-- /.service-content -->
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="500ms">
                <h5 class="service-one__text">
                    Digital Agency services built specifically for your business.
                    <a href="services.html" class="nisoz-btn">
                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                        <span class="nisoz-btn__text">Find Your Solution</span>
                    </a><!-- /.btn -->
                </h5>
            </div>
        </div>
    </section>

@endsection