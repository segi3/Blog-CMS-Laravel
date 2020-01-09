@extends('main')

@section('title', '| Create Post')

@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">

            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}

                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control form-control-lg', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-parsley-alphadash' => '')) }}

                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
                
                {{ Form::submit('Create New Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}

            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}


<script type="text/javascript">
    window.Parsley.addValidator('alphadash', {
        validateString: function(value) {
        return true == (/^[a-z-_]+$/.test(value));
    },
    messages: {
        en: 'Only alphabetic letters, dashes and underscores allowed.'
    }
    });
</script>
@endsection