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
    <ul class="navbar-links">
        <li><a href="{{ asset('images/cvoliang.pdf') }}"><i class="bi bi-file-earmark-pdf"></i>CV (English)</a></li>
        <li><a href="{{ asset('images/CVOlivierfr.pdf') }}"><i class="bi bi-file-earmark-pdf"></i>CV (Français)</a></li>
    </ul>
    <div class="navbar-menu navbar-burger">
        <ul class="navbar-links">
            <li><a href="#about">Parcours</a></li>
            <li><a href="#skills">Mes outils</a></li>
            <li><a href="#experience">Mes projets</a></li>
        </ul>
    </div>
    <div class="credit">
        <p>&copy; 2023 Olivier Dourdin</p>
    </div>
</nav>

<div class="container">
    <div class="timeline-wrapper">
        <h1 class="title-principal" id="about">Parcours</h1>
        <h1 class="title">Scolaire</h1>
        <ul class="timeline">
            <li class="event">
                <h3 class="event-title">Baccalauréat Technologique</h3>
                <div class="event-details">
                    <p><strong>2019-2022</strong></p>
                    <p><strong>Lycée André Malraux, Béthune</strong></p>
                    <p><strong>STI2D</strong></p>
                    <p>1ère et Terminal STI2D
                        (sciences et technologies de l'industrie
                        et du développement durable)</p>
                </div>
            </li>
            <li class="event">
                <h3 class="event-title">1ère année de BUT Info</h3>
                <div class="event-details">
                    <p><strong>Depuis Septembre 2022</strong></p>
                    <p><strong>IUT, Lens</strong></p>
                    <p><strong>BUT Informatique</strong></p>
                </div>
            </li>
        </ul>
        <h1 class="title">Professionnel</h1>
        <ul class="timeline">
            <li class="event">
                <h3 class="event-title">Job d'été</h3>
                <div class="event-details">
                    <p><strong>Juillet - Août 2023 </strong></p>
                    <p><strong>Récolte de culture</strong></p>
                </div>
            </li>
        </ul>
    </div>


    <div class="skills-wrapper">
        <h1 class="title-principal" id="skills">Mes outils</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-window-fullscreen"></i>
                        <h5 class="card-title">IntelliJ</h5>
                        <h5 class="card-title">PhpStorm</h5>
                        <h5 class="card-title">Visual Studio Code</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-git"></i>
                        <h5 class="card-title">Git</h5>
                        <h5 class="card-title">GitLab</h5>
                        <h5 class="card-title">GitHub</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-brands fa-linux"></i>
                        <h5 class="card-title">Linux</h5>
                        <h5 class="card-title">Windows</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-brands fa-python"></i>
                        <h5 class="card-title">Python, Flask</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-database"></i>
                        <h5 class="card-title">SQL, PostgreSQL</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-brands fa-java"></i>
                        <h5 class="card-title">Java, JavaFX</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-brands fa-html5"></i>
                        <h5 class="card-title">HTML, CSS</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-brands fa-php"></i>
                        <h5 class="card-title">PHP, Laravel</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="projects-wrapper">
        <h1 class="title-principal" id="experience">Mes projets</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('images/logo_02.svg') }}" class="card-img-top" alt="Image du projet">
                        <h5 class="card-title">Marathon Web</h5>
                        <p class="card-text">Site web, qui permet de repertorier les différentes histoires que l'utilsateur a pu créer. Création d'une histoire où l'utilisateur est le héros.</p>
                        <a href="{{ route('marathon') }}" class="btn btn-primary">Voir le projet</a>
                        <div class="card-footer">
                            <span class="badge rounded-pill" style="background-color: #2e9d40">PHP</span>
                            <span class="badge rounded-pill" style="background-color: #2e9d40">Laravel</span>
                            <span class="badge rounded-pill" style="background-color: #2e9d40">Site Web</span>
                            <span class="badge rounded-pill" style="background-color: #2e9d40">Equipe</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('images/sapceinvader.png') }}" class="card-img-top" alt="Image du projet">
                        <h5 class="card-title">Space Invaders</h5>
                        <p class="card-text">Projet réalisé en plusieurs séances, qui consiste à créer un jeu Space Invaders en Java.</p>
                        <a href="{{ route('spaceinvaders') }}" class="btn btn-primary">Voir le projet</a>
                        <div class="card-footer">
                            <span class="badge rounded-pill" style="background-color: #2e9d40">JavaFX</span>
                            <span class="badge rounded-pill" style="background-color: #2e9d40">Jeu</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
