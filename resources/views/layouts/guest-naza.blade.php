<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Naza App') }}</title>

    @include('backoffice_includes.style')
</head>

<body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <div class="col-sm-12 col-md-5 mx-auto">
                <div class="text-center mb-3">
                    <a href="/">
                        <x-application-logo />
                    </a>
                </div>
                <div class="card border border-0">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('backoffice_includes.script-js')

</body>

</html>