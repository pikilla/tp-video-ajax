<?php
require_once '../modele/mediaDowloadBdd.php';

$htmlGrandMedia=afficher_grande_video($download,$bdd,$_SESSION['urlRecup']);

$nombreLikes=compterLikeBdd($download,$bdd,$_SESSION['id_post']);

$grandMediaAffiche="
<div class='text-center'>
<div class='w-75 m-auto mt-5'>
$htmlGrandMedia
<p>nombre de likes:$nombreLikes</p>
</div>
</div>
";
?>  