@extends('main')
@section('content')
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
@endsection