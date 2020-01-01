<!DOCTYPE html>
<html lang="en">

<head>

@include('_head')

</head>

<body>

<!-- navbar -->
@include('_nav')

<!-- main content -->
@yield('content')

<!-- footer -->
@include('_footer')
    
@yield('scripts')

@include('_javascripts')
   
</body>
</html>