@extends('layouts.app-seargin')

@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb bg_img" data-bg-color="#E7E9EE" data-background="assets/img/bg/page_title.png">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Services Details</h2>
                    <ul class="breadcrumb__list clearfix">
                        <li class="breadcrumb-item"><a href="index.html">seargin</a></li>
                        <li class="breadcrumb-item">Services Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- services start -->
<section class="services pt-150 pb-150">
    <div class="container">
        <div class="service-single">
            <div class="service-single__video pos-rel mb-80">
                <img src="{{ url('assets/img/service/s_single.jpg') }}" alt="">
                <a class="btn-video popup-video btn-video-center" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><i
                        class="fas fa-play"></i></a>
            </div>
            <div class="row justify-content-center mb-85">
                <div class="col-xl-8 col-lg-10">
                    <div class="service-single__content">
                        <h2 class="title">A Holistic Approach to Financial Planning</h2>
                        <p>A Holistic Approach to Financial Planning" is a comprehensive method of managing your
                            financial well-being that takes into account all aspects of your financial life, rather than
                            just focusing on individual components in isolation. It recognizes that your finances are
                            interconnected and that decisions made in one area can have a ripple effect on others. </p>
                        <p>This approach focuses on creating an investment portfolio that aligns with your financial
                            goals, risk tolerance, and time horizon. It considers various asset classes and
                            diversification to manage risk. Managing your income, expenses, and cash flow is at the core
                            of financial planning.</p>
                        <h2 class="mt-80">Service Process</h2>
                        <div class="service-single__info ul_li mb-25">
                            <div class="service-single__info-item ul_li">
                                <span class="xb-item--number">01</span>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Listening to your business needs</h3>
                                    <p class="xb-item--content">"Listening to your business simple and clear statement
                                        that suggests</p>
                                </div>
                            </div>
                            <div class="service-single__info-item ul_li">
                                <span class="xb-item--number">02</span>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Solutions tailored to your needs</h3>
                                    <p class="xb-item--content">Solutions tailored to your needs" communicates a
                                        customer-centric </p>
                                </div>
                            </div>
                            <div class="service-single__info-item ul_li">
                                <span class="xb-item--number">03</span>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Align tactics with objectives</h3>
                                    <p class="xb-item--content">Aligning Tactics with Objectives" refers to the
                                        strategic process of ensuring</p>
                                </div>
                            </div>
                            <div class="service-single__info-item ul_li">
                                <span class="xb-item--number">04</span>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Deliver measurable results</h3>
                                    <p class="xb-item--content">A Holistic Approach to Financial Planning" is a
                                        comprehensive method</p>
                                </div>
                            </div>
                        </div>
                        <h2>Service Outcome</h2>
                        <p>Typically refers to the end result or impact of a service provided to a client, customer, or
                            organization. It encompasses what is achieved or delivered as a result of the service.</p>
                        <ul class="service-single__list ul_li">
                            <li><img src="assets/img/icon/right-arrow.svg" alt="">Financial Clarity and Organization.
                            </li>
                            <li><img src="assets/img/icon/right-arrow.svg" alt="">Debt Reduction and Management.</li>
                            <li><img src="assets/img/icon/right-arrow.svg" alt="">Personalized Financial Roadmaps.</li>
                            <li><img src="assets/img/icon/right-arrow.svg" alt="">Estate Planning and Legacy
                                Preservation.</li>
                            <li><img src="assets/img/icon/right-arrow.svg" alt="">Increased Savings and Investment
                                Growth.</li>
                            <li><img src="assets/img/icon/right-arrow.svg" alt="">Regular Reviews and Adjustments.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-none-30">
                <div class="col-lg-4 col-md-6 mt-30">
                    <img src="assets/img/service/srv_img_01.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <img src="assets/img/service/srv_img_02.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <img src="assets/img/service/srv_img_03.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services end -->
@endsection