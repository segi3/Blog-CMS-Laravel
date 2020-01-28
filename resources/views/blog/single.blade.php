@extends('main')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('stylesheets')
{!! Html::style('css/style.css') !!}
@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
        
            <h1>{{ $post->title }}</h1>

            <p>{!! $post->body !!}</p>

            <hr>

            <p>Category: {{ $post->category->name }}</p>

        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-2">
            <h3 class="comment-title">{{ $comments->count() }} Comments</h3>
            @foreach($comments as $comment)
            <div class="comment">
                <div class="author-info">
                    <img src="https://southernplasticsurgery.com.au/wp-content/uploads/2013/10/user-placeholder.png" class="author-image" alt="">
                    <div class="author-meta">
                        <h4>{{ $comment->name }}</h4>
                        <p class="author-time">{{ date('j M Y G:i', strtotime($comment->created_at)) }}</p>
                    </div>
                </div>
                <div class="comment-content">
                    {{ $comment->comment }}
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div id="comment_form" class="col-md-8 offset-md-2">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-12">
                    {{ Form::label('comment', 'Comment:') }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
                    {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>

@endsection