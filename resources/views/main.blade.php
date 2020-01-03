<!DOCTYPE html>
<html lang="en">

<head>

@include('partials._head')

</head>

<body>

<!-- navbar -->
@include('partials._nav')

<!-- main content -->
@yield('content')

<!-- footer -->
@include('partials._footer')

@include('partials._javascripts')

@yield('scripts')

</body>
</html>