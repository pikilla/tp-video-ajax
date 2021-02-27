<?php

//session_start();
require_once('../controller/controller_session.php');
require_once('../modele/connexionBdd.php');
require_once 'header.php';
require_once '../controller/controller_fonction.php';
require_once '../controller/controller_form.php';

//require_once "../modele/requete.php";
require_once '../controller/controller_form_connection.php';
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
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link rel="stylesheet" href="./style/style.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<!-- Titre appli -->
		<title>Vid&o</title>
	</head>
	<div id='sauf_footer'>
	<body class="bg-dark">
		
		<?php 
	
			//Si connecter alors
			if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']===true){
				render($header_connecte);
			//Alors
			}else{
				render($header);
			}
		?>

		<?php
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "inscription") {
			echo "
				<main id='form' class='container'>
					<div class='row justify-content-center'>
						<section id='inscription' class='col-6' >
							<form  method='POST' action='../controller/controller_verif_inscription.php'>";
		}
				
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "inscription") {
			foreach($Form_inscription as $champ){
				echo '<br>';
				render($champ);
			}
		}
				
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "inscription" && isset($_SESSION['erreurInscription'])&&$_SESSION['erreurInscription']==true){
		echo "<div class='' id='erreur'>";
			if(isset($_SESSION["erreur"])) {
				foreach($_SESSION["erreur"] as $notif_erreur){
					render($notif_erreur);		
				}
			}
		}
		$_SESSION['erreurInscription']=false;			
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "inscription"){		
				echo "
					</div>
					</form>
					</section>
					</div>
					</main>";
		
		}
					
	?>
	<!-- Connection -->
	<?php

if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "connection") {
	echo "<main id='form' class='container'>
	<div class='row justify-content-center'>
	<section id='inscription' class='col-6' >
	<form  method='POST' action='../modele/requete.php'>";
}

if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "connection"){
	foreach($Form_connection as $champ){
		render($champ);
	}
}

if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "connection" && isset($_SESSION['erreurConnection'])&&$_SESSION['erreurConnection'] ==true){
	if (isset($_SESSION['logged_in'])&&$_SESSION['logged_in'] === false){
		echo "<div class='' id='erreur'>";
		if(isset($_SESSION["erreur"])) {
			echo "Votre mot de passe ou pseudo est invalide";
		}
	}
}
$_SESSION['erreurConnection'] =false;
					
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "connection"){		
			echo "
				</form>
				</section>
				</div>
				</main>";
		
		}
							
	?>
<!-- Modification -->
<?php

		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "modification") {
			require_once '../controller/controller_form_modif.php';
			echo "
				<main id='form' class='container'>
					<div class='row justify-content-center'>
						<section id='inscription' class='col-6' >
							<form  method='POST' action='../controller/controller_verif_modif.php'>";
		}
				
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "modification"){
			foreach($Form_modif as $champ){
				echo '<br>';
				render($champ);
			}
		}
				
		if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "modification" && isset($_SESSION['erreurModif'])&&$_SESSION['erreurModif'] ==true){
			echo "<div class='' id='erreur'>";
			if(isset($_SESSION["erreur"])) {
				foreach($_SESSION["erreur"] as $notif_erreur){
					render($notif_erreur);
				}
			}
		}
		$_SESSION['erreurModif'] = false;	
			if (isset( $_SESSION['routing']) && $_SESSION['routing'] == "modification"){		
				echo "
				</div>
				</form>
				</section>
				</div>
				</main>";
			}
?>
	
</body>
</div>
<footer class="">
	<p>copyright</p>
</footer>
</html>
<?php
exit();
?>