<?php 
require_once '../modele/mediaDowloadBdd.php';

//varible carrouselcentral apeller dans l'index
$carrousel_central="
<div id='carousel'>
<div
    id='carouselExampleControls'
    class='carousel slide'
    data-bs-ride='carousel'
>
    <div class='carousel-inner'>
        
        <figure class='carousel-item active mt-2'>
            $meilleurMediaCinemaBalise
            <h5>Cinema</h5>
        </figure>

        
        <figure class='carousel-item mt-2'>
            $meilleurMediaTheatreBalise
            <h5>THEATRE</h5>
        </figure>


        <figure class='carousel-item mt-2'>
            $meilleurMediaDanseBalise
            <h5>Danse</h5>
        </figure>


        <figure class='carousel-item mt-2'>
            $meilleurMediaMannequinatBalise
            <h5>Mannequinat</h5>
        </figure>


        <figure class='carousel-item mt-2'>
            $meilleurMediaJeuxBalise
            <h5>Jeu video</h5>
        </figure>


        <figure class='carousel-item mt-2'>
            $meilleurMediaMusiqueBalise
            <h5>musique</h5>
        </figure>
    </div>

    <button
        id='bouton_carousel'
        class='carousel-control-prev'
        type='button'
        data-bs-target='#carouselExampleControls'
        data-bs-slide='prev'
    >
        <span
            class='carousel-control-prev-icon'
            aria-hidden='true'
        ></span>
        <span class='visually-hidden'>Previous</span>
    </button>

    <button
        id='bouton_carousel'
        class='carousel-control-next'
        type='button'
        data-bs-target='#carouselExampleControls'
        data-bs-slide='next'
    >
        <span
            class='carousel-control-next-icon'
            aria-hidden='true'
        ></span>
        <span class='visually-hidden'>Next</span>
    </button>
</div>
</div>";
?>