@extends('layout.main')

@section('title', '| Post Page')

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
                        {{ $post->body }}
                        <hr/>
                        {{ $post->category->name }}
                    </div>
                    <div class="panel-footer">Article written by: </div>
                </div>
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

