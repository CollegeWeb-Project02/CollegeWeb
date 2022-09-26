@extends('front.layout.master-breadcrumb')

@section('title', 'Login')

@section('body')
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Log in</h5>
                <h1>Welcome to <span style="color: #FF6600">E</span>COURSE</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">

                        @if(session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('notification') }}
                            </div>
                        @endif

                        <form action="" method="post">
                            @csrf
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" id="password" name="password" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="save-pass">
                                <input type="checkbox" id="save-pass" name="remember">
                                <span class="checkmark"></span>
                                Save Password
                            </label>
                            <div class="text-center">
                                <p>Forgot your password? <a href="#">Click</a> to get new password.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @endsection
