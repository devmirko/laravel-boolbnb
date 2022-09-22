<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/back.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/back.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light" style="background-color: black">
            <div class="container-fluid">
                <a class="navbar-brand bg-white" href="{{ route('home') }}">
                    <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24">
                </a>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

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
    </div>
</body>

</html>
