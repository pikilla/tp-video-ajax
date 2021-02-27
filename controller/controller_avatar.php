<?php 
require_once 'controller_session.php';
require_once "controller_fonction.php";
require_once "../modele/connexionBdd.php";
require_once "Membre.class.php";
require_once "../view/avatar.php";
require_once "../modele/membre_bdd.php";

$_SESSION["routing"]="modificationAvatar";


var_dump($_FILES);
$remplace=str_replace ( '.', '_', $avatar1);
$avatar = $_FILES['avatar']['name'];
    $repertoireDestination = "../view/ressources/avatar/";
    $id=$_SESSION['id'];
    $name =$_FILES['avatar']["name"] ;
	$extension=".png";

    if (is_uploaded_file($_FILES['avatar']["tmp_name"])) {
        if (rename($_FILES['avatar']["tmp_name"],
                   $repertoireDestination.$name)) {
            echo "Le fichier temporaire".$_FILES['avatar']["tmp_name"].
                 " a été déplacé vers ".$repertoireDestination.$id.$name;
            $identifi = '<?php'."\n\n";
            $identifi .= '$id = \'' . $name . '\';' . "\n";
            $identifi .= '?' . '>'; 
            $_SESSION['avatar']=$repertoireDestination.$id.$name;
            $_SESSION['upload']="valideAvatar";
            header('Location: ../view/gestion_profil.php');
    
        } else {
            echo "Le déplacement du fichier temporaire a échoué".
                 " vérifiez l'existence du répertoire ".$repertoireDestination;
                 $_SESSION['upload']="nonValideAvatar";
                 header('Location: ../view/gestion_profil.php');
        }          
    } else {
        $_SESSION['upload']="nonValideAvatar";
       echo "Le fichier n'a pas été uploadé";
       header('Location: ../view/gestion_profil.php');

    }
    $membre->updateAvatar($bdd,$avatar);


?>