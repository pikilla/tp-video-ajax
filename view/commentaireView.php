<?php
require_once '../modele/mediaDowloadBdd.php';
$messagesArray=[];
$derniersCommentaires=afficherCommentaire($download,$bdd,$_SESSION['id_post']);
$i=0;
$id_post=$_SESSION['id_post'];
if($derniersCommentaires===false){
    $formComment="
    <form method='POST' action='../controller/controller_commentaire.php'>
    <h3>Pseudo :</h3><input type='text' name='pseudo' id='pseudo class='mb-2 mx-2' /><br />
    <h3>Message :</h3> <textarea name='message' id='message'></textarea><br />
    <input type='submit' name='submit' value='Envoyez votre message !' id='envoi' />
    </form>
    <h2>Commentaires</h2>
    <div id='messages' class='bg-secondary mt-2'>
     <p>il n'y a pas de commentaire</p>
    <!-- les messages du tchat -->
    </div>";
    

}else{
foreach( $derniersCommentaires as $commentaire){
    $messagesArray[$i]='<p>'.$commentaire['comment'].'</p>';
    $i++;
}
$tousmessages=implode('',$messagesArray);
 //var_dump($tousmessages);
$formComment="
<form method='POST' action='../controller/controller_commentaire.php'>
<h3>Pseudo :</h3><input type='text' name='pseudo' id='pseudo' class='mb-2 mx-2' /><br />
<h3>Message :</h3> <textarea name='message' id='message'></textarea><br />
<input type='text' name='id_post' value=$id_post id='id_post' hidden />
<input type='submit' name='submit' value='Envoyez votre message !' id='envoi' />
</form>
<h2>Commentaires</h2>
<div id='messages' class='bg-secondary mt-2'>
$tousmessages
<!-- les messages du tchat -->
</div>";

}




?>