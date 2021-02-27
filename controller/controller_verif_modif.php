<?php 
/* 
 * Nous avons le require du controlleur session start
 * car si nous l'enlevons nous perdons la session
 * doc : php.net/manual/fr/reserved.variables.session.php
 */
require_once 'controller_session.php';
require_once "controller_fonction.php";
require_once "../modele/connexionBdd.php";
require_once "Membre.class.php";
require_once "../modele/membre_bdd.php";

// par défaut vérife = true
$verif='true';

// isset permet de savoir si variable existe
// empty si elle n'est pas vide
// Si toutes mes valeurs sont vraie je rentre dans le if sinon je rentre dans le else
if((isset($_POST['email'])&& !empty($_POST['email'])) && 
(isset($_POST['pseudo'])&& !empty($_POST['pseudo'])) && 
(isset($_POST['Mot_de_passe'])&& !empty($_POST['Mot_de_passe']))) {
  
  // Je récupère mes datas
  $email = $_POST['email'];
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mdp = $_POST['Mot_de_passe'];
  $verifPseudo = true;
  $verifEmail= true;
  // verification des inputs 

  // dans le cas ou pas d'erreur
  $isEmailCorrect = verifMail($email);
  $isPseudoCorrect = verifPseudo($pseudo);
  
  // Les variables sessions
  $_SESSION['valeurEmail'] = $email;
  $_SESSION['email'] = $isEmailCorrect;
  $_SESSION['pseudo'] = $pseudo;
  $_SESSION["verifPseudo"] = $isPseudoCorrect;
  $_SESSION['mdp'] = $mdp;
  $_SESSION['verif_presence_pseudo_modif'] = $verifPseudo;
  $_SESSION['verif_presence_email_modif'] = $verifEmail;
  $_SESSION['telephone'] = $_POST['telephone'];
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['date_naissance'] = $_POST['date_de_naissance'];

  // Si email ou pseudo incorrect, verif = false
  if(($isEmailCorrect=="false")||($isPseudoCorrect=="false")) {$verif="false";}
  
  // Si verif = false 
  if($verif=="false"){
    $_SESSION["verifForm"]="false";
  }
  
  // J'envoie si verif true
  if($verif=="true" && $verifPseudo=="true" && $verifEmail=="true") {
    fonctionUpdateMembre($membre);
    $membre->update($bdd);
    header('Location: routing/routing_gestion_profil.php');
  } 
  else {
    // Sinon, je redirige vers la page de ins/co modif
    $_SESSION['erreurModif'] = true;
    var_dump('Je suis dans le else si les verif sont faux');
    header('Location: ../controller/routing/routing_modif.php');
    //header('Location: ./routing/routing_inscription.php');
  } 
} 
else if (empty($_POST['email'])&&empty($_POST['pseudo'])&&empty($_POST['mdp'])) {
  // Sinon, je redirige vers la page de ins/co modif
  $_SESSION['erreurModif'] = true;
  header('Location: ../controller/routing/routing_modif.php');
  // header('Location: ./routing/routing_inscription.php');
} 
else {
  $_SESSION['erreurModif']=true;
  header('Location: ../controller/routing/routing_modif.php');
  
}
//Manonmaite13!
 ?>