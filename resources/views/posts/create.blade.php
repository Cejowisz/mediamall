@extends('layout.main')

@section('title', '| Post')

@section('stylesheets')
    <link rel="stylesheet" href="{{ url('css/parsley.css') }}">
    <link rel="stylesheet" href="{{ url('css/select2.min.css') }}">
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea',
            plugins: 'link code image imagetools'
        });
    </script>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" minlength="5" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tag</label>
                            <select name="tags[]" class="form-control select2-multi" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="featured_image">Upload Featured Image</label>
                            <input type="file" name="featured_image" accept="image/jpeg, image/png">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control"></textarea>
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
    <script src="{{ url('js/select2.min.js') }}"></script>

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection

{{--@include('partials._footer')--}}