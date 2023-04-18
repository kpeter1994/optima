<!doctype html>
<html lang="hu">

@include('partials._head')
<body class="bg-dark @yield('class')">

        @include('partials._nav')


            @yield('content')

        @include('partials._footer')

        @include('partials._javascripts')

</body>
</html>
