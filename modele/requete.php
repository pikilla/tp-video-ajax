<?php
require_once "../controller/controller_session.php";
require_once "connexionBdd.php";

if(isset($_POST["pseudo"])&&!empty($_POST['pseudo'])){
        $pseudo = $_POST['pseudo'];
        
        $requete = "SELECT * FROM inscription WHERE pseudo='$pseudo'";
        $sql = $bdd -> query($requete);
    while ($row = $sql -> fetch()) {
        if ($row['pseudo'] === $_POST['pseudo'] && $row['mdp'] === SHA1(SALT.$_POST['mdp'])) {
            $_SESSION['pseudo'] = $row['pseudo'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['date_naissance'] = $row['date_naissance'];
            $_SESSION['telephone'] = $row['telephone'];
            $_SESSION['avatar'] = $row['avatar'];
            $_SESSION['mdp'] = $row['mdp'];
            $_SESSION['id_membre'] = $row['id_membre'];
            $_SESSION['logged_in'] = true;
            header("Location: ../controller/routing/routing_gestion_profil.php");
        } else {
            $_SESSION['erreurConnection'] =true;
            $_SESSION['logged_in'] = false;
            header("Location: ../view/inscription_connection_modif.php");
        }
    }
} else {
   header("Location: ../view/inscription_connection_modif.php");
}


