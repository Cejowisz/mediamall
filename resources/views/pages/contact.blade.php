@extends('layout.main')

@section('title', '| Contact')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="{{ url('contact') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="message" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
