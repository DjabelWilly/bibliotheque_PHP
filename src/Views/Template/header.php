<header class='mb-5'>
    <nav class="navbar bg-dark">
        <div class="container-fluid align-items-center">
            <a class="navbar-brand text-white ms-3">La Bibliothèque 2.0</a>
            <ul class="d-flex align-items-center gap-2 list-unstyled">
                <li class="d-flex align-items-center">
                    <a class="d-flex text-white text-decoration-none my-3 me-3" role="search"
                        href="?controller=HomeController&method=home"><svg xmlns="http://www.w3.org/2000/svg" width="26"
                            height="26" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                        </svg></a>
                </li>

                <li>
                    <a class="d-flex text-white text-decoration-none me-3" role="search"
                        href="?controller=SearchController&method=index"><svg xmlns="http://www.w3.org/2000/svg"
                            width="26" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg></a>
                </li>
                <li>
                    <a class="d-flex text-white text-decoration-none my-3 me-3" role="search"
                        href="?controller=LivreController&method=displayLivres">Livres</a>
                </li>
                <li>
                    <a class="d-flex text-white text-decoration-none my-3 me-3" role="search"
                        href="?controller=GenreController&method=displayGenres">Genre</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main class='container'>