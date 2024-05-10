@extends('layouts.template_login')
@section('title', 'Register')
@section('content')

    <div class="header-text mb-4 text-center">
        <small>Already have an account? <a href="{{ route('login') }}" id="showLogin">Log In</a></small>
    </div>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="input-group mb-3 mx-auto" style="width: 400px;">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <div class="form-floating">
                <input type="text" class="form-control" id="NameInput" placeholder="Name" name="name" value="{{ old('name') }}">
                <label for="Name">Name</label>
            </div>
        </div>
        <div class="input-group mb-3 mx-auto" style="width: 400px;">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <div class="form-floating">
                <input type="text" class="form-control" id="usernameInput" placeholder="Username" name="username" value="{{ old('username') }}">
                <label for="Username">Username</label>
            </div>
        </div>
        <div class="input-group mb-3 mx-auto" style="width: 400px;">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <div class="form-floating">
                <input type="email" class="form-control" id="emailInput" placeholder="Email Address" name="email" value="{{ old('email') }}">
                <label for="Email">Email</label>
            </div>
        </div>
        <div class="input-group mb-3 mx-auto" style="width: 400px;">
            <span class="input-group-text"><i class="bi bi-key"></i></span>
            <div class="form-floating">
                <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password">
                <label for="Password">Password</label>
            </div>
        </div>
        <div class="input-group mb-3 mx-auto" style="width: 400px;">
            <span class="input-group-text"><i class="bi bi-key"></i></span>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirm_password">
                <label for="Confirm-Password">Confirm Password</label>
            </div>
        </div>
        <div class="input-group mb-3 mx-auto" style="width: 400px">
            <button class="btn btn-lg btn-primary w-100 fs-6" style="border-radius: 30px;">Sign Up</button>
        </div>
    </form>
@endsection