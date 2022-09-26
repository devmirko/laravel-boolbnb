<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light" style="background-color: #993923;">
            <div class="container-fluid">
                <a class="navbar-brand ms-3" href="{{ route('home') }}">
                    {{-- <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24"> --}}
                    <img src="{{ asset ('storage/logo/BBB logo large NEG.png')}}" alt="" height="50">

                </a>

                @if (Route::has('login'))
                    <div class="collapse navbar-collapse justify-content-end">
                        @auth
                            <li class="list-unstyled me-4">
                                <a class="nav-link active text-white" href="{{ route('admin.houses.index') }}">Admin</a>
                            </li>

                        @else
                            <li class="list-unstyled me-4">
                                <a class="nav-link active text-white" href="{{ route('login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="list-unstyled me-2">
                                <a class="nav-link active text-white" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>


        <div id="root"></div>

        <footer style="background-color: black" class="text-white">
            <div class="container-fluid text-center pt-5">
                <div class="row d-flex justify-content-between">
                    <div class="col-sx-12 col-sm-4 col-lg-4 mb-4">
                        <h6>LOCATION</h6>
                        <p>Indirizzo</p>
                    </div>
                    <div class="d-flex flex-column align-items-center col-sx-12 col-sm-4 col-lg-4 mb-5 px-2">
                        <h4>WEB</h4>
                        <div class="d-flex">
                            <div class="icons border border-white rounded-circle px-1 py-1 m-1">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="icons border border-white rounded-circle px-1 py-1 m-1">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                            <div class="icons border border-white rounded-circle px-1 py-1 m-1">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="icons border border-white rounded-circle px-1 py-1 m-1">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sx-12 col-sm-4 col-lg-4 mb-5">
                        <h6>ABOUT</h6>
                        <p>Text</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
