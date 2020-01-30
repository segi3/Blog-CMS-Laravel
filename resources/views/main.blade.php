<!DOCTYPE html>
<html lang="en">

<head>

@include('partials._head')

</head>

<body>

<!-- navbar -->
@include('partials._nav')

<!-- main content -->
    <div class="container">
        @include('partials._messages')

        <!-- @if(Auth::check())
            <li><i class="fa fa-user"></i> {{Auth::user()->name}}:</li>
            <form id="logout-form" action="{{ url('logout') }}" method="POST">
                        {{ csrf_field() }}
                <button type="submit">Logout</button>
            </form>
        @else
            <li><a href="{{route('login')}}"><i class="fa fa-user"></i>
                Login
            </a>
            </li>
        @endif -->

        @yield('content')
    </div>

<!-- footer -->
@include('partials._footer')

@include('partials._javascripts')

@yield('scripts')

</body>
</html>