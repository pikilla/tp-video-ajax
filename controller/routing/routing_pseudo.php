<?php
require_once '../controller_session.php';

$_SESSION['pseudoView']=$_GET['pseudoView'];
header("Location: ../controller_view_autreMembre.php");

?>