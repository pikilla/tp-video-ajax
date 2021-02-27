<?php 
require_once 'deconnexion.php';
//header non connecter
$header="<header>
<nav
    class='navbar navbar-expand-md navbar-dark bg-dark'
    aria-label='barre de nav'
>
    <div class='container-fluid'>
        <!-- Logo -->
        <a class='navbar-brand' href='../controller/routing/routing_accueil.php'>
            <img
                class='w-25'
                src='./ressources/logo_blanc.png'
                alt=''
            />
        </a>
        <button
            class='navbar-toggler'
            type='button'
            data-bs-toggle='collapse'
            data-bs-target='#navbarsExample04'
            aria-controls='navbarsExample04'
            aria-expanded='false'
            aria-label='Toggle navigation'
        >
            <span class='navbar-toggler-icon'></span>
        </button>
        <div
            class='collapse navbar-collapse justify-content-end'
            id='navbarsExample04'
        >
            <ul class='navbar-nav ml-auto mb-2 mb-md-0'>
            <li class='nav-item dropdown' id='mobile'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
              Catégorie
            </a>
            <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <li><a class='dropdown-item' href='../controller/routing/routing_cinema.php'>Cinema</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_theatre.php'>Theatre</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_musique.php'>Musique</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_jeux.php'>Jeux</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_danse.php'>Danse</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_mannequinat.php'>Mannequinat</a></li>
            </ul>
          </li>
         
            
                <li class='nav-item mx-3'>
                    <!-- Bouton connexion -->
                    <a class='nav-link' aria-current='page' href='../controller/routing/routing_connection.php'
                        >Connexion</a
                    >
                </li>
                <li class='nav-item mx-3'>
                    <!-- Bouton inscription -->
                    <a class='nav-link' aria-current='page' href='../controller/routing/routing_inscription.php'
                        >Inscription</a
                    >
                </li>

            
            </ul>
          
        </div>
    </div>
</nav>
</header>";

//header connecter
$header_connecte="<header>
<nav
    class='navbar navbar-expand-md navbar-dark bg-dark'
    aria-label='barre de nav'
>
    <div class='container-fluid'>
        <!-- Logo -->
        <a class='navbar-brand' href='../controller/routing/routing_accueil.php'>
            <img
                class='w-25'
                src='./ressources/logo_blanc.png'
                alt=''
            />
        </a>
        <button
            class='navbar-toggler'
            type='button'
            data-bs-toggle='collapse'
            data-bs-target='#navbarsExample04'
            aria-controls='navbarsExample04'
            aria-expanded='false'
            aria-label='Toggle navigation'
        >
            <span class='navbar-toggler-icon'></span>
        </button>
        <div
            class='collapse navbar-collapse justify-content-end'
            id='navbarsExample04'
        >
            <ul class='navbar-nav ml-auto mb-2 mb-md-0'>
            <li class='nav-item dropdown' id='mobile'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
              Catégorie
            </a>
            <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <li><a class='dropdown-item' href='../controller/routing/routing_cinema.php'>Cinema</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_theatre.php'>Theatre</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_musique.php'>Musique</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_jeux.php'>Jeux</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_danse.php'>Danse</a></li>
              <li><a class='dropdown-item' href='../controller/routing/routing_mannequinat.php'>Mannequinat</a></li>
            </ul>
          </li>
                <li class='nav-item mx-3'>
                    <!-- Bouton Gestion de profil -->
                    <a class='nav-link' aria-current='page' href='../controller/routing/routing_gestion_profil.php'
                        >Gestion de profil</a
                    >
                </li>
$deconnexion
            </ul>
            
        </div>
    </div>
</nav>
</header>";

// <form>
// <!-- Barre de recherche -->
// <input
//     class='form-control'
//     type='text'
//     placeholder='recherche'
//     aria-label='Search'
// />
// </form>
?>