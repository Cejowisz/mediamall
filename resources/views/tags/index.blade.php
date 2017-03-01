@extends('layout.main')

@section('title', '| All Tags')

@section('success')
    @include('partials._messages')
@endsection

@section('content')

    <h1>This are all Tags</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>{{-- end of  .col-sm-8 --}}

            <div class="col-sm-3">
                <div class="well">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('tags.store') }}">
                        {{ csrf_field() }}
                        <h3>New Tag </h3>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Set Tag">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Category</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
