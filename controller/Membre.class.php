<?php
class Membre {
	public $m_login, $m_mdp, $m_mdp2, $m_email, $m_nom, $m_prenom, $m_date_naissance, $m_avatar, $m_tel;
			
		/* constructeur */	
		public function __construct($pseudo, $password, $password_conf, $mail, $nom = 'aucun', $prenom = 'aucun', $date_naissance = 'aucun', $avatar = 'aucun',$tel = 'aucun') {
			$this->m_login = $pseudo;
			$this->m_mdp = $password;
			$this->m_mdp2 = $password_conf;
			$this->m_email = $mail;
			$this->m_nom = $nom;
			$this->m_prenom = $prenom;
			$this->m_date_naissance = $date_naissance;
			$this->m_avatar = $avatar;
			$this->m_tel = $tel;
		}
        
        public function creer() /* creation d un membre */{			
			$requete = "
				INSERT INTO utilisateur(
				login
				, mot_de_passe
				, email
				, nom
				, prenom
				, date_naissance
				)
				VALUES(
				'" . $this->m_login . "'
				, '" . SHA1($this->m_mdp) . "'
				, '" . $this->m_email . "'
				, '" . $this->m_nom . "'
				, '" . $this->m_prenom . "'
				, '" . $this->m_date_naissance . "'
				, '" . $this->m_avatar . "'

				)
				";
		
			$result = mysql_query($requete)
				or die ('Erreur de requête de base de données :'.mysql_error() ); 
				
				if($result){return true;}
				else {return false;}
			}
			
			public function select_user($bdd) /* selectionne le login et le mdp, pour un nom d utilisateur donnée */{
				/* Sélection de l'utilisateur concerné */
				$pseudo=$_SESSION['pseudo'];
				$requete = "SELECT * FROM inscription WHERE pseudo='$pseudo'";
				$result =$bdd -> query($requete);
			
		
		   while($row=$result->fetch()){


			if ($row['pseudo']===$_SESSION['pseudo'] ){
			 $_SESSION['pseudo'] = $row['pseudo'];
			 $_SESSION['prenom'] = $row['prenom'];
			 $_SESSION['nom'] = $row['nom'];
			 $_SESSION['email'] = $row['email'];
			 $_SESSION['telephone'] = $row['telephone'];
			 $_SESSION['mdp'] = $row['mdp'];
			 $_SESSION['date_naissance'] = $row['date_naissance'];
			 $_SESSION['avatar'] = $row['avatar'];
			 $_SESSION['id']=$row['id_membre'];
			 
			 return $_SESSION;
			} 
		 }
		}
		public function select_autre_user($bdd,$pseudo) /* selectionne le login et le mdp, pour un nom d utilisateur donnée */{
			/* Sélection de l'utilisateur concerné */
			
			$requete = "SELECT * FROM inscription WHERE pseudo='$pseudo'";
			$result =$bdd -> query($requete);
		
	
	   while($row=$result->fetch()){


		if ($row['pseudo']===$_SESSION['pseudoView'] ){
		 
		 $_SESSION['prenomView'] = $row['prenom'];
		 $_SESSION['nomView'] = $row['nom'];
		 $_SESSION['emailView'] = $row['email'];
		 $_SESSION['telephoneView'] = $row['telephone'];
		 $_SESSION['date_naissanceView'] = $row['date_naissance'];
		 $_SESSION['avatarView'] = $row['avatar'];
		 $_SESSION['idView']=$row['id_membre'];
		 
		 return $_SESSION;
		} 
	 }
	}

        public function update($bdd) /* modification/creation d un membre */{	
			/**
			 * Verifier les variables ainsi que le constructor
			 */
			$pseudo = $_SESSION['pseudo'];
			$user_id = $_SESSION['id'];

			
			
			//UPDATE `inscription` SET `nom` = efe, `prenom` = 'muchfe', `pseudo` = 'truckmuchfe', `email` = 'tferuc@much.fr', `telephone` = '0606060607' WHERE `inscription`.`id_membre` = 30;
			/*$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$bdd->exec("SET NAMES 'utf8'");*/

			try {
				$requete = "UPDATE inscription SET nom=:lname, prenom=:fname, telephone=:gsm, email=:courriel, pseudo=:cPseudo WHERE id_membre=$user_id";
				$sql = $bdd->prepare($requete);
			// test
			//var_dump($sql);

			$retourSQL = $sql->execute(array(':lname'=>$this->m_nom, ':fname'=>$this->m_prenom, ':gsm'=>$this->m_tel, ':courriel'=>$this->m_email, ':cPseudo'=>$this->m_login));
			
			}
			catch(Exception $e)
			{
				return $e.'dzdz';
			}

			
			

			
			// test
	
			
			// if($result) {return true;}
			// else {return false;}
		}
		public function updateMembre($pseudo, $password, $password_conf, $mail, $nom="aucun" , $prenom="aucun" , $date_naissance , $avatar="aucun" ,$tel="aucun" )/*modif d un membre */{
			$this->m_login=$pseudo;
			$this->m_mdp=$password;
			$this->m_mdp2=$password;
			$this->m_email= $mail;
			$this->m_nom=$nom ;
			$this->m_prenom=$prenom ;
			$this->m_date_naissance=$date_naissance;
			$this->m_avatar=$avatar;
			$this->m_tel=$tel;
		}
		public function updateAvatar($bdd,$avatar)/*ification/creation d un membre */{	
			/**
			 * Verifier les variables ainsi que le constructor
			 */
			
			$user_id = $_SESSION['id'];
			
			
			$requete = "UPDATE inscription SET avatar=:avatar WHERE id_membre=$user_id";
			//UPDATE `inscription` SET `nom` = efe, `prenom` = 'muchfe', `pseudo` = 'truckmuchfe', `email` = 'tferuc@much.fr', `telephone` = '0606060607' WHERE `inscription`.`id_membre` = 30;
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$bdd->exec("SET NAMES 'utf8'");
			
			$sql = $bdd->prepare($requete);
			// test
			var_dump($sql);
			// !test
			$retourSQL = $sql->execute(array(':avatar'=>$avatar));
			// test
			var_dump($retourSQL);
			// !test
			
			// if($result) {return true;}
			// else {return false;}
		}

		public function afficherNouvelAvatar($newAvatar) {	$this->m_avatar=$newAvatar;}


	
}
?>
