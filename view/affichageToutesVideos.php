<?php
require_once '../modele/mediaDowloadBdd.php';
$afficherMedia=afficher_toutes_videos($download,$bdd,$_SESSION['routing']);

$affichageHtmlTouteVideo=[];
// var_dump($afficherMedia);
$categorie=$_SESSION['routing'];
$i=0;
foreach($afficherMedia as $categorie){
  
  
  
  $affichageHtmlTouteVideo[$i]="
  
  
  <div class='col-md-6 m-auto'>
  
  <div class='text-center'>$categorie</div>
  </div>

  ";
  $i++;
} 

 

?>
<!-- <div class="card-deck">
  <div class="card">
    $categorie
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div> -->