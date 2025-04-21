<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'تطبيق Laravel')</title>
    @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini">
    @include('layouts.main-header')
    @include('layouts.main-sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('layouts.footer')
    @stack('scripts')
</body>
</html>
