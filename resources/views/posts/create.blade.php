@extends('layout.main')

@section('title', '| Post')

@section('stylesheets')
    <link rel="stylesheet" href="{{ url('css/parsley.css') }}">
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form">
                    <form method="POST" action="{{ route('posts.store') }}" class="form-horizontal" data-parsley-validate>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    where is this

@endsection


@section('scripts')
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    <script src="{{ url('js/parsley.min.js') }}"></script>
@endsection

{{--@include('partials._footer')--}}