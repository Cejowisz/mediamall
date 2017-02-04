@extends('layout.main')

@section('title', '| Blog Posts')

{{--@section('success')
    @include('partials._messages')
@endsection--}}

@section('content')
    <div class="container">
        <div class="row">

            @foreach($posts as $post)
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>{{ $post->title }}</b></h4></div>
                    <div class="panel-body">
                        <p>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</p>
                    </div>
                    <div class="panel-footer">
                        Article written by:
                        <span class="pull-right">
                            <a href="posts/{{$post->id}}" style="margin-right: 3px">View</a>
                            <a href="posts/{{$post->id}}/edit" class="btn btn-primary btn-xs" style="margin-right: 3px">Edit</a>
                        </span>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>


@endsection

