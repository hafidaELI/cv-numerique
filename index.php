<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de Hafida EL IDRISSI</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/animations.css">
    <link rel="stylesheet" href="public/assets/css/sections.css">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/icons/favicon.ico">
</head>

<body id="top">
    <!-- Navbar Desktop -->
    <nav class="navbar navbar-expand-lg bg-light border-bottom d-none d-lg-flex fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#top">
                <img src="public/assets/img/about/hei-logo.png" alt="Logo de Hafida EL IDRISSI" class="logo rounded">
            </a>

            <!-- Desktop Menu -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about-content"><i class="fa-solid fa-user nav-icon"></i><span>À
                            propos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#competences"><i
                            class="fa-solid fa-list-check nav-icon"></i><span>Compétences</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#formation"><i
                            class="fa-solid fa-graduation-cap nav-icon"></i><span>Formations</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience"><i
                            class="fa-solid fa-briefcase nav-icon"></i><span>Expériences</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#realisations"><i
                            class="fa-solid fa-palette nav-icon"></i><span>Réalisations</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-comment-dots nav-icon"></i><span>Contact</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="mailto:elidrissi-hafida@hotmail.fr">
                                <i class="fa-regular fa-envelope me-2 text-primary"></i>
                                <span>elidrissi-hafida@hotmail.fr</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="https://calendly.com/hafida-idrissi-hei" target="_blank">
                                <i class="fa-regular fa-calendar-check me-2 text-primary"></i>
                                <span>Prendre rendez-vous</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Navbar Mobile -->
    <div class="d-lg-none">
        <!-- Top Navbar -->
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand" href="#top">
                    <img src="public/assets/img/about/hei-logo.png" alt="Logo de Hafida EL IDRISSI"
                        class="logo rounded">
                </a>

                <!-- Contact Dropdown -->
                <div class="dropdown">
                    <a class="nav-link mobile-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-comment-dots nav-icon"></i><span>Contact</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="mailto:elidrissi-hafida@hotmail.fr">
                                <i class="fa-regular fa-envelope me-2 text-primary"></i>
                                <span>elidrissi-hafida@hotmail.fr</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="https://calendly.com/hafida-idrissi-hei" target="_blank">
                                <i class="fa-regular fa-calendar-check me-2 text-primary"></i>
                                <span>Prendre rendez-vous</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Bottom Navbar -->
        <div class="bottom-navbar">
            <ul class="nav justify-content-around">
                <li class="nav-item">
                    <a class="nav-link" href="#about-content"><i class="fa-solid fa-user nav-icon"></i><span>À
                            propos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#competences"><i
                            class="fa-solid fa-list-check nav-icon"></i><span>Compétences</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#formation"><i
                            class="fa-solid fa-graduation-cap nav-icon"></i><span>Formations</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience"><i
                            class="fa-solid fa-briefcase nav-icon"></i><span>Expériences</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#realisations"><i
                            class="fa-solid fa-palette nav-icon"></i><span>Réalisations</span></a>
                </li>
            </ul>
        </div>
    </div>

    <main class="mt-5">
        <!-- Section principale pour l'accueil -->
        <section class="hero-section">
            <!-- Image d'accueil -->
            <div class="hero-image">
                <img src="public/assets/img/about/background-img-8.png"
                    alt="Fond d'accueil pour le CV de Hafida EL IDRISSI">
            </div>
            <!-- Conteneur de profil -->
            <div class="profile-wrapper">
                <div class="profile-container">
                    <div class="profile-badge">
                        <img src="public/assets/img/about/profil-img-opentowork.png" alt="Photo de profil" class="profile-pic">
                    </div>
                </div>
                <!-- Informations de profil -->
                <div class="profile-info">
                    <h1>Hafida EL IDRISSI</h1>
                    <h2>Développeuse Web en devenir</h2>
                    <p>Amiens-Lille-Paris · <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Coordonnées</a></p>
                    <!-- Modal Bootstrap -->
                    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contactModalLabel">Coordonnées</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="fa-brands fa-linkedin fs-5 me-3 text-secondary"></i>
                                                <span class="fw-bold">Profil LinkedIn</span>
                                            </div>
                                            <div class="ps-4 text-start">
                                                <a href="https://www.linkedin.com/in/hafida-el-idrissi-ba7259a8" target="_blank" class="text-decoration-none">linkedin.com/in/hafida-el-idrissi-ba7259a8</a>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="fa-brands fa-github fs-5 me-3 text-secondary"></i>
                                                <span class="fw-bold">Profil GitHub</span>
                                            </div>
                                            <div class="ps-4 text-start">
                                                <a href="https://github.com/hafidaELI" target="_blank" class="text-decoration-none">https://github.com/hafidaELI</a>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="fa-regular fa-envelope fs-5 me-3 text-secondary"></i>
                                                <span class="fw-bold">E-mail</span>
                                            </div>
                                            <div class="ps-4 text-start">
                                                <a href="mailto:elidrissi-hafida@hotmail.fr" class="text-decoration-none">elidrissi-hafida@hotmail.fr</a>
                                            </div>
                                        </li>
                                        <!-- <li class="mb-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="fa-regular fa-calendar fs-5 me-3 text-secondary"></i>
                                                <span class="fw-bold">Anniversaire</span>
                                            </div>
                                            <div class="ps-4 text-start">Décembre 1992</div>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="button-container">
                        <a href="mailto:elidrissi-hafida@hotmail.fr" class="btn btn-msg" role="button"><i class="fa-regular fa-paper-plane"></i> Message</a>

                        <!-- Bouton "Plus" avec menu déroulant -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-plus " data-bs-toggle="dropdown" aria-expanded="false">
                                Plus
                            </button>
                            <ul class="dropdown-menu">
                                <!-- Partager le profil -->
                                <li>
                                    <a class="dropdown-item" href="#" onclick="shareProfile()"> <i class="fa-solid fa-share"></i> Partager le profil</a>
                                </li>
                                <!-- Télécharger le PDF -->
                                <li>
                                    <a class="dropdown-item" href="/public/assets/cv/cv-hafida-elidrissi.pdf" target="_blank"> <i class="fa-solid fa-download"></i> Enregistrer au format PDF</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sections -->
        <div class="container my-5">
            <div class="row">
                <!-- Colonne "À propos" -->
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <section id="about-content" class="content-section p-4">
                        <h3>À propos</h3>
                        <p>
                            Après plus de 9 ans dans le secteur bancaire, j’ai choisi de me réinventer en me lançant
                            dans le
                            développement web : une reconversion qui m’a permis de canaliser ma curiosité et mon
                            esprit
                            analytique dans des projets techniques et créatifs !
                        </p>
                        <p>
                            L'obtention d'un premier diplôme était pour moi qu'une première étape à mon souhait de
                            me
                            rapprocher un peu plus de l'expertise que je vise, c’est pourquoi, je recherche
                            aujourd’hui
                            à
                            développer mes compétences dans le cadre d’une <strong>alternance en Licence Concepteur
                                Développeur d’Applications</strong>.
                        </p>
                        <p>
                            Curieuse, motivée et organisée, j’aime explorer de nouvelles idées et technologies pour
                            concevoir des solutions fonctionnelles et esthétiques : Hâte de partager cette aventure
                            avec
                            vous !
                        </p>
                    </section>
                </div>
                <!-- Colonne "Autre" -->
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <section id="other-content" class="content-section p-4">
                        <div class="other-content">
                            <h3>Autre</h3>
                            <ul>
                                <li>
                                    <div class="icon-container">
                                        <img src="public/assets/img/about/car.jpg" alt="Permis">
                                    </div>
                                    Permis B et véhiculée
                                </li>
                                <li>
                                    <div class="icon-container">
                                        <img src="public/assets/img/about/callnow.jpg" alt="Disponibilité">
                                    </div>
                                    <span>Disponible dès maintenant</span>
                                </li>
                                <li>
                                    <div class="icon-container">
                                        <img src="public/assets/img/about/poterie.jpg" alt="Hobby">
                                    </div>
                                    Pratique la céramique
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Autres sections -->
        <div class="container">
            <section id="competences" class="content-section p-4 mb-4">
                <h3>Compétences</h3>
                <div class="competences-grid">
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/html5.png" alt="HTML5" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/css3.png" alt="CSS3" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/javascript.png" alt="JavaScript" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/bootstrap.png" alt="Bootstrap" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/mysql.png" alt="MySQL" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/php.png" alt="PHP" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/github.png" alt="GitHub" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/trello.png" alt="Trello" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/docker.png" alt="Docker" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/wordpress.png" alt="WordPress" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/figma.png" alt="Figma" class="tech-icon">
                    </div>
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/canva.png" alt="Canva" class="tech-icon">
                    </div>
                </div>
                <h3>Exploration en cours</h3>
                <div class="competences-grid">
                    <div class="competence-item fade-in">
                        <img src="public/assets/img/icons/react.png" alt="React" class="tech-icon">
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="formation" class="content-section p-4 mb-4">
                <h3>Formations</h3>
                <div class="formation-list">
                    <!-- <div class="formation-item fade-in">
                        <div class="formation-logo">
                            <img src="public/assets/img/logos/oclock.png" alt="O'clock">
                        </div>
                        <div class="formation-content">
                            <h4>O'clock - École Tech développeur web</h4>
                            <p>Concepteur développeur d'application - Titre professionnel (TP) de niveau 6</p>
                            <span class="formation-date">Janv. 2025 - Sept. 2025</span>
                        </div>
                    </div> -->
                    <div class="formation-item fade-in">
                        <div class="formation-logo">
                            <img src="public/assets/img/logos/lamanu.png" alt="la Manu">
                        </div>
                        <div class="formation-content">
                            <h4>La Manu - École Supérieure des Métiers du Numérique</h4>
                            <p>Concepteur développeur d'application - Titre professionnel (TP) de niveau 6</p>
                            <span class="formation-date">Mars 2025 - Juin. 2026</span>
                        </div>
                    </div>
                    <div class="formation-item fade-in">
                        <div class="formation-logo">
                            <img src="public/assets/img/logos/lamanu.png" alt="La Manu">
                        </div>
                        <div class="formation-content">
                            <h4>La Manu - École Supérieure des Métiers du Numérique</h4>
                            <p>Développeur Web & Web mobile - Titre professionnel (TP) de niveau 5</p>
                            <span class="formation-date">Févr. 2024 - Sept. 2024</span>
                        </div>
                    </div>

                    <div class="formation-item fade-in">
                        <div class="formation-logo">
                            <img src="public/assets/img/logos/upjv.png" alt="UPJV">
                        </div>
                        <div class="formation-content">
                            <h4>Université de Picardie Jules Verne (UPJV)</h4>
                            <p>Licence professionnelle Banque, Assurance, Finance en alternance au CFNE</p>
                            <span class="formation-date">Sept. 2015 - Juil. 2016</span>
                        </div>
                    </div>

                    <div class="formation-item fade-in">
                        <div class="formation-logo">
                            <img src="public/assets/img/logos/iut.jpg" alt="IUT Amiens">
                        </div>
                        <div class="formation-content">
                            <h4>Institut Universitaire de Technologie d'Amiens</h4>
                            <p>Diplôme Universitaire de Technologie, Techniques de Commercialisation</p>
                            <span class="formation-date">Sept. 2011 - Juil. 2014</span>
                        </div>
                    </div>

                    <div class="formation-item fade-in">
                        <div class="formation-logo">
                            <img src="public/assets/img/logos/madeleine.png" alt="Lycée Madeleine Michelis">
                        </div>
                        <div class="formation-content">
                            <h4>Lycée Madeleine Michelis - Amiens</h4>
                            <p>Baccalauréat Économique et Sociales - Spé Sciences Économiques et Sociales</p>
                            <span class="formation-date">Sept. 2010 - Juil. 2011</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="experience" class="content-section p-4 mb-4">
                <h3>Expériences</h3>
                <div class="experience-list">
                    <div class="experience-item fade-in">
                        <div class="experience-logo">
                            <img src="public/assets/img/logos/cmne.png" alt="Crédit Mutuel">
                        </div>
                        <div class="experience-content">
                            <div class="experience-header">
                                <h4>Conseillère gestionnaire de clientèle de particulier </h4>
                                <p class="experience-company">Crédit Mutuel Nord Europe - CDI</p>
                                <div class="experience-details">
                                    <span class="experience-date">Sept. 2015 - Févr. 2024</span>
                                    <span class="experience-location">Amiens, Hauts-de-France, France </span>
                                </div>
                            </div>
                            <ul class="experience-tasks">
                                <li>Relation Client : Accompagnement personnalisé et gestion d’un portefeuille de
                                    particuliers, analyse des besoins, et offre de solutions adaptées.</li>
                                <li>Développement Commercial : Commercialisation de produits bancaires (épargne,
                                    crédits) et d’assurances (prévoyance, biens, santé). Mise en place et suivi de
                                    challenges commerciaux (crédit, prévoyance).</li>
                                <li>Gestion Opérationnelle : Montage de dossiers et financements personnalisés, suivi
                                    rigoureux des contrats et opérations.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="realisations" class="content-section p-4 mb-4">
                <h3>Réalisations</h3>
                <div class="realisation-list">
                    <div class="row g-4">
                        <!-- Projet 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 project-card fade-in">
                                <a href="https://lamaisondelha.alwaysdata.net/" target="_blank" class="project-image-link">
                                    <img src="public/assets/img/projects/maison-elha.png" class="card-img-top project-image"
                                        alt="La maison d'ElHa">
                                </a>
                                <div class="card-body">
                                    <a href="https://lamaisondelha.alwaysdata.net/" target="_blank" class="project-title text-decoration-none">
                                        <h5 class="card-title">La maison d'ElHa</h5>
                                    </a>
                                    <div class="project-tags mb-3">
                                        <span class="badge badge-html">HTML</span>
                                        <span class="badge badge-css">CSS</span>
                                        <span class="badge badge-php">PHP</span>
                                        <span class="badge badge-sql">SQL</span>
                                        <span class="badge badge-js">JavaScript</span>
                                    </div>
                                    <p class="card-text">Création d'un site de présentation d'un artisan potier (Projet de
                                        fin de formation de développeur web & web mobile)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Projet 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 project-card fade-in">
                                <a href="https://el-idrissi.alwaysdata.net/" target="_blank" class="project-image-link">
                                    <img src="public/assets/img/projects/jeu-pendu.png" class="card-img-top project-image"
                                        alt="Le jeu du pendu">
                                </a>
                                <div class="card-body">
                                    <a href="https://el-idrissi.alwaysdata.net/" target="_blank" class="project-title text-decoration-none">
                                        <h5 class="card-title">Le jeu du pendu</h5>
                                    </a>
                                    <div class="project-tags mb-3">
                                        <span class="badge badge-html">HTML</span>
                                        <span class="badge badge-css">CSS</span>
                                        <span class="badge badge-js">JavaScript</span>
                                    </div>
                                    <p class="card-text">Développement d'un jeu du pendu interactif en JavaScript</p>
                                </div>
                            </div>
                        </div>

                        <!-- Projet 3 -->
                        <!-- <div class="col-lg-4 col-md-6">
                            <div class="card h-100 project-card fade-in">
                                <a href="https://votre-lien-3.com" class="project-image-link">
                                    <img src="public/assets/img/projects/jeu-yams.png" class="card-img-top project-image"
                                        alt="Le jeu Yams">
                                </a>
                                <div class="card-body">
                                    <a href="https://lien-3.com" class="project-title text-decoration-none">
                                        <h5 class="card-title">Le jeu Yams</h5>
                                    </a>
                                    <div class="project-tags mb-3">
                                        <span class="badge bg-light text-dark">React</span>
                                        <span class="badge bg-light text-dark">Node.js</span>
                                        <span class="badge bg-light text-dark">MongoDB</span>
                                    </div>
                                    <p class="card-text">Description du troisième projet</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- Projet 4 -->
                        <!-- <div class="col-lg-4 col-md-6">
                        <div class="card h-100 project-card fade-in">
                            <a href="https://votre-lien-3.com" class="project-image-link">
                                <img src="public/assets/img/projects/jeu-yams.png" class="card-img-top project-image"
                                    alt="Le Pokedex">
                            </a>
                            <div class="card-body">
                                <a href="https://votre-lien-3.com" class="project-title text-decoration-none">
                                    <h5 class="card-title">Le Pokedex</h5>
                                </a>
                                <div class="project-tags mb-3">
                                    <span class="badge bg-light text-dark">React</span>
                                    <span class="badge bg-light text-dark">Node.js</span>
                                    <span class="badge bg-light text-dark">MongoDB</span>
                                </div>
                                <p class="card-text">Description du quatrième projet</p>
                            </div>
                        </div>
                    </div> -->

                    </div>
                </div>
            </section>
        </div>

        <!-- <div class="container">
            <section id="contact" class="content-section p-4 mb-4">
                <h3>Contact</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body p-5">

                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div> -->
    </main>

    <!-- Bouton retour en haut -->
    <button id="back-to-top" class="back-to-top-btn" aria-label="Retour en haut">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <footer class="d-flex justify-content-center align-items-center py-3 bg-light">
        <!-- Section gauche (LinkedIn et GitHub) -->
        <div class="d-flex align-items-center me-3">
            <a href="https://www.linkedin.com/in/hafida-el-idrissi-ba7259a8" target="_blank" class="footer-icon mx-2">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/hafidaELI" target="_blank" class="footer-icon mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Copyright -->
        <div class="text-center mx-3">
            <span>Hafida EL IDRISSI &copy; <?= date('Y') ?> Tous droits réservés.</span>

        </div>
        <!-- Section droite (Imprimante et Message) -->
        <div class="d-flex align-items-center">
            <a href="/public/assets/cv/cv-hafida-elidrissi.pdf" target="_blank" class="footer-icon mx-2">
                <i class="fas fa-print"></i>
            </a>
            <a href="mailto:elidrissi-hafida@hotmail.fr" class="footer-icon mx-2">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/afc6a54030.js" crossorigin="anonymous"></script>

    <script src="public/assets/js/scroll.js"></script>
    <script src="public/assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>