@extends('layout.main')

@section('title', '| Post')

@section('success')
    @include('partials._messages')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>{{ $post->title }}</b></h4></div>
                    <div class="panel-body">
                        {!! $post->body !!}<br/>
                        @foreach($post->tags as $tag)
                            <span class="label label-default" style="margin-right: 5px; ">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                    <div class="panel-footer">Article written by: </div>
                </div>

                <div class="backend-comment">
                    <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th width="70px"></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($post->comments as $comment)
                            <tr>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>
                                    <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Url</label>
                        <a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Category</label>
                        <p>{{ $post->category->name }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Created at:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Updated at:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            <form method="POST" action="/posts/{{$post->id}}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="pull-right btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

