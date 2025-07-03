@extends('default')
 @section('title','ramadan-api-documentation')
 
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
        data-wow-delay="300ms"
    ></div>
    <!-- /.page-header__shape3 -->
    <div class="container">
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Services</span></li>
        </ul>
        <!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Services</h2>
        <!-- /.page-title -->
    </div>
    <!-- /.container -->
</section>
<!-- /.page-header -->
<!-- Service Start -->
<section
    class="service-two service-two-padding"
    style="background-image: url(assets/images/shapes/service-bg-4.jpg)"
>
    <div class="container">
        <div
            class="nisoz-owl__dots nisoz-owl__carousel owl-with-shadow owl-theme owl-carousel"
            data-owl-options='{
            "items": 4,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "nav":false,
            "dots":true,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "600":{
                    "items": 2
                },
                "768":{
                    "items": 3
                },
                "992":{
                    "items": 4
                }
            }
            }'
        >
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-website-design"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="website-designing.html"
                                >Website Designing</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-website-development"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="website-development.html"
                                >Website Development</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-mobile-application"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="mobile-application.html"
                                >Mobile Application</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-digital-marketing"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="digital-marketing.html"
                                >Digital Marketing</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-website-design"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="website-designing.html"
                                >Website Designing</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-website-development"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="website-development.html"
                                >Website Development</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-mobile-application"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="mobile-application.html"
                                >Mobile Application</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-one__item">
                    <div class="service-one__item__wrapper">
                        <div
                            class="service-one__item__hover"
                            style="
                                background-image: url(assets/images/shapes/service-1-hover-shape.png);
                            "
                        ></div>
                        <div class="service-one__item__number">Service</div>
                        <!-- /.service-number -->
                        <div class="clearfix"></div>
                        <div class="service-one__item__icon">
                            <span class="icon-digital-marketing"></span>
                        </div>
                        <!-- /.service-icon -->
                        <h3 class="service-one__item__title">
                            <a href="digital-marketing.html"
                                >Digital Marketing</a
                            >
                        </h3>
                        <!-- /.service-title -->
                        <p class="service-one__item__text">
                            Sed quia magni doles eos qui ration volupta tem
                            sequi.
                        </p>
                        <!-- /.service-content -->
                    </div>
                </div>
                <!-- /.service-card-one -->
            </div>
        </div>
    </div>
</section>

@endsection
