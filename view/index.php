<?php
require_once '../controller/controller_session.php';
//session_destroy();
 require_once './header.php';
 require_once '../controller/controller_fonction.php';
 require_once './section_gauche.php';
 require_once './ligne_carrousel.php';
 require_once './carrousel_central.php';
 
 

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
		<script
			src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"
		></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"
		></script>
		<script src="../controller/js.js" defer></script>
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		
		<link rel="stylesheet" href="./style/style.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Alef&family=Karma&display=swap"
			rel="stylesheet"
		/>

		<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script> -->
		<!-- Titre appli -->
		<title>Vid&o</title>
	</head>
	<div id='sauf_footer'>
	<body class="bg-dark">
	<?php 
	
	
	if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']===true){
		render($header_connecte);
	}else{
		render($header);
	}
	?>
				
		<main class="container-fluid mt-2">
			<div class="row">
				<!-- Menu Gauche -->
				<?php 
					render($section_gauche);
					
					
				?>
				<!-- carrousel -->
				<section class="col-9" id="section_droite">
				<?php 
				if(isset($_SESSION['routing'])&&$_SESSION['routing']==='grandeVideo'){
					require_once './viewGrandeVideo.php';
					require_once './commentaireView.php';
					
					 render($grandMediaAffiche);
					 if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']===true){
						render($formComment);
					 }
					 
					 
				}
				elseif(isset($_SESSION['routingCategorie'])&&($_SESSION['routingCategorie']==="toutesVideos")){
					require_once './affichageToutesVideos.php';
					$_SESSION['routingCategorie']=null;
					$categorie=$_SESSION['routing'];
					echo
					"<h1 class='text-center'>$categorie</h1>
					<div class='container'>
					<div class='row'>
					";
					for($i=0;$i<8;$i++){
						render($affichageHtmlTouteVideo[$i]);
					}
					
				echo "</div>
			
				</div>
				";

				}else{
					render($carrousel_central);
					for($i=0;$i<6;$i++){
					render($ligne_carrous[$i]);
					}

				}
				?>
				
				</section>
				
			</div>
		</main>
	
	</body>
</div>
	<footer class="pb-0 mb-0">
		<p>copyright</p>
	</footer>
</html>
