<?php
require_once '../controller_session.php';
$_SESSION['urlRecup']=null;
$_SESSION['routing'] = "connection";
header("Location: ../../view/inscription_connection_modif.php");

?>