@extends('layouts.app')

@section('content')
<nav class="navbar">
    <div class="navbar-brand">
        <img class="profile-pic" src="{{ asset('images/DSC03460.jpg') }}" alt="profile picture">
        <h3 class="name">Olivier Dourdin</h3>
        <h5 class="job-title">Étudiant | 2ème année BUT Informatique</h5>
        <h5 class="job-title">Développeur Backend</h5>
    </div>
    <ul class="navbar-links">
        <li><a href="https://github.com/OLIDRN"><i class="bi bi-github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/olivier-dourdin-3a58a6268/"><i class="bi bi-linkedin"></i></a></li>
        <li><a href="mailto:olivierdourdin148@gmail.com"><i class="bi bi-envelope-fill"></i></a></li>
    </ul>
    <div class="navbar-menu">
        <ul class="navbar-links">
            <li><a href="/#about">Parcours</a></li>
            <li><a href="/#skills">Mes outils</a></li>
            <li><a href="/#experience">Mes projets</a></li>
        </ul>
    </div>
    <div class="credit">
        <p>&copy; 2023 Olivier Dourdin</p>
    </div>
</nav>

<div class="container">
    <header class="header text-center">
        <h1 class="title-principal">Marathon Web - Gold Decision</h1>
        <p>Lien vers le projet
        <a href="https://github.com/OLIDRN/marathon-web">ici</a>
        </p>
        <div class="tags-container d-flex justify-content-center">
            <p class="tags">PHP</p>
            <p class="tags">Laravel</p>
            <p class="tags">Site Web</p>
            <p class="tags">Equipe</p>
        </div>
    </header>

    <section class="media">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <video controls class="video-size mx-auto d-block">
                    <source src="{{ asset('images/presentationsite.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <section class="description">
        <div class="row">
            <div class="col-md-12">
                <h2 class="project-title">Description</h2>
                <p class="project-description">
                    Site web, qui permet de repertorier les différentes histoires que l'utilsateur a pu créer. Création d'une histoire où l'utilisateur est le héros. Il peut choisir entre plusieurs choix qui influenceront la suite de l'histoire. Il peut également créer des histoires.
                </p>
            </div>
        </div>
    </section>

    <section class="description">
        <div class="row">
            <div class="col-md-12">
                <h2 class="project-title">Architecture du projet</h2>
                <pre class="project-description"><code>
├───app
│   ├───Actions
│   │   └───Fortify
│   ├───Console
│   ├───Exceptions
│   ├───Http
│   │   ├───Controllers
│   │   └───Middleware
│   ├───Models
│   ├───Providers
│   └───View
│       └───Components
├───routes
├───storage
│   ├───app
│   │   └───public
│   │       └───photos
├───resources
│   ├───binaries
│   ├───css
│   ├───docs
│   │   └───images
│   ├───fonts
│   │   └───Shadows_Into_Light_Two
│   ├───images
│   ├───js
│   └───views
│       ├───auth
│       ├───chapitres
│       ├───components
│       ├───equipes
│       ├───errors
│       ├───histoire
│       ├───templates
│       └───user



                        </code>
            </pre>
                <li>
                    <code>/actions</code>
                    : contient les classes qui gèrent les événements de l'application (controllers, middleware, models, authentification, etc.).
                </li>
                <li>
                    <code>/routes</code>
                    : contient les routes de l'application.
                </li>
                <li>
                    <code>/storage</code>
                    : contient les fichiers de l'application (photos, etc.).
                </li>
                <li>
                    <code>/resources</code>
                    : contient les fichiers de l'application (vues,css, js, images, etc.).
                </li>
            </div>
        </div>
    </section>

    <section class="code">
        <div class="row">
            <div class="col-md-12">
                <h2 class="project-title">Code</h2>
                <pre class="project-description" style="color:#f8f8f2;background-color:#272822;-moz-tab-size:4;-o-tab-size:4;tab-size:4; border-radius: 10px">
                        <code class="language-java" data-lang="java">
        public function index(Request $request){
        $cat = $request->input('cat', null);
        if (isset($cat)) {
            $histoire = Histoire::where('genre_id', $cat)->get();

        } else {
            $histoire = Histoire::all();
        }

        $genres = Genre::all();

        return view('histoire.index', ['histoire' => $histoire, 'cat' => $cat, 'genres' => $genres]);
    }

                        </code>
                    </pre>
            </div>
        </div>
    </section>

    <section class="code-explanation">
        <div class="row">
            <div class="col-md-12">
                <h2 class="project-title">Explication du code</h2>
                <p class="project-description">
                    Cette fonction permet de trier les histoires en fonction du genre choisi par l'utilisateur. Si aucun genre n'est choisi, alors toutes les histoires sont récupérées.
                </p>
            </div>
        </div>
    </section>
</div>

@endsection

