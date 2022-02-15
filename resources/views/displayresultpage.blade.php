@extends('masterlayout')

@section('container')
    <style>
        #bg-img{
            height: 50rem;
            background-size: cover;
            background-image: url({{ URL::asset('images/background/background1.jpg') }});
        }
    </style>

    <div id="bg-img" class="d-flex flex-column align-items-center justify-content-center text-center h-10">
        <h2 class="title-center text-light mb-5"> {{ __($resulttitle) }} </h2>
        <h5 class="btn btn-dark py-1 px-5"> <a href="/"> {{ __('Click here to "Home"') }} </a></h5>
    </div>
@endsection