<?php
require_once 'connexionBdd.php';
require_once '../controller/Membre.class.php';


if(isset($_SESSION['pseudo'])) {
$membre = new Membre($_SESSION['pseudo'],"","","","","",null,"","avatar.png");

function fonctionUpdateMembre($membre){
    if($_SESSION['routing']==="modification"){
        $membre->updateMembre($_SESSION['pseudo'],$_SESSION['mdp'],$_SESSION['mdp'],$_SESSION['valeurEmail'],$_SESSION['nom'],$_SESSION['prenom'],$_SESSION['date_naissance'],$_SESSION['avatar'],$_SESSION['telephone']);
    }
    if($_SESSION['routing']==="modificationAvatar"){
       $membre->updateAvatar($bdd);
    }
}}
function select_six_videaste($bdd) {
    /* Sélection de l'utilisateur concerné */
    
    $requete = "SELECT *,count(id_clik) as nombreClik FROM clik INNER JOIN post ON clik.id_post=post.id_post INNER JOIN inscription ON post.id_membre= inscription.id_membre GROUP BY inscription.id_membre ORDER BY nombreClik DESC limit 6 ";
    $result =$bdd -> query($requete);

    $sql=$bdd->query($requete);

    $donnees = $sql->fetchAll();
   
    


$topvideaste=[];
for($i=0;$i<count($donnees);$i++){
    $pseudo=$donnees[$i][14];
    
    $topvideaste[$i]=
 "<p  >
        
    <a href='../controller/routing/routing_pseudo.php?pseudoView=$pseudo' title='Lien 1'
        >$pseudo</a
    >
</p>";
}
return $topvideaste;
}

//Manonmaite13!
?>

