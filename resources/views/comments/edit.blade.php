@extends('layout.main')


@section('title', '| Edit Comment')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Comment</h3>
            <div class="col-sm-6 col-sm-offset-3">
                <form action="{{ route('comments.update', $comment->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" value="{{ $comment->name }}" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" value="{{ $comment->email }}" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="comment"></label>
                        <textarea name="comment" id="" cols="30" rows="10" class="form-control">{{ $comment->comment }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-block btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection