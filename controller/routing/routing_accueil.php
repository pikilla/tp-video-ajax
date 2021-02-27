<?php
 require_once '../controller_session.php';
 $_SESSION['urlRecup']=null;
$_SESSION['routing'] = "accueil";


  header("Location: ../../view/index.php");

?>