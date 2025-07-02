@extends('default')
@section('title','Services')

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
            <li><span>Services</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Services</h2><!-- /.page-title -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Service Start -->
<section class="service-two service-two-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="service-two__item">
                    <div class="service-two__thumb">
                        <img src="assets/images/service/service-1-1.jpg" alt="nisoz" />
                    </div>
                    <div class="service-two__content">
                        <div class="service-two__item__hover" style="background-image: url(assets/images/shapes/service-2-hover-shape.png);"></div>
                        <div class="service-two__item__icon">
                            <span class="icon-website-design"></span>
                        </div><!-- /.service-icon -->
                        <div class="service-two__item__number">Service</div><!-- /.service-number -->
                        <h3 class="service-two__item__title">
                            <a href="website-designing.html">Website Designing</a>
                        </h3><!-- /.service-title -->
                        <div class="service-two__item__border"></div>
                        <p class="service-two__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="service-two__item">
                    <div class="service-two__thumb">
                        <img src="assets/images/service/service-1-2.jpg" alt="nisoz" />
                    </div>
                    <div class="service-two__content">
                        <div class="service-two__item__hover" style="background-image: url(assets/images/shapes/service-2-hover-shape.png);"></div>
                        <div class="service-two__item__icon">
                            <span class="icon-website-development"></span>
                        </div><!-- /.service-icon -->
                        <div class="service-two__item__number">Service</div><!-- /.service-number -->
                        <h3 class="service-two__item__title">
                            <a href="website-development.html">Website Development</a>
                        </h3><!-- /.service-title -->
                        <div class="service-two__item__border"></div>
                        <p class="service-two__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="service-two__item">
                    <div class="service-two__thumb">
                        <img src="assets/images/service/service-1-3.jpg" alt="nisoz" />
                    </div>
                    <div class="service-two__content">
                        <div class="service-two__item__hover" style="background-image: url(assets/images/shapes/service-2-hover-shape.png);"></div>
                        <div class="service-two__item__icon">
                            <span class="icon-mobile-application"></span>
                        </div><!-- /.service-icon -->
                        <div class="service-two__item__number">Service</div><!-- /.service-number -->
                        <h3 class="service-two__item__title">
                            <a href="mobile-application.html">Mobile Application</a>
                        </h3><!-- /.service-title -->
                        <div class="service-two__item__border"></div>
                        <p class="service-two__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
        </div>
    </div>
</section>
<!-- Service Start -->
<div class="client-carousel @@extraClassName">
    <div class="container">
        <h5 class="client-carousel__tilte"><span>1K+ Brands Trust Us</span></h5><!-- section-title -->
        <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 0
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
            </div><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
