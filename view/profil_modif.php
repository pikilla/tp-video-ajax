 <?php

require_once('../controller/controller_session.php');
require_once('../controller/Membre.class.php');
require_once('../controller/controller_membre.php');



$nouveau_membre_pseudo = $nouveau_membre -> $pseudo;

$profil_modif = "
<h1>Profil candidat</h1>
<p>$nouveau_membre_pseudo </p>
";

?> 
