@extends('main')

@section('title', '| Blog Posts')

@section('stylesheets')

@endsection

@section('content')

        <div class="row">
            <di class="col-md-9">
                <h1>Blog Posts</h1>
            </di>
            <div class="col-md-3">
                <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div> <!-- end of .row  -->

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th>Holder</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date('j M Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-dark">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection

@section('scripts')

@endsection