<!-- Service Start -->
<section class="service-three">
    <div class="service-three__bg" style="background-image: url(assets/images/shapes/service-bg-3.jpg);"></div>
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
            <div class="col-md-7">
                <div class="section-title">
                    <div class="section-title__triangle">
                        <span class="section-title__triangle-left"></span>
                        <span class="section-title__triangle-right"></span>
                    </div>
                    <h5 class="section-title__tagline">our services</h5>
                    <h2 class="section-title__title">what we’re offering to<br> our customers</h2>
                </div><!-- section-title -->
            </div>
            <div class="col-md-5">
                <p class="service-three__text">
                    Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut
                    labore et simply free text dolore magna aliqua lonm andhn.
                </p>
            </div>
        </div>
        <div class="row service-three__cus-row">
            <div class="col-lg-2 wow fadeInUp" data-wow-delay="200ms">
                <div class="service-three__item text-center">
                    <div class="service-three__item__icon">
                        <span class="icon-website-design"></span>
                    </div><!-- /.service-icon -->
                    <h3 class="service-three__item__title">
                        <a href="website-designing.html">UI / UX<br> Creative Design</a>
                    </h3><!-- /.service-title -->
                    <a class="service-three__item__more" href="website-designing.html">Find More</a>
                </div><!-- /.service-card-three -->
            </div>
            <div class="col-lg-2 wow fadeInUp" data-wow-delay="250ms">
                <div class="service-three__item text-center">
                    <div class="service-three__item__icon">
                        <span class="icon-website-development"></span>
                    </div><!-- /.service-icon -->
                    <h3 class="service-three__item__title">
                        <a href="website-development.html">Visual<br> Graphic Design</a>
                    </h3><!-- /.service-title -->
                    <a class="service-three__item__more" href="website-development.html">Find More</a>
                </div><!-- /.service-card-three -->
            </div>
            <div class="col-lg-2 wow fadeInUp" data-wow-delay="300ms">
                <div class="service-three__item text-center">
                    <div class="service-three__item__icon">
                        <span class="icon-digital-marketing"></span>
                    </div><!-- /.service-icon -->
                    <h3 class="service-three__item__title">
                        <a href="digital-marketing.html">Strategy<br> & Marketing</a>
                    </h3><!-- /.service-title -->
                    <a class="service-three__item__more" href="digital-marketing.html">Find More</a>
                </div><!-- /.service-card-three -->
            </div>
            <div class="col-lg-2 wow fadeInUp" data-wow-delay="400ms">
                <div class="service-three__item text-center">
                    <div class="service-three__item__icon">
                        <span class="icon-mobile-application"></span>
                    </div><!-- /.service-icon -->
                    <h3 class="service-three__item__title">
                        <a href="mobile-application.html">Content<br> Writting Skills</a>
                    </h3><!-- /.service-title -->
                    <a class="service-three__item__more" href="mobile-application.html">Find More</a>
                </div><!-- /.service-card-three -->
            </div>
            <div class="col-lg-2 wow fadeInUp" data-wow-delay="450ms">
                <div class="service-three__item text-center">
                    <div class="service-three__item__icon">
                        <span class="icon-monitor"></span>
                    </div><!-- /.service-icon -->
                    <h3 class="service-three__item__title">
                        <a href="website-designing.html">Web & App<br> Development</a>
                    </h3><!-- /.service-title -->
                    <a class="service-three__item__more" href="website-designing.html">Find More</a>
                </div><!-- /.service-card-three -->
            </div>
        </div>
    </div>
</section>
<!-- Service Start -->
<!-- Call To Action Start -->
<section class="cta-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="cta-one__bg jarallax-img" style="background-image: url(assets/images/backgrounds/cta-bg-1.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-8 wow fadeInLeft" data-wow-delay="200ms">
                <div class="section-title">
                    <h2 class="section-title__title">Grow With Community & Experience Endless Possibilities</h2>
                </div><!-- section-title -->
            </div>
            <div class="col-md-4 col-xl-4 text-end wow fadeInRight" data-wow-delay="300ms">
                <a href="contact.html" class="nisoz-btn">
                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                    <span class="nisoz-btn__text">Discover More</span>
                </a><!-- /.btn -->
            </div>
        </div>
        <div class="cta-one__text wow fadeInUp" data-wow-delay="400ms">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
            <p>Creative agency services built specifically for your business.</p>
        </div>
    </div>
</section>
<!-- Call To Action End -->
<!-- Feature Start -->
<section class="feature-one">
    <div class="container">
        <div class="feature-one__wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">We think differently</h3>
                        <p class="feature-one__item__text">Lorem Ipsum nibh vel aliquet. Aenean sollic tudin, lorem is simply free text.</p>
                    </div><!-- /.feature-box -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">High quality projects</h3>
                        <p class="feature-one__item__text">Lorem Ipsum nibh vel aliquet. Aenean sollic tudin, lorem is simply free text.</p>
                    </div><!-- /.feature-box -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">Expert team members</h3>
                        <p class="feature-one__item__text">Lorem Ipsum nibh vel aliquet. Aenean sollic tudin, lorem is simply free text.</p>
                    </div><!-- /.feature-box -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->
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
                    <h5 class="section-title__tagline">our services</h5>
                    <h2 class="section-title__title">what we offer</h2>
                </div><!-- section-title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div class="service-one__item__hover" style="background-image: url(assets/images/shapes/service-1-hover-shape.png);"></div>
                        <div class="service-one__item__number">Service</div><!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-website-design"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="website-designing.html">Website Designing</a>
                        </h3><!-- /.service-title -->
                        <p class="service-one__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
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
                        <p class="service-one__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                        <p class="service-one__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div class="service-one__item__hover" style="background-image: url(assets/images/shapes/service-1-hover-shape.png);"></div>
                        <div class="service-one__item__number">Service</div><!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-digital-marketing"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="digital-marketing.html">Digital Marketing</a>
                        </h3><!-- /.service-title -->
                        <p class="service-one__item__text">Sed quia magni doles eos qui ration volupta tem sequi.</p><!-- /.service-content -->
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