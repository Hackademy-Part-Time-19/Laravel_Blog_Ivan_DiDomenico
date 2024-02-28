@guest
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">MyBLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('articles.index')}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('categories.index')}}">Categorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('articles.create')}}">Crea Articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('categories.create')}}">Crea Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('contatti')}}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('generi.anime')}}">Generi Anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('generi.manga')}}">Generi Manga</a>
                </li>
                
                <li class="nav-item">
                    <button><a class="nav-link active" href="{{route('register')}}">Registrati</a></button>
                </li>
                <li class="nav-item">
                    <button><a class="nav-link active" href="{{route('login')}}">Login</a></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endguest

@auth

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">MyBLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('articles.index')}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('categories.index')}}">Categorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('articles.create')}}">Crea Articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('categories.create')}}">Crea Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('contatti')}}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('generi.anime')}}">Generi Anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('generi.manga')}}">Generi Manga</a>
                </li>
                
                
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                
            </ul>
        </div>
    </div>
</nav>

@endauth