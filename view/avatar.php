<?php 
require_once '../modele/fichierAvatar.php';

$avatar1=$_SESSION["avatar"];
$avatar = "
<main class='container-fluid mt-2'>
<div class='file'>
<img class='rounded-circle w-25' id='avatar' src='ressources/avatar/$avatar1'/>
</div>
<form class='file 'enctype='multipart/form-data' action='../controller/controller_avatar.php' method='post'>

<input type='hidden' name='avatar' value='30000' />

<input name='avatar' type='file' />
<input type='submit' value='Envoyer le fichier' />
</form> 
</main>
";
if(isset($_SESSION['routing'])&&$_SESSION['routing']==='affichageAutreMembre'){
$avatar2=$_SESSION["avatarView"];
$avatar_view= "
<main class='container-fluid mt-2'>
			<div class='file'>
				<img class='rounded-circle w-25' id='avatar' src='ressources/avatar/$avatar2'/>
			</div>
		</main>
";}

?>