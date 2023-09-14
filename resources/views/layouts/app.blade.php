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


@if(Request::route()->getName() == 'home-two-columns')
    @include('layouts.components.header-dark')
@else
    @include('layouts.components.header')
@endif

@if(Request::route()->getName() == 'button-variations')
    @include('layouts.components.header-dark')
@endif

@if(Request::route()->getName() == 'shadow-hover-effect')
    @include('layouts.components.header-dark')
@endif

@if(Request::route()->getName() == 'border-hover-effect')
    @include('layouts.components.header-dark')
@endif

@yield('content')

@include('layouts.components.footer')

@include('layouts.components.scripts')

</body>
</html>
