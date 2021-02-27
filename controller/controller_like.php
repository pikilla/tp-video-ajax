<?php
require_once '../modele/mediaDowloadBdd.php';
require_once 'controller_session.php';


$download->ajouterLike($bdd,$_SESSION['id_post'],$_SESSION['id']);

header("Location: ../view/index.php");
?>