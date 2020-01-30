<nav class="navbar navbar-expand-lg navbar-light mb-5 nav-bb">
    <div class="container">
      <a class="navbar-brand" href="#">my Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarShrink" aria-controls="navbarShrink" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarShrink">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="blog-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Submenu action</a></li>
                            <li><a class="dropdown-item" href="#">Another submenu action</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                    <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                    <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
                <a class="nav-link" href="/about">About </a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
                <a class="nav-link" href="/contact">Contact </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            @if (auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi {{ auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                    <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                    <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>
                    <hr>
                    <div class="container">
                        <form id="logout-form" action="{{ url('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </div>
                    
                </div>
            </li>
            @else
            <li>
                <a href="{{route('login')}}">Login</a>
            </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>