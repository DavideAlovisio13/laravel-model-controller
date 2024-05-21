<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Movies and Books</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() == 'movies.index' ? 'active' : ''}}" href="{{route('movies.index')}}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>