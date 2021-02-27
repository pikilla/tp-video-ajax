<?php
require_once '../controller_session.php';
$_SESSION['urlRecup']=null;
$_SESSION['routing'] = "danse";
$_SESSION['routingCategorie'] = "toutesVideos";
header("Location: ../../view/index.php");

?>