@extends('default')
@section('title','Home')
@section('content')
<div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="main-slider__one nisoz-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"smartSpeed": 1000, 
        "autoplay": true, 
        "autoplayTimeout": 6000, 
		"autoplayHoverPause": true,
		"nav": false,
		"dots": true,
		"margin": 0
	    }'>
                <div class="item"><!-- slider item start -->
                    <div class="main-slider__item">
                        <div class="main-slider__shape-1">
                            <img src="{{ asset('assets/images/shapes/slider-1-bg-1.png') }}" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider__shape-2">
                            <img src="{{ asset('assets/images/shapes/slider-1-shape-1.png') }}" alt="nisoz">
                        </div><!-- shape-two -->
                        <div class="main-slider__shape-3">
                            <img src="{{ asset('assets/images/backgrounds/slier-1-bg-1.jpg') }}" alt="nisoz">
                        </div><!-- shape-three -->
                        <div class="main-slider__shape-4">
                            <img src="{{ asset('assets/images/shapes/slider-1-shape-2.png') }}" alt="nisoz">
                        </div><!-- shape-four -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Creative <br>Services For <br>Your Business</h2><!-- slider-title -->
                                        <p class="main-slider__text">We are delivering the best services to our customers.</p><!-- slider-text -->
                                        <div class="main-slider__btn">
                                            <a href="about.html" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Discover More</span>
                                            </a><!-- /.btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->
                <div class="item"><!-- slider item start -->
                    <div class="main-slider__item">
                        <div class="main-slider__shape-1">
                            <img src="{{ asset('assets/images/shapes/slider-1-bg-1.png') }}" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider__shape-2">
                            <img src="{{ asset('assets/images/shapes/slider-1-shape-1.png') }}" alt="nisoz">
                        </div><!-- shape-two -->
                        <div class="main-slider__shape-3">
                            <img src="{{ asset('assets/images/backgrounds/slier-1-bg-2.jpg') }}" alt="nisoz">
                        </div><!-- shape-three -->
                        <div class="main-slider__shape-4">
                            <img src="{{ asset('assets/images/shapes/slider-1-shape-2.png') }}" alt="nisoz">
                        </div><!-- shape-four -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Creative <br>Services For <br>Your Business</h2><!-- slider-title -->
                                        <p class="main-slider__text">We are delivering the best services to our customers.</p><!-- slider-text -->
                                        <div class="main-slider__btn">
                                            <a href="about.html" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Discover More</span>
                                            </a><!-- /.btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->
                <div class="item"><!-- slider item start -->
                    <div class="main-slider__item">
                        <div class="main-slider__shape-1">
                            <img src="{{ asset('assets/images/shapes/slider-1-bg-1.png') }}" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider__shape-2">
                            <img src="{{ asset('assets/images/shapes/slider-1-shape-1.png') }}" alt="nisoz">
                        </div><!-- shape-two -->
                        <div class="main-slider__shape-3">
                            <img src="{{ asset('assets/images/backgrounds/slier-1-bg-3.jpg') }}" alt="nisoz">
                        </div><!-- shape-three -->
                        <div class="main-slider__shape-4">
                            <img src="{{ asset('assets/images/shapes/slider-1-shape-2.png') }}" alt="nisoz">
                        </div><!-- shape-four -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Creative <br>Services For <br>Your Business</h2><!-- slider-title -->
                                        <p class="main-slider__text">We are delivering the best services to our customers.</p><!-- slider-text -->
                                        <div class="main-slider__btn">
                                            <a href="about.html" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Discover More</span>
                                            </a><!-- /.btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->
            </div>
        </section>
        <!--Main Slider End-->
        <!-- About Start -->
        <section class="about-one" style="background-image: url(assets/images/shapes/about-1-bg-1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__thumb"><!-- about thumb start -->
                            <div class="about-one__thumb__one wow fadeInLeft" data-wow-delay="100ms">
                                <img src="{{ asset('assets/images/resources/about-1-1.jpg') }}" alt="nisoz">
                            </div>
                            <div class="about-one__thumb__two nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 10, "speed": 700, "scale": 1 }'>
                                <img src="{{ asset('assets/images/resources/about-1-2.jpg') }}" alt="nisoz">
                            </div>
                            <div class="about-one__fact-wrapper wow fadeInUp" data-wow-delay="200ms">
                                <div class="about-one__fact">
                                    <div class="about-one__fact__icon"><span class="icon-expertise"></span></div><!-- /.fact-one__icon -->
                                    <div class="about-one__fact__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="30" data-speed="1500"></span>
                                        </span>+
                                    </div><!-- /.fact-one__count -->
                                    <h3 class="about-one__fact__title">Years Experience</h3><!-- /.fact-one__title -->
                                </div><!-- /.fact-item -->
                                <div class="about-one__fact">
                                    <div class="about-one__fact__icon"><span class="icon-development"></span></div><!-- /.fact-one__icon -->
                                    <div class="about-one__fact__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="28" data-speed="1500"></span>
                                        </span>+
                                    </div><!-- /.fact-one__count -->
                                    <h3 class="about-one__fact__title">experienced team</h3><!-- /.fact-one__title -->
                                </div><!-- /.fact-item -->
                            </div>
                        </div><!-- about thumb end -->
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__content"><!-- about content start-->
                            <div class="section-title">
                                <div class="section-title__triangle">
                                    <span class="section-title__triangle-left"></span>
                                    <span class="section-title__triangle-right"></span>
                                </div>
                                <h5 class="section-title__tagline">about agency</h5>
                                <h2 class="section-title__title">we’re solutions to your creative business</h2>
                            </div><!-- section-title -->
                            <p class="about-one__content__text">
                                There are many variations of simply free text passages of available but the majority have suffered alteration in some form,
                                by injected hum randomised words which don't slightly.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-one__box">
                                        <div class="about-one__box__top">
                                            <h4 class="about-one__box__title">get free consultation</h4>
                                            <div class="about-one__box__icon"><span class="icon-customer-support"></span></div>
                                        </div>
                                        <p class="about-one__box__text">Good knowledge becuase done something many times.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-one__box">
                                        <div class="about-one__box__top">
                                            <h4 class="about-one__box__title">High quality projects</h4>
                                            <div class="about-one__box__icon"><span class="icon-good-quality"></span></div>
                                        </div>
                                        <p class="about-one__box__text">Good knowledge becuase done something many times.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__progress">
                                <h4 class="about-one__progress--title">Website Designing</h4>
                                <div class="about-one__progress--bar">
                                    <div class="about-one__progress--inner count-bar" data-percent="77%">
                                        <div class="about-one__progress--number count-text">77%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                            <a href="about.html" class="nisoz-btn">
                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__text">Discover More</span>
                            </a><!-- /.btn -->
                        </div><!-- about content end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->
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
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <!-- Service Start -->
        <section class="service-one" style="background-image: url(assets/images/shapes/service-bg-1.jpg);">
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
        <!-- Service Start -->
        <!-- Call To Action Start -->
        <section class="cta-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
            <div class="cta-one__bg jarallax-img" style='background-image: url("{{ asset('assets/images/backgrounds/cta-bg-1.jpg') }}")' ></div>
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
        <!-- Portfolio Start -->
        <section class="portfolio-one">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">our completed works</h5>
                            <h2 class="section-title__title">Recent clients projects</h2>
                        </div><!-- section-title -->
                    </div>
                </div>
                <div class="portfolio-one__slider nisoz-owl__carousel owl-carousel" data-owl-options='{
            "loop": true,
            "items": 3,
            "smartSpeed": 1000, 
            "autoplay": true, 
            "autoplayTimeout": 6000, 
            "center": true,
            "nav": false,
            "dots": false,
            "margin": 30,
            "responsive":{
                "0":{
                    "items": 1,
                    "margin": 0
                },
                "768":{
                    "items": 1.5
                },
                "992":{
                    "items": 2
                },
                "1300":{
                    "items": 3
                }
            }
            }'>
                    <div class="item"><!-- slider-item-start -->
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="{{ asset('assets/images/portfolio/portfolio-1-1.jpg') }}" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website business development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div><!-- slider-item-end -->
                    <div class="item"><!-- slider-item-start -->
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="{{ asset('assets/images/portfolio/portfolio-1-2.jpg') }}" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website business development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div><!-- slider-item-end -->
                    <div class="item"><!-- slider-item-start -->
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="{{ asset('assets/images/portfolio/portfolio-1-3.jpg') }}" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website business development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div><!-- slider-item-end -->
                </div><!-- slider-end -->
            </div>
        </section>
        <!-- Portfolio End -->
        <!--Testimonial Start-->
        <section class="testimonial-one">
            <div class="container">
                <div class="testimonial-one__carousel nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 1,
            "margin": 0,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "nav":true,
            "dots":false,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"]
            }'>
                    <!-- Testimonial Item -->
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__author">
                                <img src="{{ asset('assets/images/resources/testimonial-1-1.jpg') }}" alt="nisoz">
                                <div class="testimonial-one__icon"><span class="icon-quote"></span></div><!-- testimonial-quote-icon -->
                                <div class="testimonial-one__border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="290" viewBox="0 0 21 290">
                                        <path class="cls-1" d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z" transform="translate(-741 -4387)" />
                                    </svg>
                                </div><!-- svg-border -->
                            </div><!-- testimonial-author-thumb -->
                            <div class="testimonial-one__content">
                                <div class="testimonial-one__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div><!-- testimonial-ratings -->
                                <div class="testimonial-one__quote">
                                    This is due to their excellent service, competitive pricing and customer support. It’s through refresing to get such a personal touch.
                                    Duis aute irure dolor in reprehenderit esse simply free text available in the market.
                                </div><!-- testimonial-quote -->
                                <div class="testimonial-one__meta">
                                    <h5 class="testimonial-one__title">aleesha michale</h5>
                                    <span class="testimonial-one__designation">ceo & co founder</span>
                                </div><!-- testimonial-meta -->
                            </div><!-- testimonial-content -->
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__author">
                                <img src="{{ asset('assets/images/resources/testimonial-1-2.jpg') }}" alt="nisoz">
                                <div class="testimonial-one__icon"><span class="icon-quote"></span></div><!-- testimonial-quote-icon -->
                                <div class="testimonial-one__border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="290" viewBox="0 0 21 290">
                                        <path class="cls-1" d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z" transform="translate(-741 -4387)" />
                                    </svg>
                                </div><!-- svg-border -->
                            </div><!-- testimonial-author-thumb -->
                            <div class="testimonial-one__content">
                                <div class="testimonial-one__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div><!-- testimonial-ratings -->
                                <div class="testimonial-one__quote">
                                    This is due to their excellent service, competitive pricing and customer support. It’s through refresing to get such a personal touch.
                                    Duis aute irure dolor in reprehenderit esse simply free text available in the market.
                                </div><!-- testimonial-quote -->
                                <div class="testimonial-one__meta">
                                    <h5 class="testimonial-one__title">aleesha michale</h5>
                                    <span class="testimonial-one__designation">ceo & co founder</span>
                                </div><!-- testimonial-meta -->
                            </div><!-- testimonial-content -->
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__author">
                                <img src="{{ asset('assets/images/resources/testimonial-1-3.jpg') }}" alt="nisoz">
                                <div class="testimonial-one__icon"><span class="icon-quote"></span></div><!-- testimonial-quote-icon -->
                                <div class="testimonial-one__border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="290" viewBox="0 0 21 290">
                                        <path class="cls-1" d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z" transform="translate(-741 -4387)" />
                                    </svg>
                                </div><!-- svg-border -->
                            </div><!-- testimonial-author-thumb -->
                            <div class="testimonial-one__content">
                                <div class="testimonial-one__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div><!-- testimonial-ratings -->
                                <div class="testimonial-one__quote">
                                    This is due to their excellent service, competitive pricing and customer support. It’s through refresing to get such a personal touch.
                                    Duis aute irure dolor in reprehenderit esse simply free text available in the market.
                                </div><!-- testimonial-quote -->
                                <div class="testimonial-one__meta">
                                    <h5 class="testimonial-one__title">aleesha michale</h5>
                                    <span class="testimonial-one__designation">ceo & co founder</span>
                                </div><!-- testimonial-meta -->
                            </div><!-- testimonial-content -->
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                </div>
            </div>
        </section>
        <!--Testimonial End-->
        <!-- Choose Start -->
        <section class="choose-one">
            <div class="choose-one__bg wow slideInLeft" data-wow-delay="200ms">
                <div class="choose-one__bg__one"></div>
                <div class="choose-one__bg__two"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="choose-one__content wow fadeInUp" data-wow-delay="500ms">
                            <div class="section-title">
                                <div class="section-title__triangle">
                                    <span class="section-title__triangle-left"></span>
                                    <span class="section-title__triangle-right"></span>
                                </div>
                                <h5 class="section-title__tagline">agency benefits</h5>
                                <h2 class="section-title__title">why choose agency?</h2>
                            </div><!-- section-title -->
                            <p class="choose-one__content__text">
                                We can help with both your work and personal life tasks, what’s most important. simply are many variations of passages.
                            </p>
                            <ul class="choose-one__content__list">
                                <li><span class="icon-right-arrow-1"></span>Tincidunt elit magnis nulla facilisis sags sapien nunc amet ultrices.</li>
                                <li><span class="icon-right-arrow-1"></span>Tincidunt elit magnis nulla facilisis sags sapien nunc amet ultrices.</li>
                            </ul>
                        </div>
                        <div class="choose-one__fact">
                            <div class="choose-one__fact__icon"><span class="icon-project-management"></span></div><!-- /.choose-fact__icon -->
                            <div class="choose-one__fact__count">
                                <span class="count-box">
                                    <span class="count-text" data-stop="3800" data-speed="1500"></span>
                                </span>+
                            </div><!-- /.choose-fact__count -->
                            <h3 class="choose-one__fact__title">Projects has been<br> completed</h3><!-- /.choose-fact__title -->
                        </div><!-- /.choose-fact -->
                    </div>
                    <div class="col-lg-7">
                        <div class="nisoz-stretch-element-inside-column">
                            <div class="nisoz-stretch__image wow slideInRight" data-wow-delay="400ms">
                                <img src="{{ asset('assets/images/resources/choose-1.jpg') }}" alt="ogency">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose End -->
        <!-- Call To Action Start -->
        <section class="fact-one">
            <div class="fact-one__bg" style="background-image: url(assets/images/shapes/funfact-bg-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="100ms">
                        <div class="fact-one__item text-center">
                            <div class="fact-one__item__icon"><span class="icon-campaign"></span></div><!-- /.fact-one__icon -->
                            <div class="fact-one__item__count">
                                <span class="count-box">
                                    <span class="count-text" data-stop="886" data-speed="1500"></span>
                                </span>
                            </div><!-- /.fact-one__count -->
                            <h3 class="fact-one__item__title">Projects Completed</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="200ms">
                        <div class="fact-one__item text-center">
                            <div class="fact-one__item__icon"><span class="icon-recommend"></span></div><!-- /.fact-one__icon -->
                            <div class="fact-one__item__count">
                                <span class="count-box">
                                    <span class="count-text" data-stop="601" data-speed="1500"></span>
                                </span>
                            </div><!-- /.fact-one__count -->
                            <h3 class="fact-one__item__title">Satisfied Customers</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="300ms">
                        <div class="fact-one__item text-center">
                            <div class="fact-one__item__icon"><span class="icon-increment"></span></div><!-- /.fact-one__icon -->
                            <div class="fact-one__item__count">
                                <span class="count-box">
                                    <span class="count-text" data-stop="960" data-speed="1500"></span>
                                </span>
                            </div><!-- /.fact-one__count -->
                            <h3 class="fact-one__item__title">Repeat Customers</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="400ms">
                        <div class="fact-one__item text-center">
                            <div class="fact-one__item__icon"><span class="icon-consulting"></span></div><!-- /.fact-one__icon -->
                            <div class="fact-one__item__count">
                                <span class="count-box">
                                    <span class="count-text" data-stop="240" data-speed="1500"></span>
                                </span>
                            </div><!-- /.fact-one__count -->
                            <h3 class="fact-one__item__title">Extra Team</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                </div>
            </div>
        </section>
        <!-- Call To Action End -->
        <!-- Blog Start -->
        <section class="blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="section-title text-center">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">From the Blog</h5>
                            <h2 class="section-title__title">News & articles</h2>
                        </div><!-- section-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="Five ways that can develop your business">
                                <a href="blog-details-right.html"></a>
                                <div class="blog-one__date">
                                    <span>30</span>
                                    June, 2023
                                </div><!-- /.blog-date -->
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__meta__author">
                                        <div class="blog-one__meta__thumb"><img src="{{ asset('assets/images/blog/author-1.png') }}" alt="nisoz" /></div>
                                        by<br><a href="blog-list-right.html">Layerdrops</a>
                                    </div>
                                    <span class="fas fa-comments"></span>2 Comments
                                </div><!-- /.blog-meta -->
                                <h3 class="blog-one__title">
                                    <a href="blog-details-right.html">Five ways that can develop your business</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-details-right.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="Get a few solutions to hire a best candidate">
                                <a href="blog-details-right.html"></a>
                                <div class="blog-one__date">
                                    <span>30</span>
                                    June, 2023
                                </div><!-- /.blog-date -->
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__meta__author">
                                        <div class="blog-one__meta__thumb"><img src="{{ asset('assets/images/blog/author-1.png') }}" alt="nisoz" /></div>
                                        by<br><a href="blog-list-right.html">Layerdrops</a>
                                    </div>
                                    <span class="fas fa-comments"></span>2 Comments
                                </div><!-- /.blog-meta -->
                                <h3 class="blog-one__title">
                                    <a href="blog-details-right.html">Get a few solutions to hire a best candidate</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-details-right.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="Introducing the latest tech features for you">
                                <a href="blog-details-right.html"></a>
                                <div class="blog-one__date">
                                    <span>30</span>
                                    June, 2023
                                </div><!-- /.blog-date -->
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__meta__author">
                                        <div class="blog-one__meta__thumb"><img src="{{ asset('assets/images/blog/author-1.png') }}" alt="nisoz" /></div>
                                        by<br><a href="blog-list-right.html">Layerdrops</a>
                                    </div>
                                    <span class="fas fa-comments"></span>2 Comments
                                </div><!-- /.blog-meta -->
                                <h3 class="blog-one__title">
                                    <a href="blog-details-right.html">Introducing the latest tech features for you</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-details-right.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
        <!-- Call To Action Start -->
        <section class="cta-two">
            <div class="container">
                <div class="cta-two__info-top wow fadeInUp" data-wow-delay="200ms">
                    <div class="cta-two__bg" style="background-image: url(assets/images/shapes/cta-bg-2.png);"></div>
                    <div class="section-title">
                        <h2 class="section-title__title">Let’s start working together.<br> Get in touch with us!</h2>
                    </div><!-- section-title -->
                    <a href="contact.html" class="cta-two__icon"><span class="icon-long-arrow"></span></a>
                </div>
                <h5 class="cta-two__info-bottom wow fadeInDown" data-wow-delay="300ms">
                    or call us to get free quote: <a href="tel:+9236809850">+92 (3680) 00 - 6800</a>
                </h5>
            </div>
        </section>
        <!-- Call To Action End -->
        <!--Google Map Start-->
        <section class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3210.5207862656416!2d82.58781030794823!3d25.415259434427515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398fdf508f0d0b77%3A0x4350490890b4b83!2sChiku%20Web!5e0!3m2!1sen!2sin!4v1731558356480!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
        </section>
        <!--Google Map End-->

        

        <section class="copyright text-center">
            <div class="container wow fadeInUp" data-wow-delay="500ms">
                <p class="copyright__text">© Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> by <a href="index.html">Nisoz Template</a></p>
            </div><!-- /.container -->
        </section><!-- /.copyright -->
@endsection