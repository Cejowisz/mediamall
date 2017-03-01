@extends('layout.main')

@section('title', '| All Categories')

@section('success')
    @include('partials._messages')
@endsection

@section('content')

    <h1>This are all Categories</h1>
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
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>{{-- end of  .col-sm-8 --}}

        <div class="col-sm-3">
            <div class="well">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('categories.store') }}">
                    {{ csrf_field() }}
                    <h3>New Category </h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Set Category">
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
