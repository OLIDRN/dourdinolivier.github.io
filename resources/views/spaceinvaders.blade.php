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
            <h1 class="title-principal">Space Invaders</h1>
            <p>Lien vers le projet
                <a href="https://github.com/OLIDRN/SpaceInVaders">ici</a>
            </p>
            <div class="tags-container d-flex justify-content-center">
                <p class="tags">JavaFX</p>
                <p class="tags">Jeu</p>
            </div>
        </header>

        <section class="media">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <video controls class="video-size mx-auto d-block">
                        <source src="{{ asset('images/videospace.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <section class="description">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="project-title">Description</h2>
                    <p class="project-description">
                        Space Invaders est un jeu vidéo de type shoot 'em up fixe. Le joueur contrôle un canon laser se déplaçant horizontalement au bas de l'écran. Des rangées d'aliens se déplacent horizontalement en haut de l'écran et descendent progressivement vers le bas. Le joueur doit tirer sur les aliens pour les détruire avant qu'ils n'atteignent le bas. Si un alien touche le canon laser du joueur, le joueur perd une vie.
                    </p>
                </div>
            </div>
        </section>

        <section class="description">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="project-title">Architecture du projet</h2>
                    <pre class="project-description"><code>
└───main
    ├───java
    │   └───spaceinvader
    │       └───spaceinvader
    │           ├───controller
    │           └───model
    └───resources
        └───spaceinvader
            └───spaceinvader
                ├───asterix
                ├───base
                ├───losc
                ├───starwars
                └───view
                        </code>
            </pre>
                    <li>
                        <code>/controller</code>
                        : contient les classes qui gèrent les événements de l'application.
                    </li>
                    <li>
                        <code>/model</code>
                        : contient les classes qui gèrent les données de l'application.
                    </li>
                    <li>
                        <code>/resources</code>
                        : contient les différents thèmes du jeu.
                    </li>
                    <li>
                        <code>/base</code>
                        : contient les classes qui gèrent l'affichage du thème de base.
                    </li>
                    <li>
                        <code>/asterix</code>
                        : contient les classes qui gèrent l'affichage du thème Astérix.
                    </li>
                    <li>
                        <code>/losc</code>
                        : contient les classes qui gèrent l'affichage du thème LOSC.
                    </li>
                </div>
            </div>
        </section>

        <section class="code">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="project-title">Code</h2>
                    <pre class="project-description" style="color:#f8f8f2;background-color:#272822;-moz-tab-size:4;-o-tab-size:4;tab-size:4">
                        <code class="language-java" data-lang="java">
    @Override
    public void setGameGrid(GameGrid gameGrid) {
        labelle.setVisible(false);
        for (int i = 0; i < 10; i++) {
            for (int j = 0; j < 20; j++) {
                labels[i][j] = new Label();
                Label label = labels[i][j];
                label.setMinSize(50, 50);
                label.setBackground(createBackground("back"));
                this.gameGrid.add(label, j, i);
                extracted(gameGrid, i, j);
            }
        }
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
                        La méthode <code>setGameGrid</code> est utilisée pour initialiser la grille de jeu. Elle commence par rendre le label invisible. Ensuite, elle parcourt chaque cellule de la grille de jeu (10 lignes et 20 colonnes) et pour chaque cellule, elle crée un nouveau label, définit sa taille minimale à 50x50, définit son arrière-plan et l'ajoute à la grille de jeu. Enfin, elle appelle la méthode <code>extracted</code> avec la grille de jeu et les indices de la cellule actuelle.
                    </p>
                </div>
            </div>
        </section>
    </div>

@endsection
