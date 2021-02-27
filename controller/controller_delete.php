<?php
require_once '../modele/mediaDowloadBdd.php';
require_once 'controller_session.php';
var_dump($_POST);

$download->supprimerUpload($bdd,$_POST['id_post']);
$_SESSION["upload"]="efface";
header("Location: ../view/gestion_profil.php");
?>