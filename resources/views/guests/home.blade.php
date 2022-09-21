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
        <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-white">
            <div class="container-fluid p-lr">
                <a class="navbar-brand bg-white" href="{{ route('home') }}">
                    <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24">
                </a>

                @if (Route::has('login'))
                    <div class="collapse navbar-collapse justify-content-end">
                        @auth
                            <li class="nav-item list-unstyled">
                                <a class="nav-link active text-dark" href="{{ route('admin.dashboard') }}">Admin</a>
                            </li>

                        @else
                            <li class="nav-item m-1 list-unstyled">
                                <a class="nav-link active text-dark" href="{{ route('login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item m-1 list-unstyled">
                                <a class="nav-link active text-dark" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>


        <div id="root"></div>

        <footer class="mt-3">
            <div class="container-fluid text-center bg-dark text-white pt-5">
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
