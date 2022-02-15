@extends('masterlayout')

@section('container')
    @if(session()->has('signup-success'))
        <div class="container justify-content-center mt-3 mb-3 d-flex">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('signup-success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if(session()->has('login-fail'))
        <div class="container justify-content-center mt-3 mb-3 d-flex">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('login-fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="content container py-5 my-5">
        <form action="/request-login" method="POST">
            @csrf 
            <h3 class="px-5 mb-5"> {{ __('Log In') }} </h3>
            <div class="mb-3 px-5">
                <label for="email" class="form-label"> {{ __('Email Address') }}</label>
                <input type="email" name="email" id="email" placeholder="{{ __('example@mail.com') }}" class="form-control @error('email') is-invalid @enderror" autofocus required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 px-5">
                <label for="password" class="form-label"> {{ __('Password') }}</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-5 px-5">
                <button type="submit" class="btn btn-light"> {{ __('Submit') }} </button>
            </div>
            <div class="mb-3 px-5">
                <a href="/signup"> {{ __('Don\'t have an account? click here to sign up') }} </a>
            </div>
        </form>
    </div>
@endsection