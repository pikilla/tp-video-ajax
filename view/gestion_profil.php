<?php

 
require_once '../controller/controller_session.php';
if(!isset($_SESSION['logged_in'])||$_SESSION['logged_in']===false){
header("Location: index.php");}
require_once 'header.php';
require_once '../controller/controller_fonction.php';
require_once 'avatar.php';
require_once 'ligne_carrousel.php';
require_once 'carte_profil.php';

 require_once 'ligne_carrousel_profil.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Fav Icon -->
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="./ressources/logo_icon.png"
		/>
		<!-- link bootstrap -->
		<link rel="stylesheet" href="./style/bootstrap.min.css" />
		<!-- js bootstrap -->
		<script src="./style/bootstrap.min.js" defer></script>
		<script src="./style/dropdown.js" defer></script>
		<!-- Font google -->
		<link rel="stylesheet" href="./style/style.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
	
		<!-- Titre appli -->
		<title>Vid&o</title>
	</head>
	<div id='sauf_footer'>
	<body class="bg-dark">
		<?php 
		//$_SESSION["routing"]="modification";
			// si connecter alors
			
		
			if(isset($_SESSION['logged_in'])){
				render($header_connecte);
			// sinon
			}else{
				render($header);
			}
			if(isset($_SESSION['upload']) && $_SESSION['upload'] === "valide"){
				echo "<div class=''>
				<p>L'upload à bien été enregistré</p>
				</div>"; 
			}
			else if(isset($_SESSION['upload']) && $_SESSION['upload'] === "nonValide"){
				echo "<div class='bg-danger'>
				<p>L'upload n'a pas été effectué</p>
				</div>";
			}
			if(isset($_SESSION['upload'])&&$_SESSION['upload']==="efface"){
				echo "<div>
				<p>Vous avez bien supprimé votre photo/video</p>
				</div>";
			}

			if(isset($_SESSION['upload'])&&$_SESSION['upload']==="valideAvatar"){
				
				echo "<div>
				<p>Votre avatar à bien etait changé</p>

				</div>";
			}else if(isset($_SESSION['upload']) && $_SESSION['upload'] === "nonValideAvatar"){
				echo "<div class='bg-danger'>
				<p>Dommage pour ton avatar ça n'a pas fonctionné</p>
				</div>";
			}
			if(isset($_SESSION['routing'])&&$_SESSION['routing']==="affichageAutreMembre"){
				render($avatar_view);
			}else if (isset($_SESSION['routing'])&&(($_SESSION['routing']==="profil")||($_SESSION['routing']==="modificationAvatar"))) {
				
				render($avatar);}
			?>
		
		<div class="container">
			<?php
			
			if(isset($_SESSION['routing'])&&$_SESSION['routing']==="affichageAutreMembre"){
				render($carte_profil_view);
			}else if (isset($_SESSION['routing'])&&(($_SESSION['routing']==="profil")||($_SESSION['routing']==="modificationAvatar"))){
				render($carte_profil);}
			?>
		</div>
		<?php

			echo '<br>';
			if(isset($_SESSION['routing'])&&$_SESSION['routing']==="affichageAutreMembre"){
				if($affichageHtmlTouteVideoAutreProfil===null) {
						render($affichageHtmlTouteVideoAutreProfilString);
				}
				else{
					foreach($affichageHtmlTouteVideoAutreProfil as $video){
						render($video);
					}
				}
			}
				else if (isset($_SESSION['routing'])&&(($_SESSION['routing']==="profil")||($_SESSION['routing']==="modificationAvatar"))){
						if($afficherMedia==="pas de video sur le profil"){
							render($affichageHtmlTouteVideoProfilString);
						}
						else{
							foreach($affichageHtmlTouteVideoProfil as $video){
								render($video);
							}
						}
					
				}
			

		?>
	</body>
	</div>
    <footer class="pb-0 mb-0">
        <p>copyright</p>
    </footer>
</html>
