@extends('layouts.guest')

@section('content')

<div id="wrapper-admin" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-body text-center"> <!-- Center the content -->
                        <!-- Add the image at the top of the form and center it -->
                        <img src="{{ asset('images/library.png') }}" alt="Library Image" class="img-fluid mx-auto d-block mb-4">

                        <h4 class="card-title">Login</h4>
                        <form class="yourform" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" value="" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        @error('username')
                            <div class='alert alert-danger mt-3'>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
