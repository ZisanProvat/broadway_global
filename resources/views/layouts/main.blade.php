<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>

    @include('partials.whatsapp')
    @include('partials.topbar')
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
    @yield('extra-scripts')

</body>
</html>
