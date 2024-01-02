@extends('backoffice_layouts.app-mazer')
@section('content')

<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="row">
        <div class="d-flex justify-content-between">
            <h3>{{ $title }}</h3>
            <h3>Hi, {{ auth()->user()->name }}</h3>
        </div>
    </div>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                {{-- Completed Project --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldBuy"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Completed Project</h6>
                                    <h6 class="font-extrabold mb-0">{{ $completed }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Total Form Submit --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldPaper"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Form Submit</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_submission }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Customer Contacted --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldCalling"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Costomers Contacted</h6>
                                    <h6 class="font-extrabold mb-0">{{ $contacted }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Customer Uncontacted --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldCall-Missed"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Customers Uncontacted</h6>
                                    <h6 class="font-extrabold mb-0">{{ $uncontacted }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $grafik_title_column }}</h4>
                        </div>
                        <div class="card-body">
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h6>{{ $grafik_title_donat }}</h6>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div> --}}
    </section>
</div>


@include('backoffice_includes.apexchart')
@include('backoffice_includes.footer')
@endsection