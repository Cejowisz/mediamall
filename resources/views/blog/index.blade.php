@extends('layout.main')

@section('title', '| Blog Post')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4><b>{{ $post->title }}</b></h4></div>
                        <div class="panel-body">
                            <p>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</p>
                        </div>
                        <div class="panel-footer">
                            Article written by:
                            <span class="pull-right">
                                <a href="/blog/{{$post->slug}}" style="margin-right: 3px">View</a>
                                <p class="" style="display: inline">{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-4">
                <p>interests and adverts</p>
            </div>
        </div>
    </div>
@endsection
