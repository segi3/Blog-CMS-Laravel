@extends('main')

@section('title', '| Blog')

@section('stylesheets')

    <style>
        #show-posts :last-child > hr {
            display: none;
        }
    </style>

@endsection

@section('content')

        <div class="row">
            <div class="com-md-8 offset-md-2">
                <h1>Blog</h1>
            </div>
        </div>
        
        <div class="row" id="show-posts">
        @foreach ($posts as $post)
            <div class="col-md-8 offset-md-2 mt-5">
                <h2>{{ $post->title }}</h2>
                <h5>Published: {{ date('j M Y', strtotime($post->created_at)) }}</h5>
                <p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...':"" }}</p>

                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>

                <hr class="mt-5">
            </div>
        @endforeach
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class=" d-flex justify-content-center">
                    {!! $posts->links(); !!}
                </div>
            </div>
        </div>

@endsection