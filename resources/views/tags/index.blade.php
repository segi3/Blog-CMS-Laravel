@extends('main')

@section('title', '| Tags')

@section('content')

        <div class="row">
            <div class="col-md-8">
                <h1>Tags</h1>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                        <tr>
                            <th>{{ $tag->id }}</th>
                            <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                            <td>
                                {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

                    <h2>New Tag</h2>

                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}

                    {{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block mt-2']) }}

                {!! Form::close() !!}
            </div>
        </div>

@endsection