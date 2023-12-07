<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }} " type="images/x-icon" />

    <!-- css include -->
    @include('includes.style')
</head>

<body>

    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader start -->
    <div id="xb-loadding" class="xb-loader">
        <div class="loading-spin"></div>
    </div>
    <!-- preloader end -->

    <div class="body_wrap">

        <!-- header start -->
        @include('includes.header')
        <!-- header end -->

        <div class="body-overlay"></div>
        <main>

            @yield('content')

        </main>

        <!-- footer start -->
        @include('includes.footer')
        <!-- footer start -->

    </div>

    <!-- jquery include -->
    @include('includes.js')


</body>

</html>