<?php

class Upload {
     
    public $id_membre; 
    public $type; 
    public $categorie; 
    public $titre; 
    public $description; 
    public $date_post;
    public $url;
			
		/* constructeur */	
		public function __construct($id_membre,$type, $categorie, $titre, $description, $date_post, $url) {
      $this->id_membre = $id_membre;
			$this->type = $type;
			$this->categorie = $categorie;
			$this->titre = $titre;
			$this->description = $description;
			$this->date_post = $date_post;
			$this->url = $url;       
		}

    function creerUpload($bdd){
            $requete="INSERT INTO post (
              `id_membre`,
              `type`,
              `categorie`,
              `titre`,
              `description`,
              `date_post`,
              `url`) 
              VALUES (:id_membre, :type, :categorie, :titre, :description, :date_post, :url)";
        
            $sql=$bdd->prepare($requete);
            $sql->execute(array(
              ':id_membre'=> $this->id_membre,
              ':type'=>$this->type,
              ':categorie'=>$this->categorie,
              ':titre'=>$this->titre,
              ':description'=>$this->description,
              ':date_post'=>$this->date_post,
              ':url'=>$this->url
            ));   
    }
    function uploadCarouselCentral($categorie, $bdd){
      $requete="SELECT * FROM post WHERE categorie='$categorie' AND `type`='video' ORDER BY date_post DESC limit 1 ";
      $sql=$bdd->query($requete);
      $donnees = $sql->fetch();
      return $donnees;

    }
    function uploadLigneCarousel($categorie, $bdd){
      $requete="SELECT * FROM post WHERE categorie='$categorie' AND `type`='video' ORDER BY date_post DESC limit 9 ";
      $sql=$bdd->query($requete);
      // $donneesArray=[];
      // $i=0;
      $donnees = $sql->fetchAll();
       return $donnees;
      // while($row=$sql->fetch()){

      // $donnees = $sql->fetch();
      // $donneesArray[$i]=$donnees;
      // $i=$i+1;
      // return $donneesArray;}

    }
    function downloadLigneCarouselProfil($id, $bdd){
      $requete="SELECT * FROM post INNER JOIN inscription ON inscription.id_membre=post.id_membre WHERE inscription.id_membre=$id ORDER BY date_post DESC";
      $sql=$bdd->query($requete);
      
      $donnees = $sql->fetchAll();
       return $donnees;
      
    }
    function downloadToutesVideosCategories($categorie, $bdd){
      $requete="SELECT * FROM post WHERE categorie='$categorie' ORDER BY date_post DESC limit 50 ";
      $sql=$bdd->query($requete);
      // $donneesArray=[];
      // $i=0;
      $donnees = $sql->fetchAll();
       return $donnees;
      
    }
    
    function supprimerUpload($bdd,$id_post){
      $requete="DELETE FROM  clik WHERE  `id_post` = :id_post " ;
  
      $sql=$bdd->prepare($requete);
      $sql->execute(array(
        ':id_post'=>$id_post
      ));   
      $requete="DELETE FROM  commentaire WHERE  `id_post` = :id_post " ;
  
      $sql=$bdd->prepare($requete);
      $sql->execute(array(
        ':id_post'=>$id_post
      ));   
       $requete="DELETE FROM `post` WHERE  `id_post` = :id_post " ;
  
      $sql=$bdd->prepare($requete);
      $sql->execute(array(
        ':id_post'=>$id_post
      ));   
  }
    function downloadGrandeVideo($bdd,$url){
      $requete="SELECT * FROM post INNER JOIN inscription ON inscription.id_membre=post.id_membre  WHERE `url` = '$url'";
      $sql=$bdd->query($requete);
      
      $donnees = $sql->fetch();
      return $donnees;
      var_dump($donnees);
    }
    function ajouterLike($bdd,$id_post,$id_membre){
      $requete="INSERT INTO clik (id_post,id_membre) VALUES ($id_post,$id_membre)";
 
  
      $sql=$bdd->query($requete);
        
    }
    function compterLike($bdd,$id_post){
      $requete="SELECT COUNT(id_clik) as 'nombreLike' FROM clik WHERE clik.id_post =$id_post";
      $sql=$bdd->query($requete);
      
      $donnees = $sql->fetch();
      return $donnees;
     
    }
    //recuperer dix dernier commentaires
    function recupererCommentaire($bdd,$id_post){
      $requete ="SELECT * FROM commentaire  WHERE id_post=$id_post   ORDER BY id_comment DESC LIMIT 10";
      $sql= $bdd->query($requete);
      $donnees = $sql->fetchAll();
      return $donnees;
     

    }
}
?>