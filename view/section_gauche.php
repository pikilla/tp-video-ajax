<?php
require_once '../modele/membre_bdd.php';

$videaste=implode("",select_six_videaste($bdd));


$section_gauche="<section id='gauche' class='col-lg-1 px-3 position-fixed'>
<div id='section_gauche_accueil' class='btn-group-vertical'>
    <!-- Bouton deroulant categorie -->
    <button
        type='button'
        class='btn btn-default dropdown-toggle'
        data-toggle='dropdown'
        aria-haspopup='true'
        aria-expanded='false'
    >
        CATEGORIES
    </button>
    <ul class='dropdown-menu bg-secondary'>
        <li><a href='../controller/routing/routing_cinema.php'title='Lien 1'>Cinema</a></li>
        <li><a href='../controller/routing/routing_theatre.php' title='Lien 2'>Theatre</a></li>
        <li><a href='../controller/routing/routing_musique.php' title='Lien 3'>Musique</a></li>
        <li><a href='../controller/routing/routing_jeux.php' title='Lien 4'>Jeux</a></li>
        <li><a href='../controller/routing/routing_danse.php' title='Lien 4'>Danse</a></li>
        <li><a href='../controller/routing/routing_mannequinat.php' title='Lien 4'>Mannequinat</a></li>
    </ul>

    <!-- Bouton deroulant LES VID&ASTES -->
    <p class='mt-5' 
    >
        LES MEILLEURS VID&ASTES
    </p>
    
    $videaste

   
</div>
</section>";
?>