<?php
require_once '../modele/mediaDowloadBdd.php';
require_once 'controller_session.php';
if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire

    if(!empty($_POST['message']) AND !empty($_POST['message'])){ // si les variables ne sont pas vides
    
        $id_post =$_SESSION['id_post'];
        $message = $_POST['message']; 
$requete="INSERT INTO commentaire(id_post,comment) VALUES( :id_post, :message)";
        // puis on entre les données en base de données :
        $insertion = $bdd->prepare($requete);
        $insertion->execute(array(

            'id_post' => $id_post,
            'message' => $message
        ));
        header('Location: ../view/index.php');
    }
    else{
        echo "Vous avez oublié de remplir un des champs !";
    }

}


// ...
// on se connecte à notre base de données

// if(!empty($_GET['id'])){ // on vérifie que l'id est bien présent et pas vide

//     $id = (int) $_GET['id']; // on s'assure que c'est un nombre entier

//     // on récupère les messages ayant un id plus grand que celui donné
//     $requete = $bdd->prepare('SELECT * FROM commentaire WHERE id_comment > :id ORDER BY id_comment DESC');
//     $requete->execute(array("id" => $id));

//     $messages = null;

//     // on inscrit tous les nouveaux messages dans une variable
//     while($donnees = $requete->fetch()){
//         $messages .= "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
//     }

//     echo $messages; // enfin, on retourne les messages à notre script JS

// }

?>

