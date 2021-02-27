<?php
require_once '../controller_session.php';
$_SESSION['urlRecup']=null;
$_SESSION['routing'] ="theatre" ;
$_SESSION['routingCategorie'] ="toutesVideos" ;
header("Location: ../../view/index.php");

?>