<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials._head')
</head>
<body class="bg-black">
    @include('frontend.partials._custom-cursor')
    @include('frontend.partials._preloader')
    @include('frontend.partials._header')
    
    @yield('content')

    @include('frontend.partials._footer')
    @include('frontend.partials._scripts')
    @stack('scripts')
</body>
</html> 