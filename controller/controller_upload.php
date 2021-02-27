<?php
require_once 'controller_session.php';
require_once '../modele/connexionBdd.php';
require_once 'Upload.class.php';
if(!isset($_POST['titre'])){
    echo "ntm";
                 header('Location: ../view/gestion_profil.php');
}
$date_post = new DateTime();
echo $date_post->format('u');
$type = $_POST['photo/video'] ;
var_dump($_POST['photo/video']);
if($_POST['photo/video']==="video"){
$extension=".mp4";}else{$extension=".png";}

$repertoireDestination = "../view/ressources/upload/$type/";
$upload = new Upload(
    $_SESSION['id'],
    $_POST['photo/video'],
    $_POST['gender'],
    $_POST['titre'],
    $_POST['description'],
    $date_post->format('Y-m-d H:i:s'),
    $date_post->format('u').$extension
);
    $id=$_SESSION['id'];
    $name =$date_post->format('u');
    if (is_uploaded_file($_FILES['fichier']["tmp_name"])) {
        if (rename($_FILES['fichier']["tmp_name"],
                   $repertoireDestination.$name.$extension)) {
            echo "Le fichier temporaire".$_FILES['fichier']["tmp_name"].
            " a été déplacé vers ".$repertoireDestination.$id.$name.$extension;
            $identifi = '<?php'."\n\n";
            $identifi .= '$id = \'' . $name . '\';' . "\n";
            $identifi .= '?' . '>'; 
            $_SESSION['url']=$repertoireDestination.$id.$name;
            $upload->creerUpload($bdd);
            $_SESSION['upload']="valide";
            header('Location: ../view/gestion_profil.php');
    
        } else {
            echo "Le déplacement du fichier temporaire a échoué".
                 " vérifiez l'existence du répertoire ".$repertoireDestination;
                 $_SESSION['upload']="nonValide";
                 header('Location: ../view/gestion_profil.php');
        }          
    } else {
       echo "Le fichier n'a pas été uploadé";
       $_SESSION['upload']="nonValide";
       header('Location: ../view/gestion_profil.php');
    }
    var_dump($_SESSION['avatar']);
?>