<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h2>Sixteen <em>Clothing</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    @foreach ($nav_links as $link)
                        <li class="nav-item {{ request()->routeIs($link->name) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route($link->name) }}">{{ $link->text }}</a>
                        </li>
                    @endforeach

                    @auth
                        <li class="nav-item">
                            <a class="filled-button" href="{{ route('dashboard.index') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="filled-button" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
