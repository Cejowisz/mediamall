@extends('layout.main')

@section('title', '| Delete Comment')

@section('success')
    @include('partials._messages')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1>Delete this comment</h1>
                <strong>Name: </strong>{{ $comment->name }}
                <strong>Email: </strong>{{ $comment->email }}
                <strong>Comment: </strong>{{ $comment->comment }}
            </div>

            <div class="col-sm-4">
                <div class="col-sm-6">
                    <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="pull-right btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

