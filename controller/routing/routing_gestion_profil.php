<?php
require_once '../controller_session.php';

$_SESSION['routing'] = "profil";

header("Location: ../../view/gestion_profil.php");


?>