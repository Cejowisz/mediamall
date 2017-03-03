@extends('layout.main')

@section('title', '| Edit Tag')

@section('success')
    @include('partials._messages')
@endsection

@section('content')
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('tags.update', $tag->id ) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <h3>New Tag </h3>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Set Tag">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Tag</button>
            </div>

        </form>
    </div>

@endsection