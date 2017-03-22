@extends('layout.main')

@section('title', '| Registration Page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="{{ route('student.store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Your Surname" required >
                        </div>
                        <div class="col-sm-6">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter First name" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                        </div>
                        <div class="col-sm-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Put your mobile number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                        <label for="subject">Subject</label>
                        <select type="text" name="program" class="form-control">
                            <option value="">Select Program</option>
                            <option value="1">Photo Editing</option>
                            <option value="2">Video Editing</option>
                            <option value="3">Web Design</option>
                            <option value="2">Web Development</option>
                        </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="duration">Duration</label>
                            <select type="text" name="duration" class="form-control">
                                <option value="">Select Duration</option>
                                <option value="3 months">3 Months</option>
                                <option value="6 months">6 Months</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="gender">Gender</label>
                            <select type="text" name="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="subject">Age</label>
                            <select type="text" name="gender" class="form-control" required>
                                <option value="">Select Age</option>

                                {{ $age = 15 }}
                                @while( $age <= 35)
                                    <option value="{{ $age }}">{{ $age }}</option>
                                    {{ $age++ }}
                                @endwhile
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection