<?php 
require_once '../modele/connexionBdd.php';
require_once '../controller/Upload.class.php';
require_once '../controller/controller_session.php';
//require_once '../controller/controller_upload.php';

//download video carousel central par categorie
//creation objet download
$download=new Upload(null,"","","","",null,"");

//cinema carousel central
//recup 'url'
$meilleurMediaCinemaUrl=$download->uploadCarouselCentral('cinema',$bdd)[7];
//recu le 'type'
$meilleurMediaCinemaType=$download->uploadCarouselCentral('cinema',$bdd)[2];
    //si le type et === a video alors
    if($meilleurMediaCinemaType === 'video'){
        $meilleurMediaCinemaBalise= 
            "<video controls width-max='500'>
                <source src='ressources/upload/video/$meilleurMediaCinemaUrl' type='video/mp4'>
            </video>";
    //sinon si le type et === a photo alors
    } else if ($meilleurMediaCinemaType === 'photo') {
        $meilleurMediaCinemaBalise= 
        "<img  src='ressources/upload/photo/$meilleurMediaCinemaUrl' height='360'/>";
    }

// Image/Video de la categorie Theatre
//recup 'url'
$meilleurMediaTheatreUrl=$download->uploadCarouselCentral('theatre',$bdd)[7];
//recup le 'type'
$meilleurMediaTheatreType=$download->uploadCarouselCentral('theatre',$bdd)[2];
    //si le type et === a video alors
    if($meilleurMediaTheatreType === 'video'){
        $meilleurMediaTheatreBalise= 
            "<video controls width-max='500'>
                <source src='ressources/upload/video/$meilleurMediaTheatreUrl' type='video/mp4'>
            </video>";
    //sinon si le type et === a photo alors
    } else if ($meilleurMediaTheatreType === 'photo') {
        $meilleurMediaTheatreBalise= 
        "<img  src='ressources/upload/photo/$meilleurMediaTheatreUrl' height='360'/>";
    }

//categorie musique carousel central
//recup 'url'
$meilleurMediaMusiqueUrl=$download->uploadCarouselCentral('musique',$bdd)[7];
//recup le 'type'
$meilleurMediaMusiqueType=$download->uploadCarouselCentral('musique',$bdd)[2];
    //si le type et === a video alors
    if($meilleurMediaMusiqueType === 'video'){
        $meilleurMediaMusiqueBalise= 
            "<video controls width-max='500'>
                <source src='ressources/upload/video/$meilleurMediaMusiqueUrl' type='video/mp4'>
            </video>";
            //sinon si le type et === a photo alors
    } else if ($meilleurMediaMusiqueType === 'photo') {
        $meilleurMediaMusiqueBalise= 
        "<img  src='ressources/upload/photo/$meilleurMediaMusiqueUrl' height='360'/>";
    }
//categorie jeux carousel central
//recup 'url'
$meilleurMediaJeuxUrl=$download->uploadCarouselCentral('jeux',$bdd)[7];
//recup le 'type'
$meilleurMediaJeuxType=$download->uploadCarouselCentral('jeux',$bdd)[2];
    //si le type et === a video alors
    if($meilleurMediaJeuxType === 'video'){
        $meilleurMediaJeuxBalise= 
            "<video controls width-max='500'>
                <source src='ressources/upload/video/$meilleurMediaJeuxUrl' type='video/mp4'>
            </video>";
            //sinon si le type et === a photo alors
    } else if ($meilleurMediaJeuxType === 'photo') {
        $meilleurMediaJeuxBalise= 
        "<img  src='ressources/upload/photo/$meilleurMediaJeuxUrl' height='360'/>";
    }
//categorie danse carousel central
//recup 'url'
$meilleurMediaDanseUrl=$download->uploadCarouselCentral('danse',$bdd)[7];
//recup le 'type'
$meilleurMediaDanseType=$download->uploadCarouselCentral('danse',$bdd)[2];
    //si le type et === a video alors
    if($meilleurMediaDanseType === 'video'){
        $meilleurMediaDanseBalise= 
            "<video controls width-max='500'>
                <source src='ressources/upload/video/$meilleurMediaDanseUrl' type='video/mp4'>
            </video>";
            //sinon si le type et === a photo alors
    } else if ($meilleurMediaDanseType === 'photo') {
        $meilleurMediaDanseBalise= 
        "<img  src='ressources/upload/photo/$meilleurMediaDanseUrl' height='360'/>";
    }
