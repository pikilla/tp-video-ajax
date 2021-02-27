<?php
require_once '../modele/membre_bdd.php';

//var_dump($_SESSION['logged_in']);

$lancementFonction= ($membre->select_user($bdd));
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$pseudo=$_SESSION['pseudo'];
$telephone=$_SESSION['telephone'];
$email=$_SESSION['email'];
$date_naissance=$_SESSION['date_naissance'];



$nom=$_SESSION['nom'];
$carte_profil = "<div class='row justify-content-around'>
<div class='col-5 mt-5' id='infos'>
    <h1 class='text-center'>$pseudo</h1>
    <p>$nom</p><br> 	
    <p>$prenom</p><br> 
    <p>$email</p><br> 	
    <p>$date_naissance</p><br> 
    <p>$telephone</p><br> 
    <a id='modif' href='../controller/routing/routing_modif.php'>Modifier le profil</a>
</div>
<div class='col-5 mt-5' id='upload'>
    <h1 class='text-center mb-4'>Ajouter une video</h1>
    <form enctype='multipart/form-data' method='post' action='../controller/controller_upload.php'>
    <div id='file'>	
		<input name='fichier' type='file' size='40'/>
		<input name='MAX_FILE_SIZE' value='204800' type='hidden'/>
    </div> 
    <input type='text' name='titre' placeholder='Titre'><br> <br> 
    <p>Type</p>
    <input type='radio' id='cinema' name='photo/video' value='photo' checked>
    <label for=''photo/video'>Photo</label>
    <input type='radio' id='cinema' name='photo/video' value='video'>
    <label for=''photo/video'>Video</label><br><br>
    <p>Catégorie</p>
    <input type='radio' id='cinema' name='gender' value='cinema' checked>
    <label for='cinema'>Cinéma</label>

    <input type='radio' id='theatre' name='gender' value='theatre'>
    <label for='theatre'>Theatre</label>

    <input type='radio' id='musique' name='gender' value='musique'>
    <label for='musique'>Musique</label><br>

    <input type='radio' id='jeux' name='gender' value='jeux'>
    <label for='jeux'>Jeux</label>

    <input type='radio' id='danse' name='gender' value='danse'>
    <label for='danse'>Danse</label>

    <input type='radio' id='mannequinat' name='gender' value='mannequinat'>
    <label for='mannequinat'>Mannequinat</label><br><br> 
    
    <textarea type='text' name='description' id='commentaires' cols='36' rows='4' placeholder='description'></textarea><br> 
    <input type='submit' name='envoie' value='Envoyer'/>
    </form>
</div>
</div>";
if(isset($_SESSION['routing'])&&$_SESSION['routing']==='affichageAutreMembre'){
$nom1=$_SESSION['nomView'];
$prenom1=$_SESSION['prenomView'];
$pseudo1=$_SESSION['pseudoView'];
$telephone1=$_SESSION['telephoneView'];
$email1=$_SESSION['emailView'];
$date_naissance1=$_SESSION['date_naissanceView'];
$pseudo1=$_SESSION['pseudoView'];

$carte_profil_view="
<div class='row justify-content-center'>

  <div class='col-5 m-5' id='infos'>
      <h1 class='text-center'>$pseudo1</h1>
      <p>$nom1</p><br> 	
      <p>$prenom1</p><br>  	
      <p>$date_naissance1</p><br> 
  
</div>

  <div class='col-5 m-5' id='infos'>
      <h1 class='text-center'>Contact</h1>
      <p>$email1</p><br> 	
      <p>$telephone1</p><br> 
  </div>
 
</div> 
";}
?>