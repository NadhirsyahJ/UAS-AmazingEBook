@extends('masterlayout')

@section('container')
    <div class="content container mt-5 mb-5" style="background-image:images/background/background2.jpg">
        <form action="/request-register" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="mb-5"> {{ __('Sign Up') }} </h3>
            <div class="row mb-3">
                <div class="col">
                    <div class="mb-4">
                        <label for="first_name" class="form-label"> {{__('First Name') }}</label>
                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="{{ __('type here') }}" autofocus value="{{ old('first_name') }}" required>
                        @error('first_name')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="form-label"> {{ __('Last Name') }} </label>
                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="{{ __('type here') }}" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <p class="form-label"> {{ __('Gender') }} </p>
                        <div class="d-flex">
                            <div class="form-check">
                                <label for="gender_male" class="form-check-label"> {{ __('Male') }} </label>
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_male" value="male">
                            </div>
                            <div class="form-check ms-5">
                                <label for="gender_female" class="form-check-label"> {{ __('Female') }} </label>
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_female" value="female">
                            </div>
                        </div>
                        @error('gender_id')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"> {{ __('Password') }} </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="{{ __('type here') }}" required>
                        @error('password')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-4">
                        <label for="middle_name" class="form-label"> {{ __('Middle Name') }} </label>
                        <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder="{{ __('type here') }}" value="{{ old('middle_name') }}">
                        @error('middle_name')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label"> {{ __('Email Address') }} </label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('example@mail.com') }}" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="role_id" class="form-label"> {{ __('Role') }} </label>
                        <select name="role_id" id="role_id" class="form-control form-select @error('role_id') is-invalid @enderror">
                            <option selected> {{ __('Choose Role') }} </option>
                            <option value="1"> {{ __('Admin') }} </option>
                            <option value="2"> {{ __('User') }} </option>
                        </select>
                        @error('role_id')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="display_picture_link" class="form-label"> {{ __('Display Picture') }} </label>
                        <input type="file" class="form-control form-control-sm" id="display_picture_link" name="display_picture_link">
                        @error('display_picture_link')
                        <div class="invalid-feedback d-block text-start">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-submit btn-light"> {{ __('Submit') }} </button>
            </div>
            <div class="text-center mt-5">
                <a href="/login"> {{ __('Already have an account? click here to log in') }} </a>
            </div>
        </form>
    </div>
    
@endsection