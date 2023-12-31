@extends('layouts.app-seargin')
@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb bg_img" data-bg-color="#E7E9EE" data-background="assets/img/bg/page_title.png">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Portfolio</h2>
                    <ul class="breadcrumb__list clearfix">
                        <li class="breadcrumb-item"><a href="index.html">seargin</a></li>
                        <li class="breadcrumb-item">portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- portfolio start -->
<section class="portfolio pt-150 pb-150">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <h2 class="title">Our Completed Work</h2>
        </div>
        <div class="text-center">
            <div class="xb-portfolio__menu portfolio-menu mb-70 text-center">
                <button class="active" data-filter="*">SEE ALL</button>
                <button data-filter=".cat1" class="">business</button>
                <button data-filter=".cat2">development</button>
                <button data-filter=".cat3">technology</button>
                <button data-filter=".cat4">web design</button>
            </div> 
        </div>
        <div class="row grid mt-none-30" style="padding: 0 !important; margin: 0 !important;">
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1 cat4">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_01.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">Financial Advisory</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">Financial Advisor</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_02.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">business services</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">business planning</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat3">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_03.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">app design</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">feasibility study</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1 cat2">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_04.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">development service</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">investment plan</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat4">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_05.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">digital marketing</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">market analysis</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat4">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_06.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">User Researcher</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">brand promoniton</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat3">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_07.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">capital</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">capital faster</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat4">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_08.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">advisory</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">inventory report</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1 cat2 cat3">
                    <div class="xb-portfolio mt-30">
                        <div class="xb-item--img">
                            <a href="portfolio-single.html"><img src="assets/img/portfolio/img_02.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--content">
                                <span class="xb-item--cat">business services</span>
                                <h3 class="xb-item--title"><a href="portfolio-single.html">business planning</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        {{-- <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat1 cat4">
                <div class="xb-portfolio mt-30">
                    <div class="xb-item--img">
                        <a href="portfolio-single.html"><img src="assets/img/portfolio/img_01.jpg" alt=""></a>
                    </div>
                    <div class="xb-item--holder">
                        <div class="xb-item--content">
                            <span class="xb-item--cat">Financial Advisory</span>
                            <h3 class="xb-item--title"><a href="portfolio-single.html">Financial Advisor</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat1 cat4">
                <div class="xb-portfolio mt-30">
                    <div class="xb-item--img">
                        <a href="portfolio-single.html"><img src="assets/img/portfolio/img_01.jpg" alt=""></a>
                    </div>
                    <div class="xb-item--holder">
                        <div class="xb-item--content">
                            <span class="xb-item--cat">Financial Advisory</span>
                            <h3 class="xb-item--title"><a href="portfolio-single.html">Financial Advisor</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat1 cat4">
                <div class="xb-portfolio mt-30">
                    <div class="xb-item--img">
                        <a href="portfolio-single.html"><img src="assets/img/portfolio/img_01.jpg" alt=""></a>
                    </div>
                    <div class="xb-item--holder">
                        <div class="xb-item--content">
                            <span class="xb-item--cat">Financial Advisory</span>
                            <h3 class="xb-item--title"><a href="portfolio-single.html">Financial Advisor</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- portfolio end -->
@endsection