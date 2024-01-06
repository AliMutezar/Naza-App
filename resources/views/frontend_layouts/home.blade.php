@extends('layouts.app-seargin')

@section('content')
<!-- hero start -->
<section class="hero hero-default ul_li bg_img" data-bg-color="#E7E9EE" data-background="assets/img/bg/hero_bg.png">
    <div class="container px-60">
        <div class="row align-items-center">
            <div class="hero-content">
                <div class="sec-title mb-40">
                    {{-- <span class="subtitle ul_li" data-aos="fade-up" data-aos-duration="600"><img
                            src="assets/img/icon/hr_icon.png" alt=""> Strategic Financial Guidance</span> --}}
                    <h2 class="title title-big" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                        Mindful Consulting & Holistic Solutions
                    </h2>
                </div>
                <p class="fs-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
                    At Naza, we go beyond conventional digital solutions. We are architects of transformation, leveraging our expertise to empower businesses in navigating the digital landscape.
                </p>
                {{-- <ul class="xb-item--list list-unstyled mb-60" data-aos="fade-up" data-aos-duration="500"
                    data-aos-delay="400">
                    <li><i class="far fa-check"></i>Personalized Financial Planning</li>
                    <li><i class="far fa-check"></i>Expert Investment Strategies</li>
                    <li><i class="far fa-check"></i>Risk Management Solutions</li>
                </ul> --}}
                {{-- <div class="xb-item--btn btns" data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
                    <a class="xb-btn" href="contact.html">Talk to an Expert</a>
                    <a class="xb-btn xb-btn--white" href="about.html">Read Story</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- hero end -->

<!-- feature start -->
<section class="feature feature-pb pt-150 pb-150" data-background="assets/img/bg/feat_bg.jpg">
    <div class="container px-60">
        <div class="row align-items-start text-center mt-none-30">
            <div class="col-xl-12 col-lg-12 mt-30" data-aos="fade-left" data-aos-duration="900">
                <div class="sec-title sec-title--white">
                    {{-- <span class="subtitle ul_li"><img src="assets/img/icon/hr_icon.png" alt=""> Strategic
                        Financial Guidance</span> --}}
                    <h2 class="title mb-55">Our Services</h2>
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-4" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <div class="row justify-content-center">
                    <div class="xb-feature justify-content-center xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_01.svg" alt="">
                        </div>
                    </div>
                    <div class="card" style="width: 20rem; height: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title my-3">Digital Marketing</h5>
                          <p class="card-text">Digital Marketing: SEO, SEM, Social Media Marketing, KOL/Influencer Marketing, Social Media Ads, Meta Ads.</p>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('porfolio.details') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <div class="row justify-content-center">
                    <div class="xb-feature justify-content-center xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_01.svg" alt="">
                        </div>
                    </div>
                    <div class="card" style="width: 20rem; height: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title my-3">Creative Design</h5>
                          <p class="card-text">UI/UX Design,
                            Social Media Graphics, Logo & Branding Consultancy.</p>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('porfolio.details') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <div class="row justify-content-center">
                    <div class="xb-feature justify-content-center xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_01.svg" alt="">
                        </div>
                    </div>
                    <div class="card" style="width: 20rem; height: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title my-3">Digital Product & Development</h5>
                          <p class="card-text">Website, SaaS &
                            App Development, Consultation, IT Support & Maintenance Service.</p>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('porfolio.details') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-2 mt-30" data-aos="fade-left" data-aos-duration="900"
                data-aos-delay="200">
                <div class="xb-feature__wrap ul_li">
                    <div class="xb-feature xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_01.svg" alt="">
                        </div>
                        <h3 class="xb-item--title">Market Analysis</h3>
                        <p class="xb-item--content">Offer in-depth market analysis and investment</p>
                    </div>
                    <div class="xb-feature xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_02.svg" alt="">
                        </div>
                        <h3 class="xb-item--title">Investment Insights</h3>
                        <p class="xb-item--content">Assist clients with tax optimization strategies,</p>
                    </div>
                    <div class="xb-feature xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_03.svg" alt="">
                        </div>
                        <h3 class="xb-item--title">Estate Planning</h3>
                        <p class="xb-item--content">Offer guidance on estate planning and wealth.</p>
                    </div>
                    <div class="xb-feature xb-feature2 mt-70">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/feat_04.svg" alt="">
                        </div>
                        <h3 class="xb-item--title">Risk Assessment</h3>
                        <p class="xb-item--content">Offer in-depth market analysis and investment</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- feature end -->

<!-- cta start -->
<section class="cta z-1 pos-rel" data-bg-color="#E7E9EE">
    <div class="container px-60">
        <div class="xb-cta">
            <div class="xb-item--inner ul_li_between">
                <div class="xb-icon-img ul_li mt-15">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="avatar">
                        <img src="assets/img/avatar/cta_avatar.png" alt="">
                    </div>
                </div>
                <h3 class="xb-item--number mt-15">+1-202-555-0160</h3>
                <p class="xb-item--content mt-15">Use our Hotline for quick get <br> in touch for 24 hours
                </p>
                <div class="xb-item--icon mt-15">
                    <img src="assets/img/icon/cta_message_icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta end -->

<!-- services start -->
<section class="services z-1 pos-rel pt-65 pb-150" data-bg-color="#E7E9EE">
    <div class="container px-60">
        <div class="row justify-content-center">
            <div class="col-lg-5" style="height: auto">
                <img src="{{ asset('assets/img/service/proses.png') }}" alt="">
            </div>
            <div class="col-lg-5">
               <div class="row">
                <div class="col-1">
                    <h1 class="text-gold">1</h1>
                </div>
                <div class="col">
                    <h2 class="xb-item--title">Planning</h2>
                    <p>Initial Client Meeting, Requirements Gathering, Feasibility Study, Project Proposal, Contract and Agreement.</p>
                </div>
               </div>
               <div class="row my-5">
                    <div class="col-1">
                        <h1 class="text-gold">2</h1>
                    </div>

                    <div class="col">
                        <h2 class="xb-item--title">Development</h2>
                        <p>Project Planning, Design Phase, Development Phase, Quality Assurance and Testing, Client Feedback and Revisions, Deployment.</p>
                    </div>
               </div>
               <div class="row">
                    <div class="col-1">
                        <h1 class="text-gold">3</h1>
                    </div>

                    <div class="col">
                        <h2 class="xb-item--title">Deliverable</h2>
                        <p>Ongoing Support and Maintenance, Client Handover and Training, and Post-Launch Evaluation.</p>
                    </div>
               </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center g-12 mt-none-12">
            <div class="col-lg-4">
                <div class="xb-service__sec-title mt-12">
                    <div class="sec-title">
                        <span class="subtitle ul_li"><img src="assets/img/icon/hr_icon.png" alt="">
                            Services</span>
                        <h2 class="title mb-20">Core <br> Solutions</h2>
                        <p>Celebrate Power of Financial Services: <br> Your Gateway to Success</p>
                    </div>
                    <div class="xb-service__img">
                        <img src="assets/img/service/sec_img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_01.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Investment Portfolio
                                Management</a></h3>
                        <p class="xb-item--content">Grow and Protect Your Investments</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_03.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Estate Planning and
                                Inheritance Guidance</a></h3>
                        <p class="xb-item--content">Pass on Your Legacy Wisely</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_02.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Retirement Planning and
                                Wealth Preservation</a></h3>
                        <p class="xb-item--content">Prepare for Comfortable Retirement</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_04.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Comprehensive Financial
                                Planning</a></h3>
                        <p class="xb-item--content">Secure Your Financial Future</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_05.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Tax Optimization <br>
                                Strategies</a></h3>
                        <p class="xb-item--content">Minimize Your Tax Burden</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_06.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Debt Management and
                                Reduction</a></h3>
                        <p class="xb-item--content">Take Control of Your Debt</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="xb-service xb-service1 mt-12">
                    <div class="xb-item--inner">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/srv_07.svg" alt="">
                        </div>
                        <h3 class="xb-item--title"><a href="service-single.html">Risk Assessment and
                                Insurance Solutions</a></h3>
                        <p class="xb-item--content">Safeguard Against Life's Uncertainties</p>
                        <div class="xb-item--shape">
                            <img src="assets/img/shape/srv_shape.png" alt="">
                        </div>
                        <a class="xb-overlay" href="service-single.html"></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="xb-service__shape">
        <div class="shape shape--1">
            <img data-parallax='{"y": "-90"}' src="assets/img/shape/srv_shape1.png" alt="">
        </div>
        <div class="shape shape--2">
            <img data-parallax='{"y": "90"}' src="assets/img/shape/srv_shape2.png" alt="">
        </div>
    </div>
</section>
<!-- services end -->

<!-- team start -->
<section class="team bg_img pt-140 pb-140" data-background="assets/img/bg/team_bg.jpg">
    <div class="container px-60">
        <div class="sec-title sec-title--white text-center mb-70" data-aos="fade-up" data-aos-duration="600">
            <span class="subtitle ul_li"><img src="assets/img/icon/hr_icon.png" alt=""> Our Team</span>
            <h2 class="title">Our Financial Experts</h2>
        </div>
        <div class="xb-swiper-sliders" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
            <div class="xb-carousel-inner">
                <div class="xb-team-sldier xb-swiper-container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="xb-swiper-slide swiper-slide xb-team xb-team1">
                            <div class="xb-item--inner">
                                <div class="xb-item--holder mb-25">
                                    <h3 class="xb-item--name">Cornor Magregor</h3>
                                    <span class="xb-item--desig">Business Consultant</span>
                                </div>
                                <div class="xb-item--img">
                                    <img src="assets/img/team/img_01.png" alt="">
                                </div>
                                <div class="xb-item--shape">
                                    <img src="assets/img/shape/team_shape.png" alt="">
                                </div>
                                <ul class="xb-item--social ul_li_center">
                                    <li><a class="twitter" href="#!"><img src="assets/img/icon/twitter-x.svg"
                                                alt=""></a></li>
                                    <li><a class="linkedin" href="#!"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li><a class="youtube" href="#!"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="xb-swiper-slide swiper-slide xb-team xb-team1">
                            <div class="xb-item--inner">
                                <div class="xb-item--holder mb-25">
                                    <h3 class="xb-item--name">OM Shan Omaly</h3>
                                    <span class="xb-item--desig">Finance Consultant</span>
                                </div>
                                <div class="xb-item--img">
                                    <img src="assets/img/team/img_02.png" alt="">
                                </div>
                                <div class="xb-item--shape">
                                    <img src="assets/img/shape/team_shape.png" alt="">
                                </div>
                                <ul class="xb-item--social ul_li_center">
                                    <li><a class="twitter" href="#!"><img src="assets/img/icon/twitter-x.svg"
                                                alt=""></a></li>
                                    <li><a class="linkedin" href="#!"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li><a class="youtube" href="#!"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="xb-swiper-slide swiper-slide xb-team xb-team1">
                            <div class="xb-item--inner">
                                <div class="xb-item--holder mb-25">
                                    <h3 class="xb-item--name">Khabib Normano</h3>
                                    <span class="xb-item--desig">User Researcher</span>
                                </div>
                                <div class="xb-item--img">
                                    <img src="assets/img/team/img_03.png" alt="">
                                </div>
                                <div class="xb-item--shape">
                                    <img src="assets/img/shape/team_shape.png" alt="">
                                </div>
                                <ul class="xb-item--social ul_li_center">
                                    <li><a class="twitter" href="#!"><img src="assets/img/icon/twitter-x.svg"
                                                alt=""></a></li>
                                    <li><a class="linkedin" href="#!"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li><a class="youtube" href="#!"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="xb-swiper-slide swiper-slide xb-team xb-team1">
                            <div class="xb-item--inner">
                                <div class="xb-item--holder mb-25">
                                    <h3 class="xb-item--name">Louis Saville</h3>
                                    <span class="xb-item--desig">Wealth Advisor</span>
                                </div>
                                <div class="xb-item--img">
                                    <img src="assets/img/team/img_04.png" alt="">
                                </div>
                                <div class="xb-item--shape">
                                    <img src="assets/img/shape/team_shape.png" alt="">
                                </div>
                                <ul class="xb-item--social ul_li_center">
                                    <li><a class="twitter" href="#!"><img src="assets/img/icon/twitter-x.svg"
                                                alt=""></a></li>
                                    <li><a class="linkedin" href="#!"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li><a class="youtube" href="#!"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-style1 swiper-pagination style-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team end -->

<!-- testimonial start -->
<section class="testimonial pos-rel z-1 pt-140 pb-70" data-bg-color="#E7E9EE">
    <div class="container px-60">
        <div class="sec-title">
            <span class="subtitle ul_li"><img src="assets/img/icon/hr_icon.png" alt=""> See Seargin Success
                Stories </span>
            <h2 class="title mb-40">Join the Financial Success Story – Be Our <br> Next Satisfied Company.
            </h2>
            <h2 class="xb-grd-number d-flex mb-30">
                <div><span class="xbo" data-count="3">00</span></div>
                <div><span class="xbo" data-count="4">00</span></div>
                <div><span class="xbo" data-count="3">00</span></div>
                <div><span class="xbo" data-count="5">00</span></div>
                <div><span class="xbo" data-count="3">00</span></div>
                <div><span class="suffix">+</span></div>
            </h2>
            <h5 class="text-heading text-24 text-bold weight-medium">Over 24,000 Success Stories: Hear From
                Our Satisfied Clients</h5>
        </div>
        <div class="row mt-140">
            <div class="xb-swiper-sliders">
                <div class="xb-carousel-inner">
                    <div class="xb-testimonial-sldier xb-swiper-container swiper-container">
                        <div class="swiper-wrapper">
                            <div class="xb-swiper-slide swiper-slide xb-testimonial xb-testimonial1">
                                <div class="xb-item--inner">
                                    <div class="xb-item--avatar">
                                        <img src="assets/img/avatar/tm_01.png" alt="">
                                        <div class="xb-item--quote">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="xb-item--author mb-45">
                                        <h3 class="xb-item--name">DC Dena White </h3>
                                        <span class="xb-item--desig">DC Dena White </span>
                                    </div>
                                    <div class="xb-item--content mb-40">
                                        “ Working with Seargin has been a game-changing for my business.
                                        Their financial insights and guidance have been helped us grow and
                                        thrive of my business “
                                    </div>
                                    <div class="xb-item--bottom ul_li_between">
                                        <img src="assets/img/icon/trustpilot.png" alt="">
                                        <span>4.6 Trustpilot Rating</span>
                                    </div>
                                </div>
                            </div>
                            <div class="xb-swiper-slide swiper-slide xb-testimonial xb-testimonial1">
                                <div class="xb-item--inner">
                                    <div class="xb-item--avatar">
                                        <img src="assets/img/avatar/tm_02.png" alt="">
                                        <div class="xb-item--quote">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="xb-item--author mb-45">
                                        <h3 class="xb-item--name">Khamjat Chimairia</h3>
                                        <span class="xb-item--desig">Founder of UFC</span>
                                    </div>
                                    <div class="xb-item--content mb-40">
                                        “ I've been with Seargin for years, and they've consistently
                                        delivered exceptional results. Their investment strategies have
                                        secured my family's financial well-being."
                                    </div>
                                    <div class="xb-item--bottom ul_li_between">
                                        <img src="assets/img/icon/trustpilot.png" alt="">
                                        <span>4.6 Trustpilot Rating</span>
                                    </div>
                                </div>
                            </div>
                            <div class="xb-swiper-slide swiper-slide xb-testimonial xb-testimonial1">
                                <div class="xb-item--inner">
                                    <div class="xb-item--avatar">
                                        <img src="assets/img/avatar/tm_01.png" alt="">
                                        <div class="xb-item--quote">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="xb-item--author mb-45">
                                        <h3 class="xb-item--name">DC Dena White </h3>
                                        <span class="xb-item--desig">DC Dena White </span>
                                    </div>
                                    <div class="xb-item--content mb-40">
                                        “ Working with Seargin has been a game-changing for my business.
                                        Their financial insights and guidance have been helped us grow and
                                        thrive of my business “
                                    </div>
                                    <div class="xb-item--bottom ul_li_between">
                                        <img src="assets/img/icon/trustpilot.png" alt="">
                                        <span>4.6 Trustpilot Rating</span>
                                    </div>
                                </div>
                            </div>
                            <div class="xb-swiper-slide swiper-slide xb-testimonial xb-testimonial1">
                                <div class="xb-item--inner">
                                    <div class="xb-item--avatar">
                                        <img src="assets/img/avatar/tm_02.png" alt="">
                                        <div class="xb-item--quote">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                    </div>
                                    <div class="xb-item--author mb-45">
                                        <h3 class="xb-item--name">Khamjat Chimairia</h3>
                                        <span class="xb-item--desig">Founder of UFC</span>
                                    </div>
                                    <div class="xb-item--content mb-40">
                                        “ I've been with Seargin for years, and they've consistently
                                        delivered exceptional results. Their investment strategies have
                                        secured my family's financial well-being."
                                    </div>
                                    <div class="xb-item--bottom ul_li_between">
                                        <img src="assets/img/icon/trustpilot.png" alt="">
                                        <span>4.6 Trustpilot Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-style1 swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-map">
        <img src="assets/img/shape/map.png" alt="">
        <div class="testimonial-map__dot">
            <span class="dot dot--1"></span>
            <span class="dot dot--2"></span>
        </div>
    </div>
    <div class="testimonial-shape">
        <img data-parallax='{"y": "-90"}' src="assets/img/shape/tm_shape2.png" alt="">
    </div>
</section>
<!-- testimonial end -->

<!-- contact start -->
<section class="contact z-1 pos-rel pb-120" data-bg-color="#E7E9EE">
    <div class="container px-60">
        <div class="xb-contact__wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="xb-contact__inner">
                        <div class="sec-title mb-45">
                            <span class="subtitle ul_li"><img src="assets/img/icon/hr_icon.png" alt="">Get
                                In Touch WITH US</span>
                            <h2 class="title">Contact us Today for Consultation</h2>
                        </div>
                        <form method="POST" action="{{ route('customer.store') }}" class="xb-contact needs-validation">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assets/img/icon/ins_user.svg" alt=""></span>
                                        <input type="text" name="name" 
                                            class="@error('name') is-invalid border-invalid ? '' @enderror" 
                                            type="text" value="{{ old('name') }}" 
                                            placeholder="Khamjat Chimaiya">

                                         @error('name')
                                            <div class="mt-2 text-danger">
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assets/img/icon/ins-sms-tracking.svg" alt=""></span>
                                        <input type="email" name="email" 
                                        class=" @error('email') is-invalid ? '' @enderror" type="email"
                                        value="{{ old('email') }}" placeholder="seargin@gmail.com">

                                        @error('email')
                                            <div class="mt-2 text-danger">
                                                @foreach($errors->get('email') as $error)
                                                    <span>{{ $error }}</span><br>
                                                @endforeach
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assets/img/icon/call-calling.svg" alt=""></span>
                                        <input class="form-control @error('phone') is-invalid ? '' @enderror" 
                                        name="phone" type="text" placeholder="08801480024" value="{{ old('phone') }}" >

                                        @error('phone')
                                            <div class="text-danger mt-2">
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assets/img/icon/ins-home-hashtag.svg" alt=""></span>
                                        <select name="service_id" class="nice-select">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('service_id')
                                            <div class="mt-2 text-danger">
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="xb-item--field">
                                        <span><img src="assets/img/icon/messages-2.svg" alt=""></span>
                                        <textarea name="message" id="message" cols="30" rows="10" 
                                            placeholder="Write you message" class="@error('message') is-invalid ? '' @enderror" cols="30" rows="10">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="xb-item--field">
                                        <button class="xb-btn w-100">Submit your Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="xb-contact__shape">
                <img src="assets/img/shape/cnt_shape.png" alt="">
            </div>
            <div class="xb-contact__img">
                <img src="assets/img/bg/cnt_img.png" alt="">
            </div>
        </div>
    </div>
    <div class="contact-shape">
        <div class="shape shape--1">
            <img data-parallax='{"y": "-90"}' src="assets/img/shape/cnt_shape2.png" alt="">
        </div>
        <div class="shape shape--2">
            <img data-parallax='{"y": "90"}' src="assets/img/shape/cnt_shape3.png" alt="">
        </div>
    </div>
</section>
<!-- contact end -->

@endsection