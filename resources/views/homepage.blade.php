@extends('masterlayout')

@section('container')
    <style>
        #bg-img{
            height: 50rem;
            background-size: cover;
            background-image: url({{ URL::asset('images/background/background1.jpg') }});
        }
        
    </style>

    @auth
        <div class="container py-5 px-5 table-content my-5">
            <h2 class="text-center mb-5"> {{ __('E-Book List') }} </h2>
            <table class="table table-secondary">
                <thead class="thead-dark text-dark">
                    <tr>
                      <th scope="col"> {{ __('Author') }}</th>
                      <th scope="col"> {{ __('Title') }} </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listEbook as $item)
                        <tr>
                            <td> {{ $item->author }} </td>
                            <td> <a href="/ebook-detail/{{ $item->ebook_id }}">{{ $item->title }}</a></td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div id="bg-img" class="d-flex flex-column align-items-center justify-content-center text-center h-10">
            <h2 class="title-center text-light"> <b>{{ __('Find And Rent Your E-Book Here!') }}</b> </h2>
            <h3 class="text-light"> <b>{{ __('Where you can find all Amazing Books!') }}</b></h3>
        </div>
    @endauth
@endsection
