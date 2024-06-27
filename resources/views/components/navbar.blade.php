<nav class="navbar navbar-expand-lg bg-body-tertiary nav-vh">
    <div class="container-fluid">
        <a class="ms-4" href="/"><img src="/media/logo-light.png" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active" aria-current="page" href="#">Use the crittopedia</a>

                @if (Route::has('login'))
                    @auth
                        <a class="nav-link active" aria-current="page" href="{{ url('/profile') }}">Profile</a>
                    @else
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>
