<?php

function render($composant){
    echo $composant;
}
function verifPseudo($pseudo){
    $pseudo=strtolower($pseudo);
    if($pseudo=="user"||$pseudo=="admin"||$pseudo=="utilisateur"||$pseudo=="guest"){
        return 'false';

    } else {
        return 'true';
    }
}
function verif_presence_pseudo($pseudo, $bdd){
    
    
    $requete="SELECT * FROM inscription";
    $sql=$bdd->query($requete);

    while($row=$sql->fetch()){
        if ($row['pseudo'] === $pseudo){
            return "false";
        }
    }
    return "true";
    
}
function verif_presence_pseudo_modif($pseudo, $bdd){
    
    
    $requete="SELECT * FROM inscription";
    $sql=$bdd->query($requete);

    while($row=$sql->fetch()){
        if ($row['pseudo'] === $pseudo){
            if ($row['pseudo']!==$_SESSION['pseudo']){
            return "false";}
        }

    }
    return "true";
    
}
function verif_presence_email_modif($email, $bdd){
    $requete="SELECT * FROM inscription";
        $sql=$bdd->query($requete);

    while($row=$sql->fetch()){
        if ($row['email']===$email) {
            if($row['email']!== $_SESSION['email']){
            return "false";
        }
        }
   }
   return "true";
}
function verif_presence_email($email, $bdd){
    $requete="SELECT * FROM inscription";
        $sql=$bdd->query($requete);

    while($row=$sql->fetch()){
        if ($row['email']===$email) {
            return "false";
        }
   }
   return "true";
}
function verifTel($tel){
    $regex1="/^(0|(00|\+)33)[67][0-9]{8}$/";
    if(!preg_match($regex1,$tel)){
        // echo "le tel est bon<br>";
       
    return"false";}
}
function verifMail($mail){
    $regex='/^([a-zA-Z][\w\.-]*[a-zA-Z0-9])@([a-zA-Z][\w\.-]*[a-zA-Z0-9])\.([a-zA-Z]{2,})$/';
    if(!preg_match($regex,$mail)){
        // echo "le mail est bon<br>";
       
       return "false";
    } else ;{
        return "true";
    }
}

function verifPassword1($password1,$password2){
    $regex1="/.*[0-9]/";
    $regex2="/.*[a-z]/";
    $regex3="/.*[A-Z]/";
    $regex4="/\W/";
    $regex5="/.{8,}/";
    $arrayRegex=array($regex1=>"il manque un chiffre",$regex2=>"il manque une minuscule",$regex3=>"il manque une majuscule",
    $regex4=>"il manque un caractere spécial",$regex5=>"le mot de passe doit faire 8 caractere minimum");

    if($password1==$password2){
        

             foreach($arrayRegex as $key=>$value){
                 if(!preg_match($key,$password1)){
                    
                    return 'false';
                 }
                 else{
                     return "true";
                }
             }
     } else{
         return "false";
     }
 }
?>

