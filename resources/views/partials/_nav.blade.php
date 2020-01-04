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
                    <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
                        <a class="nav-link" href="/about">About </a>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
                        <a class="nav-link" href="/contact">Contact </a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">link</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>