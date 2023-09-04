<!doctype html>
<html class="no-js" lang="">

@include('layouts.admin.top')

<body>

    <!-- Left Panel -->

    @include('layouts.admin.sidebar')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       @include('layouts.admin.header')

       @yield('content')

    <!-- Right Panel -->

    @include('layouts.admin.bottom')

</body>

</html>
