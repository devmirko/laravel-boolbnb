<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-height navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('storage/logo/BBB ext large Alt.png') }}" alt="BBB logo" height="24">
            </a>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse justify-content-end">
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mr-3" href="{{ route('admin.houses.index') }}">
                            Vai ai tuoi
                            Appartamenti
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Ciao</a>
                    </li> --}}
                </ul>
                @else
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active mr-3" href="{{ route('login') }}">Accedi</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Registrati</a>
                        </li>
                    @endif
                </ul>
                @endauth
            </div>
            @endif
        </div>
    </nav>

    <div id="root"></div>

    <footer style="background-color: black" class="text-white">
        <div class="container-fluid text-center pt-5">
            <div class="row d-flex justify-content-between">
                <div class="col-sx-12 col-sm-4 col-lg-4 mb-4 small">
                    <h6>BBB srl</h6>
                    <span>Sede legale :</span>
                    <em>Via Gennaro 21/12</em>
                    <br>
                    <span>P.Iva :</span>
                    <em>12345678</em>

                </div>
                <div class="d-flex flex-column align-items-center col-sx-12 col-sm-4 col-lg-4 mb-5 px-2">
                    <h6>Cercaci</h6>
                    <div class="d-flex">
                        <div class="icons mx-4">
                            <img src="{{ asset ('storage/logo/FB2.png')}}" alt="" height="22">
                        </div>
                        <div class="icons mx-4">
                            <img src="{{ asset ('storage/logo/Ld.png')}}" alt="" height="22">
                        </div>
                        <div class="icons mx-4">
                            <img src="{{ asset ('storage/logo/Insta.png')}}" alt="" height="22">
                        </div>
                    </div>
                </div>
                <div class="col-sx-12 col-sm-4 col-lg-4 mb-5 small">
                    <h6>Bool BnB</h6>
                    <span>Telefono :</span>
                    <em>010 314164</em>
                    <br>
                    <span>E-Mail :</span>
                    <em>support@bbb.com</em>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/front.js') }}"></script>
</body>

</html>

<style>
    .navbar-height{
        height: 60px;
    }

    footer {
        height: 170px;
    }

</style>
