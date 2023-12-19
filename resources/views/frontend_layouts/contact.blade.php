@extends('layouts.app-seargin')
@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb bg_img" data-bg-color="#E7E9EE" data-background="assets/img/bg/page_title.png">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Contact</h2>
                    <ul class="breadcrumb__list clearfix">
                        <li class="breadcrumb-item"><a href="index.html">seargin</a></li>
                        <li class="breadcrumb-item">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- contact info start -->
<section class="contact-info pt-150 pb-140">
    <div class="container">
        <div class="row justify-content-md-center mt-none-30">
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                <div class="xb-contact-info text-center">
                    <div class="xb-item--icon">
                        <img src="{{ asset('assets/img/icon/location-2.svg') }} " alt="">
                    </div>
                    <h3 class="xb-item--title">Location</h3>
                    <div class="xb-item--content">
                        Sunshine Business Park <br> Sector-94,Poland
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                <div class="xb-contact-info text-center">
                    <div class="xb-item--icon">
                        <img src="{{ asset('assets/img/icon/telephone1.svg') }} " alt="">
                    </div>
                    <h3 class="xb-item--title">Contact</h3>
                    <div class="xb-item--content">
                        +88(0) 555-0108 <br> +88(0) 555-01117
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                <div class="xb-contact-info text-center">
                    <div class="xb-item--icon">
                        <img src="{{ asset('assets/img/icon/email1.svg') }} " alt="">
                    </div>
                    <h3 class="xb-item--title">Email</h3>
                    <div class="xb-item--content">
                        seargin@example.com <br> gmail.@example.com
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                <div class="xb-contact-info text-center">
                    <div class="xb-item--icon">
                        <img src="{{ asset('assets/img/icon/timetable1.svg') }} " alt="">
                    </div>
                    <h3 class="xb-item--title">Visit Between</h3>
                    <div class="xb-item--content">
                        Mon - Sat : 8.00-5.00 <br> Sunday : Closed
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact info end -->

<!-- contact start -->
<section class="contact">
    <div class="container">
        <div class="sec-title text-center mb-45">
            <span class="subtitle ul_li"><img src="{{ asset('assets/img/icon/hr_icon.png') }} " alt="">Get In Touch WITH US</span>
            <h2 class="title">Contact us Today for Expert <br> Financial Guidance</h2>
        </div>
        <div class="xb-contact__area">
            <form class="contact-from needs-validation" method="POST" action="{{ route('customer.store') }}">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="xb-item--field">
                            <label for="name">Name*</label>
                            <div class="field-inner pos-rel">
                                <span class="icon"><img src="{{ asset('assets/img/icon/ins_user.svg') }} " alt=""></span>
                                <input id="name" name="name" class="form-control @error('name') is-invalid border-invalid ? '' @enderror" type="text" placeholder="Goladria Gomez" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <div class="mt-2 text-danger">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xb-item--field">
                            <label for="email">Email*</label>
                            <div class="field-inner pos-rel">
                                <span class="icon"><img src="{{ asset('assets/img/icon/ins-sms-tracking.svg') }} " alt=""></span>
                                <input id="email" class="form-control @error('email') is-invalid ? '' @enderror" name="email" type="email" placeholder="seargin@agency.com" value="{{ old('email') }}">
                            </div>
                            
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
                            <label for="phone">Phone *</label>
                            <div class="field-inner pos-rel">
                                <span class="icon"><img src="{{ asset('assets/img/icon/call-calling.svg') }}" alt=""></span>
                                <input id="phone" class="form-control @error('phone') is-invalid ? '' @enderror" name="phone" type="number" placeholder="+1 088 01 4800 24" value="{{ old('phone') }}">
                            </div>
                            @error('phone')
                            <div class="text-danger mt-2">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xb-item--field">
                            <label>Subject *</label>
                            <div class="field-inner pos-rel">
                                <span class="icon"><img src="{{ asset('assets/img/icon/ins-home-hashtag.svg') }} " alt=""></span>
                                <select name="service_id" class="nice-select">on>
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
                    </div>
                    <div class="col-12">
                        <div class="xb-item--field">
                            <label for="message">Message</label>
                            <div class="field-inner pos-rel @error('message') is-invalid @enderror">
                                <span class="icon"><img src="{{ asset('assets/img/icon/messages-2.svg') }}" alt=""></span>
                                {{-- Kalo pake texarea, jangan di enter atau dikasih sepasi di dalamnya --}}
                                <textarea name="message" class="form-control @error('message') is-invalid ? '' @enderror" cols="30" rows="10">{{ old('message') }}</textarea>
                            </div>
                            @error('message')
                                <div class="mt-2 text-danger">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-button text-center">
                        <button type="submit" class="xb-btn">send a message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- contact end -->
@endsection