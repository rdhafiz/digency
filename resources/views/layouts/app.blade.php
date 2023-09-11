<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - @yield('title')</title>

    @include('layouts.components.meta')

    @include('layouts.components.assets')


</head>
<body>

@include('layouts.components.header')

@yield('content')

@include('layouts.components.footer')

@include('layouts.components.scripts')

</body>
</html>
