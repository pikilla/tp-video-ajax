<?php
require_once '../controller_session.php';
session_destroy();

header("Location: ../../view/index.php");


?>