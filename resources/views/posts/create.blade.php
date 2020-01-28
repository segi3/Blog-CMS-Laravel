@extends('main')

@section('title', '| Create Post')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea#tinymce',
        plugins: 'link code imagetools image bootstrap',
        valid_elements: '*[*]',
        extended_valid_elements: 'span[*]'
    });
</script>

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

                {{ Form::label('category', 'Category:') }}
                <select name="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('tag', 'Tag:') }}
                <select name="tag[]" class="form-control select2-multi-tag" multiple="multiple">
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'tinymce')) }}
                
                {{ Form::submit('Create New Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}

            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.min.js') !!}


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

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2-multi-tag').select2();
    });
</script>
@endsection