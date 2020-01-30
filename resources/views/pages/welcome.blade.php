@extends('main')

@section('title', '| Welcome!')

@section('stylesheets')

@section('content')

@section('content')
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
            @foreach($posts as $post)

                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr(html_entity_decode(strip_tags($post->body)), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                    <a class="btn btn-primary" href="{{ url('blog/'.$post->slug) }}">Read More</a>
                </div>

                <hr class="my-4">
            
            @endforeach

            </div>

            <div class="col-md-3 offset-md-1">
                <h2>Sidebar</h2>
            </div>
        </div> <!-- /.row post -->
@endsection

@section('scripts')

<script type="text/javascript">
    var APP_URL = {!! json_encode(url('http://127.0.0.1:8000/')) !!}
</script>

@endsection