//categorie mannequinat carousel central
//recup 'url'
$meilleurMediaMannequinatUrl=$download->uploadCarouselCentral('mannequinat',$bdd)[7];
//recup le 'type'
$meilleurMediaMannequinatType=$download->uploadCarouselCentral('mannequinat',$bdd)[2];
    //si le type et === a video alors
    if($meilleurMediaMannequinatType === 'video'){
        $meilleurMediaMannequinatBalise= 
            "<video controls width-max='500'>
                <source src='ressources/upload/video/$meilleurMediaMannequinatUrl' type='video/mp4'>
            </video>";
            //sinon si le type et === a photo alors
    } else if ($meilleurMediaMannequinatType === 'photo') {
        $meilleurMediaMannequinatBalise= 
        "<img  src='ressources/upload/photo/$meilleurMediaMannequinatUrl' height='360'/>";
    }

//ligne carousel
//cinema ligne carousel 
//recup 'url'
function afficher_ligne_carrousel($download,$bdd){
    
    $categories=['cinema','theatre','musique','jeux','danse','mannequinat'];
    $array_affichage_carrousel=[];
    foreach($categories as $value)
            for($i=0;$i<9;$i++){
                $numMedia=$i+1;
                
                $meilleurMedia= $download->uploadLigneCarousel($value,$bdd)[$i];
                if($meilleurMedia[2] === 'video'){
                    $array_affichage_carrousel[$value][$i]=
                    
                        "
                        <video controls width-max='50'  class='mx-3 col-12 ligne-carousel'>
                            <source src='ressources/upload/video/$meilleurMedia[7]' alt='' type='video/mp4'>
                        </video>";
            // //sinon si le type et === a photo alors
                } else if ($meilleurMedia[2] === 'photo') {
                    $array_affichage_carrousel[$value][$i]=
                    "<img  src='ressources/upload/photo/$meilleurMedia[7]' alt='' class='mx-3 col-12 ligne-carousel'/>";
                }

    }
    return $array_affichage_carrousel;
}

function afficher_videos_profil($download,$bdd,$id){
    
    $meilleurMedia= $download->DownloadLigneCarouselProfil($id,$bdd);
    $_SESSION['urlSuppression']=[];
    $array_affichage_carrousel=[];   
     for($i=0;$i<count($meilleurMedia);$i++){
        $titre=$meilleurMedia[$i][4];
        $url=$meilleurMedia[$i][7];
        $id_post=$meilleurMedia[$i][0];
        $_SESSION['urlSuppression'][$i]=$url;
        $_SESSION['id_post'][$i]=$id_post;
        
        if($meilleurMedia[$i][2] === 'video'){
            
            $array_affichage_carrousel[$i]=
            "
            <h5>$titre</h5>
            <form method='post' action='../controller/controller_agrandissement.php' name='url' >
            <input value=$url hidden name='urlRecup'/>
            <input value=$id_post hidden name='id_post'/>
            <button id=$url class='bg-danger' type='submit'>agrandir</button></form>
            <video controls class=' col-lg-4 col-md-4 col-sm-4 col-xs-6 alt=''>
            <source  src='ressources/upload/video/$url' type='video/mp4'>
            </video>";
            
        } else if ($meilleurMedia[$i][2] === 'photo') {
            $array_affichage_carrousel[$i]=
            "
            <h5>$titre</h5>
            <form method='post' action='../controller/controller_agrandissement.php' name='url' >
            <input value=$url hidden name='urlRecup'/>
            <button id=$url class='bg-danger' type='submit'>agrandir</button></form>
            <img  src='ressources/upload/photo/$url' alt='' class='col-lg-4 col-md-4 col-sm-4 col-xs-6 '/>
            ";
        }
    }

    if(count($array_affichage_carrousel)===0){
        
        return "pas de video sur le profil";
    }

    return $array_affichage_carrousel;

}

