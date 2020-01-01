<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome!</title>

    <style>

        .active {
            background: #4FA9DC;
            color: #000;
        }

    </style>

  </head>
  <body>

    <!-- navbar -->

    <div id="app" class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">myBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome to my Blog!</h1>
                    <p class="lead">Thank you for visiting</p>
                    <hr class="my-4">
                    <p>This is a test website built with laravel</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                </div>
            </div>
        </div> <!-- /.row jumbotron-->

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore facere debitis provident incidunt perferendis! Quisquam magnam cumque reiciendis asperiores nihil soluta repellendus. Dolorem culpa, alias sapiente sequi reprehenderit ullam minima.</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore facere debitis provident incidunt perferendis! Quisquam magnam cumque reiciendis asperiores nihil soluta repellendus. Dolorem culpa, alias sapiente sequi reprehenderit ullam minima.</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore facere debitis provident incidunt perferendis! Quisquam magnam cumque reiciendis asperiores nihil soluta repellendus. Dolorem culpa, alias sapiente sequi reprehenderit ullam minima.</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore facere debitis provident incidunt perferendis! Quisquam magnam cumque reiciendis asperiores nihil soluta repellendus. Dolorem culpa, alias sapiente sequi reprehenderit ullam minima.</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore facere debitis provident incidunt perferendis! Quisquam magnam cumque reiciendis asperiores nihil soluta repellendus. Dolorem culpa, alias sapiente sequi reprehenderit ullam minima.</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
            </div>

            <div class="col-md-3 offset-md-1">
                <h2>Sidebar</h2>
            </div>
        </div> <!-- /.row post -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>