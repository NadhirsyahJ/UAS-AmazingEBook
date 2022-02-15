@extends('masterlayout')

@section('container')
    @if(session()->has('success-rent'))
    <div class="container justify-content-center mt-3 mb-3 d-flex">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-rent') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    <div class="container content my-5 px-5">
        <h2 class="text-center mb-5"> {{ __('E-Book Detail') }} </h2>

        <div class="row mb-5">
            <div class="col-3">
                {{ __('Title') }}
            </div>
            <div class="col-9">
                {{ $bookdetail->title }}
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-3">
                {{ __('Author') }}
            </div>
            <div class="col-9">
                {{ $bookdetail->author }}
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-3">
                {{ __('Description') }}
            </div>
            <div class="col-9">
                {{ $bookdetail->description }}
            </div>
        </div>

        <form class="text-center" action="/request-rent" method="POST">
            @csrf
            <input type="hidden" name="item" id="item" value="{{ $bookdetail->ebook_id }}">
            <button type="submit" class="btn btn-dark px-5" > {{ __('Rent') }}</button>
        </form>
    </div>
@endsection