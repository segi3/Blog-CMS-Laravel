@extends('main')

@section('title', '| Create Post')

@section('stylesheets')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
        
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store']) !!}

                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}

                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                
                {{ Form::submit('Create New Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}

            {!! Form::close() !!}

        </div>
    </div>

    <!--  Without laravelcolletive form control
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Post</h1>
            <hr>

            <form method="POST" action="{{ route('posts.store') }}">
                <div class="form-group">
                    <label name="title">Title:</label>
                    <input id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label name="body">Post Body:</label>
                    <textarea id="body" name="body" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    -->

@endsection

@section('scripts')

@endsection