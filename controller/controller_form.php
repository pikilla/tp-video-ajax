<?php 

require_once "Form.class.php";

$Form=new Form(['nom','prenom','pseudo','date_naissance','email','telephone','mdp','verif_mdp','avatar']);

$Form_inscription=array($Form->titre('inscription','text'),$Form->input('pseudo','text'),$Form->input('email','email'),$Form->input('mdp','password'),$Form->input('verif_mdp','password'),$Form->submit());

$erreur=array();
if(isset($_SESSION['email'])&&isset($_SESSION['mdp'])&&isset($_SESSION['verif_mdp'])&&isset($_SESSION['verifPseudo'])){
	if($_SESSION['email']=="false" || $_SESSION['verif_presence_mail']){
		$erreur[0]= "<p>l'email n'est pas bon ou il existe deja</p>";
	}
        
	if($_SESSION['verifPseudo']=="false" || $_SESSION['verif_presence_pseudo']){
		$erreur[1]= "<p>le pseudo doit etre different de user admin utilisateur ou guest ou bien il existe deja</p>";
	} 

		$regex1="/.*[0-9]/";
		$regex2="/.*[a-z]/";
		$regex3="/.*[A-Z]/";
		$regex4="/\W/";
		$regex5="/.{8,}/";
		$arrayRegex=array($regex1=>"il manque un chiffre",$regex2=>"il manque une minuscule",$regex3=>"il manque une majuscule",$regex4=>"il manque un caractere spécial",$regex5=>"le mot de passe doit faire 8 caracteres minimum");
							
		$result_erreur="";
	if($_SESSION['mdp']==$_SESSION['verif_mdp']){
				foreach($arrayRegex as $key=>$value){
					if(!preg_match($key,$_SESSION['mdp'])) {
                    	$result_erreur= "$result_erreur,$value<br>";
					}  
				}  
	} else { 
		$erreur[3]= 'les mots de passe sont differents<br>';
	}
        $erreur[2]=$result_erreur;

		$_SESSION["erreur"] = $erreur;
}				
                       
?>