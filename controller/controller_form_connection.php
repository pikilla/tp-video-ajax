<?php

//require_once "../modele/requete.php";

$Form_co=new Form(['nom','prenom','pseudo','date_naissance','email','telephone','mdp','verif_mdp','avatar']);

$Form_connection=array($Form_co->titre('Connexion','text'),$Form_co->input('pseudo','text'),$Form_co->input('mdp','password'),$Form_co->submit());

?>