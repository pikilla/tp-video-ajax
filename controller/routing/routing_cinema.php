<?php
 require_once '../controller_session.php';
 $_SESSION['urlRecup']=null;
$_SESSION['routing'] = "cinema";
$_SESSION['routingCategorie'] = "toutesVideos";
var_dump($_SESSION['routingCategorie']);
 header("Location: ../../view/index.php");

?>