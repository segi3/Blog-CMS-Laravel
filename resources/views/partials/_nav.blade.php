    <div id="app" class="container-fluid mb-5 bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">myBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></a>
                    </li>
                    <li class="nav-item {{ Request::is('blog') ? "active" : "" }}">
                        <a class="nav-link" href="/blog">Blog</a></a>
                    </li>
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
        </nav>
    </div>