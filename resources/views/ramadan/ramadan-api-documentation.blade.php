@extends('default')
@section('title','Ramadan API Documentation')

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
            <li><span>tool</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">ramadan-api-documentation</h2><!-- /.page-title -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section>
    <div class="container">
        <h3 class="page-header__title mt-5" style="color: #333; text-align: center;">Ramadan API Documentation</h3>
    </div>
    <!-- Accordian Start -->
    <section class="accrodion-one faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow fadeInRight" data-wow-delay="300ms">
                    <div class="accrodion-one__wrapper nisoz-accrodion" data-grp-name="nisoz-accrodion">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Get All Ramadan Data</h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="card-body">
                                        <p><strong>API URL</strong> <code>https://chikuweb.in/api/ramadan/all</code></p>
                                        <p><strong>Method:</strong> GET</p>
                                        <p><strong>Example Response:</strong></p>
                                        <pre>{"ramadan_2025": [{"date": "2025-03-02", "sehri": "05:06 AM", "iftar": "06:02 PM"}, ...]}</pre>
                                        <p><strong>Explanation:</strong> This endpoint returns the Sehri and Iftar times for all days of Ramadan for the specified year.</p>
                                    </div>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Get Today's Sehri & Iftar Time</h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="card-body">
                                        <p><strong>API URL</strong> <code>https://chikuweb.in/api/ramadan/today</code></p>
                                        <p><strong>Method:</strong> GET</p>
                                        <p><strong>Example Response:</strong></p>
                                        <pre>{"date": "2025-03-02", "sehri": "05:06 AM", "iftar": "06:02 PM", "nextDay": false}</pre>
                                        <p><strong>Explanation:</strong> Returns Sehri and Iftar times for the current date. The <code>nextDay</code> flag indicates whether the timings for the next day should be considered (if today's Sehri and Iftar have already passed).</p>
                                    </div>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Get Sehri & Iftar by Date</h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="card-body">
                                        <p><strong>API URL</strong> <code>https://chikuweb.in/api/ramadan/date/{YYYY-MM-DD}</code></p>
                                        <p><strong>Method:</strong> GET</p>
                                        <p><strong>Example Response:</strong></p>
                                        <pre>{"date": "2025-03-10", "sehri": "04:59 AM", "iftar": "06:06 PM"}</pre>
                                        <p><strong>Explanation:</strong> Fetches Sehri and Iftar timings for a specific date.</p>
                                    </div>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Get Next Day's Sehri & Iftar Time</h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="card-body">
                                        <p><strong>API URL</strong> <code>https://chikuweb.in/api/ramadan/next</code></p>
                                        <p><strong>Method:</strong> GET</p>
                                        <p><strong>Example Response:</strong></p>
                                        <pre>{"date": "2025-03-03", "sehri": "05:05 AM", "iftar": "06:03 PM"}</pre>
                                        <p><strong>Explanation:</strong> Returns Sehri and Iftar times for the next day.</p>
                                    </div>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Get Previous Day's Sehri & Iftar Time</h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="card-body">
                                        <p><strong>API URL</strong> <code>https://chikuweb.in/api/ramadan/previous</code></p>
                                        <p><strong>Method:</strong> GET</p>
                                        <p><strong>Example Response:</strong></p>
                                        <pre>{"date": "2025-03-01", "sehri": "05:07 AM", "iftar": "06:01 PM"}</pre>
                                        <p><strong>Explanation:</strong> Returns Sehri and Iftar times for the previous day.</p>
                                    </div>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection