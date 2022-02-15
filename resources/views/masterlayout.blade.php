<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" >
</head>
<body>
    {{-- Header --}}
    <header class="header-section">
        @auth
            <div class="row bg-dark text-white py-2">
                <div class="col text-center mt-2">
                    @if ($current_locale === 'en')
                        <a class="btn btn-light btn-sm" href="language/en"> English </a>
                        <a class="btn btn-secondary btn-sm" href="language/id"> Indonesia </a>
                    @else
                        <a class="btn btn-secondary btn-sm" href="language/en"> English </a>
                        <a class="btn btn-light btn-sm" href="language/id"> Indonesia </a>
                    @endif
                </div>

                <h1 class="col text-center">Amazing E-Book</h1>
                
                <div class="col text-center mt-2">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-light">{{__('Log Out')}}</button>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center bg-white navbar-home align-items-center py-1">
                <a href="/" class="me-5 custom-a-link text-decoration-none">{{__('Home')}}</a>
                <a href="/cart" class="me-5 custom-a-link text-decoration-none">{{__('Cart')}}</b>
                <a href="/profile" class="me-5 custom-a-link text-decoration-none">{{__('Profile')}}</a>
                @if (auth()->user()->role_id === 1)
                    {{-- for admin --}}
                    <a href="/maintenance-account" class="me-3 custom-a-link text-decoration-none">{{__('Account Maintenance')}}</a>
                @endif
            </div>
        @else
            <div class="row py-4 bg-dark text-white">
                <div class="col text-center mt-2">
                    @if ($current_locale === 'en')
                        <a class="btn btn-light btn-sm" href="language/en"> English </a>
                        <a class="btn btn-secondary btn-sm" href="language/id"> Indonesia </a>
                    @else
                        <a class="btn btn-secondary btn-sm" href="language/en"> English </a>
                        <a class="btn btn-light btn-sm" href="language/id"> Indonesia </a>
                    @endif    
                </div> 

                <h1 class="col text-center"> Amazing E-Book </h1>
                
                <div class="col text-center mt-2">
                    <a href="/signup"><button type="button" class="btn btn-secondary text-white"> {{ __('Sign Up') }} </button></a>
                    <a href="/login"><button type="button" class="btn btn-secondary text-white"> {{ __('Log In') }} </button></a>
                </div>
            </div>
        @endauth
    </header>

    {{-- body --}}
    <div class="layout-section">
        @yield('container')
    </div>

    {{-- footer --}}
    <footer>
        <h6 class="footer-section text-lg-center bg-dark text-white">
            © Amazing E-Book 2022
        </h6>
    </footer>
</body>
</html>