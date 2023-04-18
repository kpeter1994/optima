<!doctype html>
<html lang="hu">

@include('partials._head')

{{--@include('m-partials._nav')--}}


<body class="bg-dark bg-fixed-image">

@include('m-partials._messages')

@yield('content')




@include('partials._javascripts')

</body>
</html>
