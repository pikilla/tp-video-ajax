<?php
require_once '../modele/mediaDowloadBdd.php';

$afficherMedia=afficher_videos_profil($download,$bdd,$_SESSION['id']);

$i=0;
if($afficherMedia==="pas de video sur le profil"){

    $affichageHtmlTouteVideoProfilString="<p>pas de video sur le profil</p>";
}else {



foreach($afficherMedia as $lienHtml){
    $url=$_SESSION['urlSuppression'][$i];
    $id_post=$_SESSION['id_post'][$i];
    $affichageHtmlTouteVideoProfil[$i]="
    
    
    <div class=' inline'>
    $lienHtml
                    <form method='post' action='../controller/controller_delete.php'>
                       <input value=$url hidden name='urlSuppression'/>
                       <input value=$id_post hidden name='id_post'/>
                       <button id=$url class='bg-danger' type='submit'>Supprimer</button>
                    </form>
                    </div>
               ";
   $i++;
   
    } }
    if($afficherMedia===null){
        $affichageHtmlTouteVideoProfilString="<p>pas de video sur le profil</p>";
    }else {
    if(isset($_SESSION['routing'])&&$_SESSION['routing']==='affichageAutreMembre'){
    $afficherMedia=afficher_videos_profil($download,$bdd,$_SESSION['idView']);
    

    $affichageHtmlTouteVideoAutreProfil=[];
    // var_dump($afficherMedia);
    
    $i=0;
    foreach($afficherMedia as $lienHtml){
        $url=$_SESSION['urlSuppression'][$i];
    
            $affichageHtmlTouteVideoAutreProfil[$i]="
       
            
                        <div class=' inline'>
                        $lienHtml
                        
              
                     
                        </div>
                   ";
       $i++;
        } }}
   


  
  
?>