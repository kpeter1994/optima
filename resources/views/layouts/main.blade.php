<!doctype html>
<html lang="hu">

@include('partials._head')


<body class="bg-dark @yield('class')">


@include('partials._nav')


@include('partials._messages')

@yield('content')


@include('partials._footer')

@include('partials._javascripts')

</body>
</html>
