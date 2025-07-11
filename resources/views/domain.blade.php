@extends('default')
@section('title','Domain Details')

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
            <li><span>Domain Details</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Domain Details</h2><!-- /.page-title -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!--Google Map Start-->

<section class="contact-one contact-page">
    <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="section-title text-center">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
        </div>

        <div class="main-footer__newsletter" style="border: 1px solid; padding: 10px; border-radius: 10px;">
            <form id="domainForm" novalidate="novalidate">
                <h5 class="main-footer__newsletter__text" style="text-align: center;">Enter a domain to get details</h5>

                <div class="main-footer__email-input-box" style="margin-top: 10px; text-align: center; ">
                    <input type="text" id="domain" name="domain" placeholder="e.g: www.google.com" required style="width: 100%; padding: 16.5px; border-radius: 5px; border: 1px solid #ccc;">

                    <div class="form-group text-center" style="margin-top: 20px;">
                        <button class="nisoz-btn text-center" type="submit" name="submit-form" style="border: none;">
                            <span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__text">Get Domain Details</span>
                        </button>
                    </div>
                    </div>

                <!-- Result Output Section (inside form, no ID duplication) -->
                <div class="testimonial-block mb-4" style="margin-top: 30px;">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="upper-inner" style="padding-left:0px;">
                                <h5 align="center" id="domainName">Domain Name</h5>
                                <div class="designation" style="text-align:center;">Domain Details</div>
                            </div>
                            <div class="text" id="domainResult" style="margin-top: 10px;">
                                <!-- Rendered domain JSON will go here -->
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
@section('script')

<script>
    $(document).ready(function() {
        let urlParams = new URLSearchParams(window.location.search);
        let domainFromUrl = urlParams.get('domain');

        if (domainFromUrl) {
            $('#domain').val(domainFromUrl);
            fetchDomainInfo(domainFromUrl);
        }

        // Form submission handler
        $('#domainForm').on('submit', function(e) {
            e.preventDefault(); // Prevent form submission

            let domain = $('#domain').val();
            fetchDomainInfo(domain);
        });

        function renderDomainInfo(data) {

            let resultHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
            $('#domainResult').html(resultHTML);
        }

        function fetchDomainInfo(domain) {
            $.ajax({
                url: "/domain-details", // Laravel route
                method: "GET",
                data: {
                    domain: domain
                },
                success: function(response) {
                    if (response.error) {
                        alert(response.error);
                    } else {
                        console.log(response);
                        $('#domainName').text(response.whois.WhoisRecord.domainName)
                        renderDomainInfo(response.whois.WhoisRecord);

                    }
                },
                error: function() {
                    alert("Failed to fetch domain information. Please try again.");
                }
            });
        }

    });
</script>
@endsection