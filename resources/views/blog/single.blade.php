@extends('layout.main')

@section('title', '| Post Page')

@section('success')
    @include('partials._messages')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <img src="{{ asset('uploads/' . $post->featured_image) }}" alt="">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>{{ $post->title }}</b></h4></div>
                    <div class="panel-body">
                        {!! $post->body !!}
                        <hr/>
                        {{ $post->category->name }}
                    </div>
                    <div class="panel-footer">Article written by: </div>
                </div>

                <div class="comment">
                    @foreach($post->comments as $comment)
                        <p><strong>Name: {{ $comment->name }}</strong></p>
                        <p>Comment:<br/> {{ $comment->comment }}</p>
                    @endforeach
                </div>

                <form action="{{ route('comments.store', $post->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" placeholder="Enter you name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address">
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea name="comment" class="form-control" cols="30" rows="10" placeholder="Your comment"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>
                
            </div>

            <div class="col-sm-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created at:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                    </dl>
                    <hr>
                    {{-- going to be editable if admin right --}}
                    {{--<div class="row">
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
                    </div>--}}
                </div>
            </div>
        </div>
    </div>


@endsection

