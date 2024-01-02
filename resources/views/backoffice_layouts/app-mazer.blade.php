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
    <div id="app">
       @include('backoffice_includes.sidebar-mazer')
        <div id="main">
            @yield('content')
        </div>
    </div>
    @include('backoffice_includes.script-js')
    @include('includes.sweetalerts')
    @stack('after-script')
</body>

</html>