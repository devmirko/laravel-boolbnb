<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset ('storage/logo/BBB ext large Alt.png')}}" alt="" height="24">
        </a>
        {{-- <img src="https://cdn.discordapp.com/attachments/1013789688995258529/1018927773735207003/Tavola_disegno_13x.png" alt="" width="100%" height="24"> --}}
        <div class="collapse navbar-collapse justify-content-end">
            <li class="list-unstyled me-4">
                <a class="nav-link btn btn-light p-1" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                >
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </div>
    </div>
</nav>

<style>
    .navbar{
        background-color: black
    }
</style>









