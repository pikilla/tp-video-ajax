<?php
// require_once '../controller_session.php';

require_once '../modele/mediaDowloadBdd.php';
require_once 'controller_session.php';

$_SESSION['urlRecup']=$_POST['urlRecup'];
$_SESSION['routing']='grandeVideo';


 header("Location: ../view/index.php");
?>
?>