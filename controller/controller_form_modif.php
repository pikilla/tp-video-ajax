<?php 

require_once "Form.class.php";

$Form_mo=new Form(['nom','prenom','pseudo','date_naissance','email','telephone','mdp']);

$Form_modif=array(
	$Form_mo->titre('Modification du profil','text'),
	$Form_mo->input_preremli('pseudo','text',$_SESSION['pseudo']),
	$Form_mo->input_preremli('nom','text',$_SESSION['nom']),
	$Form_mo->input_preremli('prenom','text',$_SESSION['prenom']),
	$Form_mo->input_preremli('telephone','text',$_SESSION['telephone']),
	$Form_mo->input_preremli('email','text',$_SESSION['email']),
	$Form_mo->input_preremli('date de naissance','date',$_SESSION['date_naissance']),
	$Form_mo->input_preremli('Mot de passe','password',''),
	$Form_mo->submit());

$erreur=array();
if(isset($_SESSION['email'])&&isset($_SESSION['mdp'])&&isset($_SESSION['verifPseudo'])){
	if($_SESSION['email']=="false" || $_SESSION['verif_presence_mail']){
		$erreur[0]= "<p>l'email n'est pas bon ou il existe deja</p>";
	}
        
	if($_SESSION['verifPseudo']=="false" || $_SESSION['verif_presence_pseudo']){
		$erreur[1]= "<p>le pseudo doit etre different de user admin utilisateur ou guest ou bien il existe deja</p>";
	} 
        $erreur[2]=$result_erreur;

		$_SESSION["erreur"] = $erreur;
}				
                       
?>