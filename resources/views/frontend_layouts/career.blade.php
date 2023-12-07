@extends('layouts.app-seargin')

@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb bg_img" data-bg-color="#E7E9EE" data-background="assets/img/bg/page_title.png">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Career</h2>
                    <ul class="breadcrumb__list clearfix">
                        <li class="breadcrumb-item"><a href="index.html">seargin</a></li>
                        <li class="breadcrumb-item">Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- career start -->
<section class="career pt-140 pb-150">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <h2 class="title">Your Career Starts Here</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="text-center">
                    <div class="xb-portfolio__menu portfolio-menu mb-50 text-center">
                        <button class="active" data-filter="*">SEE ALL</button>
                        <button data-filter=".cat1" class="">Development</button>
                        <button data-filter=".cat2">Design</button>
                        <button data-filter=".cat3">Marketing</button>
                        <button data-filter=".cat4">Customer services</button>
                        <button data-filter=".cat5">Management</button>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-12 grid-item cat1 cat4">
                        <div class="xb-career ul_li_between mt-20">
                            <div class="xb-item--holder mt-30">
                                <h2 class="xb-item--title"><a href="{{ route('career.details') }}">Customer Success Manager</a>
                                </h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><i class="far fa-map-marker-alt"></i>Remote</li>
                                    <li><i class="far fa-clock"></i>Full-time</li>
                                </ul>
                            </div>
                            <a class="xb-item--btn xb-btn mt-30" href="{{ route('career.details') }}">View job<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 grid-item cat2 cat4 cat5">
                        <div class="xb-career ul_li_between mt-20">
                            <div class="xb-item--holder mt-30">
                                <h2 class="xb-item--title"><a href="{{ route('career.details') }}">Senior Software Engineer</a>
                                </h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><i class="far fa-map-marker-alt"></i>Remote</li>
                                    <li><i class="far fa-clock"></i>Full-time</li>
                                </ul>
                            </div>
                            <a class="xb-item--btn xb-btn mt-30" href="{{ route('career.details') }}">View job<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 grid-item cat1 cat4">
                        <div class="xb-career ul_li_between mt-20">
                            <div class="xb-item--holder mt-30">
                                <h2 class="xb-item--title"><a href="{{ route('career.details') }}">Product Designer</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><i class="far fa-map-marker-alt"></i>Remote</li>
                                    <li><i class="far fa-clock"></i>Full-time</li>
                                </ul>
                            </div>
                            <a class="xb-item--btn xb-btn mt-30" href="{{ route('career.details') }}">View job<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 grid-item cat2 cat3 cat4">
                        <div class="xb-career ul_li_between mt-20">
                            <div class="xb-item--holder mt-30">
                                <h2 class="xb-item--title"><a href="{{ route('career.details') }}">Engineering Manager</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><i class="far fa-map-marker-alt"></i>Remote</li>
                                    <li><i class="far fa-clock"></i>Full-time</li>
                                </ul>
                            </div>
                            <a class="xb-item--btn xb-btn mt-30" href="{{ route('career.details') }}">View job<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 grid-item cat5 cat3 cat4">
                        <div class="xb-career ul_li_between mt-20">
                            <div class="xb-item--holder mt-30">
                                <h2 class="xb-item--title"><a href="{{ route('career.details') }}">Backend Developer</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><i class="far fa-map-marker-alt"></i>Remote</li>
                                    <li><i class="far fa-clock"></i>Full-time</li>
                                </ul>
                            </div>
                            <a class="xb-item--btn xb-btn mt-30" href="{{ route('career.details') }}">View job<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 grid-item cat1 cat4 cat5">
                        <div class="xb-career ul_li_between mt-20">
                            <div class="xb-item--holder mt-30">
                                <h2 class="xb-item--title"><a href="{{ route('career.details') }}">Content Writer</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><i class="far fa-map-marker-alt"></i>Remote</li>
                                    <li><i class="far fa-clock"></i>Full-time</li>
                                </ul>
                            </div>
                            <a class="xb-item--btn xb-btn mt-30" href="{{ route('career.details') }}">View job<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- career end -->

@endsection