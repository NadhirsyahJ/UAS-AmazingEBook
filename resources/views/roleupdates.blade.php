@extends('masterlayout')

@section('container')
<div class="container content my-5 px-5">
    <form action="/request-update-role" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <h3 class="mb-5"> {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} </h3>
                <div class="mb-4">
                    <label for="id_role" class="form-label"> {{ __('Role') }} </label>
                    <select name="id_role" id="id_role" class="form-control form-select">
                        @if ($user->role_id === 1)
                            <option value="1" selected> {{ __('Admin') }} </option>
                            <option value="2"> {{ __('User') }} </option>
                        @else
                            <option value="1"> {{ __('Admin') }} </option>
                            <option value="2" selected> {{ __('User') }} </option>
                        @endif
                    </select>
                </div>
                <input type="hidden" name="id_account" value="{{ $user->account_id }}">
                <button type="submit" class="btn btn-warning mt-5"> {{ __('Save') }} </button>
            </div>
        </div>
    </form>
</div>
@endsection