
<nav class="navbar navbar-expand-lg navbar-expand-sm bg-dark">
    <div class="container-fluid p-lr">
        <a class="navbar-brand bg-white" href="{{ route('home') }}">
            <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24">
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav px-3 ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>











