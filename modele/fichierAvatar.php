<?php 
require_once '../modele/membre_bdd.php';
$membre->select_user($bdd);
$avatarUrl=$_SESSION['avatar'];
// if($_SESSION['routing']==="modificationAvatar"){
//     $membreLogin= $membreLogin->afficherNouvelAvatar($_SESSION['avatar']);}
// echo $_SESSION['avatar'];
?>