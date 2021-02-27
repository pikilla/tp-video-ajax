<?php 
/**
 * 
 * Nous avons le require du controlleur session start
 * car si nous l'enlevons nous perdons la session
 * doc : php.net/manual/fr/reserved.variables.session.php
 */
require_once '../controller/controller_session.php';
require_once "controller_fonction.php";
require_once "../modele/connexionBdd.php";
//require_once "controller_form.php";

// par défaut vérife = true
$verif='true';




// isset permet de savoir si variable existe
// empty si elle n'est pas vide

// Si toutes mes valeurs sont vraie je rentre dans le if sinon je rentre dans le else
if((isset($_POST['email'])&& !empty($_POST['email'])) && 
  (isset($_POST['pseudo'])&& !empty($_POST['pseudo'])) && 
  (isset($_POST['mdp'])&& !empty($_POST['mdp'])) && 
  (isset($_POST['verif_mdp'])&& !empty($_POST['verif_mdp']))) {

  // Je récupère mes datas
  $email = $_POST['email'];
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mdp = $_POST['mdp'];
 

  // verification des inputs 
  $verif_mdp = verifPassword1($mdp, $_POST['verif_mdp']);
  $verifPseudo = verif_presence_pseudo($pseudo, $bdd);  
  $verifEmail = verif_presence_email($email, $bdd);  
  // dans le cas ou pas d'erreur
  $isEmailCorrect = verifMail($email);
  $isPseudoCorrect = verifPseudo($pseudo);
  
  // Les variables sessions
  $_SESSION['valeurEmail'] = $email;
  $_SESSION['email'] = $isEmailCorrect;
  $_SESSION['pseudo'] = $pseudo;
  $_SESSION["verifPseudo"] = $isPseudoCorrect;
  $_SESSION['mdp'] = $mdp;
  $_SESSION['verif_mdp_pareil'] = $verif_mdp;
  $_SESSION['verif_presence_pseudo'] = $verifPseudo;
  $_SESSION['verif_presence_mail'] = $verifPseudo;
  $_SESSION['verif_mdp'] = $_POST['pseudo'];

  // Si email ou pseudo incorrect, verif = false
  if(($isEmailCorrect=="false")||($isPseudoCorrect=="false")) {$verif="false";}
  
  // Si verif = false 
  if($verif=="false"){
    $_SESSION["verifForm"]="false";
  }

  // J'envoie si verif true
  if($verif=="true" && $verifPseudo=="true" && $verifEmail=="true" && $verif_mdp=="true") {
    $requete="INSERT INTO inscription (email,pseudo,mdp,telephone,avatar,nom,prenom,date_naissance) VALUES (:email,:pseudo,:mdp,'aucun','aucun','aucun','aucun','2021-02-09')";
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES 'utf8'");
    $sql=$bdd->prepare($requete);
    $sql->execute(array(':email'=>$email,':pseudo'=>$pseudo,':mdp'=>SHA1(SALT.$mdp)));  
    $_SESSION['logged_in']  = true;
    $_SESSION['routing']  = 'profil';
    header('Location: ../view/gestion_profil.php');
  } 
  else {
    // Sinon, je redirige vers la page de ins/co modif
    $_SESSION['erreurInscription']=true;
      header('Location: ./routing/routing_inscription.php');
    } 
  } 
  else if (empty($_POST['email'])&&empty($_POST['pseudo'])&&empty($_POST['mdp'])&&empty($_POST['verif_mdp'])) {
    // Sinon, je redirige vers la page de ins/co modif
      header('Location: ./routing/routing_inscription.php');
  } 
 
//Manonmaite13!
?>