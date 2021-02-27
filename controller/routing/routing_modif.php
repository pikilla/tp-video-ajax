<?php
require_once '../controller_session.php';

$_SESSION['routing'] = "modification";
header("Location: ../../view/inscription_connection_modif.php");

?>