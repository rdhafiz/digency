<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - @yield('title')</title>

    @include('layouts.components.meta')

    @include('layouts.components.assets')

</head>
<body>

<!--page loader-->
<div class="page-loader">
    <div class="middle">
        <div class="anim">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--page loader-->

@php

    $routeName = Request::route()->getName();

@endphp

@if(
    $routeName == 'home-two-columns' || $routeName == 'button-variations' ||
    $routeName == 'shadow-hover-effect' || $routeName == 'border-hover-effect' ||
    $routeName == 'loading-animation')

    @include('layouts.components.header-dark')

@else

    @include('layouts.components.header')

@endif

@yield('content')

@include('layouts.components.footer')

@include('layouts.components.scripts')

</body>
</html>
