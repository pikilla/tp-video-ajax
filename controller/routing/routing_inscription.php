<?php
require_once '../controller_session.php';

$_SESSION['routing'] = "inscription";
$_SESSION['urlRecup']=null;
header("Location: ../../view/inscription_connection_modif.php");


?>