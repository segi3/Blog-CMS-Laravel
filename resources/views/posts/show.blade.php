@extends('main')

@section('title', '| View Post')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p class="lead">{{ $post->body }}</p>
            </div>
        

            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Url:</dt>
                            <dd><a href="{{ route('blog.single',$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Category:</dt>
                            <dd><p>{{ $post->category->name }}</p></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Created at:</dt>
                            <dd>{{ date('M j, Y - H:i', strtotime($post-> created_at))}}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Last Updated:</dt>
                            <dd>{{ date('M j, Y - H:i', strtotime($post-> updated_at)) }}</dd>
                        </dl>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                                {!! Form::close() !!}
                            </div>
                            <div class="col-md-12 mt-2">
                                <a href="{{ route('posts.index') }}" class="btn btn-dark btn-block"><< back to index</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection

