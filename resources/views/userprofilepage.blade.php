@extends('masterlayout')

@section('container')
    <div class="content container mt-5 mb-5">
        <form action="/request-update-profile" method="POST" enctype="multipart/form-data">
            @csrf
            <h3> {{ __('Your Profile') }} </h3>
            <div class="row mb-3">
                <div class="col-4 d-flex justify-content-center mt-3">
                    <img class="profile-img" src="{{ URL::asset(auth()->user()->display_picture_link) }}" alt="" width="300px" height="300px">
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="first_name" class="form-label"> {{__('First Name') }}</label>
                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="type here" autofocus value="{{ auth()->user()->first_name }}" required>
                        @error('first_name')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="form-label"> {{ __('Last Name') }} </label>
                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="type here" value="{{ auth()->user()->last_name }}" required>
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
                                @if (auth()->user()->gender_id === 1)
                                    <input class="form-check-input" type="radio" name="gender_id" id="gender_male" value="male" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="gender_id" id="gender_male" value="male">
                                @endif
                            </div>
                            <div class="form-check ms-5">
                                <label for="gender_female" class="form-check-label"> {{ __('Female') }} </label>
                                @if (auth()->user()->gender_id === 2)
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_female" value="female" checked>    
                                @else
                                    <input class="form-check-input" type="radio" name="gender_id" id="gender_female" value="female">    
                                @endif
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
                        <input type="password" class="form-control" name="password" id="password" placeholder="input new password here" required>
                        @error('password')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="middle_name" class="form-label"> {{ __('Middle Name') }} </label>
                        <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder="type here" value="{{ auth()->user()->middle_name }}">
                        @error('middle_name')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label"> {{ __('Email Address') }} </label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com" value="{{ auth()->user()->email }}" required>
                        @error('email')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <fieldset disabled>
                            <label id="role_selected" class="form-label"> {{ __('Role') }} </label>
                            <select id="role_selected" class="form-control form-select">
                                @if(auth()->user()->role_id === 1)
                                    <option value="1" selected> {{ __('Admin') }} </option>
                                @else
                                    <option value="2" selected> {{ __('User') }} </option>
                                @endif
                            </select>
                        </fieldset>
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
                <button type="submit" class="btn btn-submit btn-dark"> {{ __('Save') }} </button>
            </div>
        </form>
    </div>
@endsection