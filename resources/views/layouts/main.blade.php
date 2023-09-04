<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.top')

<body class="home-page home-01 ">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.bottom')
    
</body>

</html>
