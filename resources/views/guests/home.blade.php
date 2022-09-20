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
        <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-secondary">
            <div class="container-fluid p-lr">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24">
                </a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                    <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="register">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <nav class="navbar navbar-expand">
            <div class="container justify-content-between">
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" href="login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="register">Register</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav> --}}

        <div id="root"></div>

        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