function afficher_toutes_videos($download,$bdd,$categorie){
    $meilleurMedia= $download->downloadToutesVideosCategories($categorie,$bdd);
    for($i=0;$i<count($meilleurMedia);$i++){
        
        
       
        $url=$meilleurMedia[$i][7];
        if($meilleurMedia[$i][2] === 'video'){
            $array_affichage_carrousel[$i]=
            "
           
            <video controls width='320' height='240' class='col-lg-6 col-12'>
            <source  src='ressources/upload/video/$url' type='video/mp4'>
            </video>
            <form method='post' action='../controller/controller_agrandissement.php' name='url' >
            <input value=$url hidden name='urlRecup'/>
            <button id=$url class='bg-success mt-2 mb-2' type='submit'>agrandir</button></form>";
            
        } else if ($meilleurMedia[$i][2] === 'photo') {
            $array_affichage_carrousel[$i]=
            "
            
            <img  src='ressources/upload/photo/$url' class='col-lg-6 col-12'/>
            <form method='post' action='../controller/controller_agrandissement.php' name='url' >
            <input value=$url hidden name='urlRecup'/>
            <button id=$url class='bg-success mt-2 mb-2' type='submit'>agrandir</button></form>
            ";
        }
        
    }
    
        return $array_affichage_carrousel;
 }
 function afficher_grande_video($download,$bdd,$url){
    $meilleurMedia= $download->downloadGrandeVideo($bdd,$url);
    
    $url=$meilleurMedia[7];
    $titre=$meilleurMedia[4];
    $pseudo=$meilleurMedia[11];
    $comment=$meilleurMedia[5];
    $categorie=$meilleurMedia[3];
    $_SESSION['id_post'] =$meilleurMedia[0];
    if(isset($_SESSION['logged_in'])){
        if($meilleurMedia[2] === 'video' ){
            
            $mediaAffiche=
            "
           
            <video controls class='col-lg-6 col-12'>
            <source  src='ressources/upload/video/$url' type='video/mp4'>
            </video>
            <form method='post' action='../controller/controller_like.php' name='url'>
            
            <input value=$url hidden name='urlRecup'/>
            <button id=$url class='bg-success mt-2' type='submit'>like</button></form>
            
            <h1>titre de la video: $titre</h1>
          
            <p>vid&aste: <a href='../controller/routing/routing_pseudo.php?pseudoView=$pseudo'>$pseudo</a></p>
            <p>description: $comment</p>
            <p>catégorie: $categorie</p>
            ";
            
            
        } else if ($meilleurMedia[2] === 'photo') {
            $mediaAffiche=
            "
            <img  src='ressources/upload/photo/$url' class='col-lg-6 col-12'/>
            <form method='post' action='../controller/controller_like.php' name='url'>
            
            <input value=$url hidden name='urlRecup'/>
            <button id=$url class='bg-success mt-2' type='submit'>like</button></form>
            
            <h1>titre de la video: $titre</h1>
            <p>vid&aste: <a href='../controller/routing/routing_pseudo.php?pseudoView=$pseudo'>$pseudo</a></p>
            <p>description: $comment</p>
            <p>catégorie:: $categorie</p>
           
            ";
        }
    } else {
        if($meilleurMedia[2] === 'video' ){
            
            $mediaAffiche=
            "
           
            <video controls  width_max='500 '>
            <source  src='ressources/upload/video/$url' type='video/mp4'>
            </video>
           
            
            <h1>titre de la video: $titre</h1>
          
            <p>vid&aste: $pseudo</p>
            <p>description: $comment</p>
            <p>catégorie:: $categorie</p>
            ";
            
            
        } else if ($meilleurMedia[2] === 'photo') {
            $mediaAffiche=
            "
            <img  src='ressources/upload/photo/$url' class='col-lg-4 col-md-4 col-sm-4 col-xs-6 '/>
            
            <h1>titre de la video: $titre</h1>
            <p>vid&aste: $pseudo</p>
            <p>description: $comment</p>
            <p>catégorie:: $categorie</p>
           
            ";
        }
    }
    
    
            
        return $mediaAffiche;
   
}
function compterLikeBdd($download,$bdd,$id_post){
    $likes= $download->compterLike($bdd,$id_post);
   
    return $likes[0];}

function afficherCommentaire($download,$bdd,$id_post){

    $comments=$download->recupererCommentaire($bdd,$id_post);
    return $comments;
}

?>