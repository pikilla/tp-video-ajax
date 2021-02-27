<?php
// require_once '../controller_session.php';
require_once '../modele/connexionBdd.php';
require_once '../controller/Membre.class.php';
require_once 'controller_session.php';
$autreMembre=new Membre($_SESSION['pseudo'],"","","","","",null,"","avatar.png");
$autreMembre->select_autre_user($bdd,$_SESSION['pseudoView']);
$_SESSION['routing']="affichageAutreMembre";
header("Location: ../view/gestion_profil");
?>