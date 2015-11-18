<?php
class VilleManager {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  /*
  Cette fonction permet d'ajouter une ville dans la base de données.
  */
  public function add($ville) {

		if ($this->isExistanteVille ( $ville->getVilleNom () )) { // la ville existe déjà
			throw new ExceptionPerso("Le nom de la ville existe d&eacute;j&agrave; ! Il est impossible d'ajouter deux fois la m&ecirc;me ville.", ExceptionPerso::ERR_VILLE);
		}
    $sql = 'INSERT INTO ville (vil_nom) VALUES (:ville);';
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ':ville', $ville->getVilleNom () );

		$retour = $requete->execute ();
		return $retour;
	}

  public function update($ville) {

    if ($this->isExistanteVille ( $ville->getVilleNom () )) { // la ville existe déjà
			throw new ExceptionPerso("Le nom de la ville existe d&eacute;j&agrave; ! Il est impossible d'ajouter deux fois la m&ecirc;me ville.", ExceptionPerso::ERR_VILLE);
		}

    $sql = "UPDATE ville SET vil_nom=:vil_nom WHERE vil_num=:vil_num";
    $requete = $this->db->prepare ( $sql );
    $requete->bindValue ( ':vil_num', $ville->getVilleNum () );
    $requete->bindValue ( ':vil_nom', $ville->getVilleNom () );

    $retour = $requete->execute ();
    return $retour;
  }

  public function getVille($vil_num) {
    $sql = "SELECT vil_num,vil_nom FROM ville WHERE vil_num=:vil_num";
    $requete = $this->db->prepare($sql);
    $requete->bindValue(":vil_num", $vil_num);
    $requete->execute();
    $ligne = $requete->fetch(PDO::FETCH_OBJ);
    $ville = new Ville($ligne);
    $requete->closeCursor();
    return $ville;
  }

  /*Permet de savoir si une ville est liée a un étudiant ou seulement a un département en vue de sa suppression.*/
  public function isVilleNumDejaUtilise($vil_num) {
    $sql = "SELECT v.vil_num FROM ville v JOIN departement d ON d.vil_num=v.vil_num JOIN etudiant e ON e.dep_num=d.dep_num WHERE v.vil_num=:ville";

    $requete = $this->db->prepare($sql);

    $requete->bindValue(":ville", $vil_num);

    $retour = $requete->execute();
    $resultat = $requete->fetch(PDO::FETCH_OBJ);
    if (empty($resultat)) {
      return false;
    }
    return true;
  }

  public function delete($vil_num) {
    if ($this->isVilleNumDejaUtilise($vil_num)) {
      throw new ExceptionPerso("La ville est déjà utilisée, merci de supprimer les étudiants appartenant à cette ville d'abord !", ExceptionPerso::ERR_VILLE);
    }

    $sql = "DELETE FROM departement WHERE vil_num=:ville; DELETE FROM ville WHERE vil_num=:ville";
    $requete = $this->db->prepare($sql);

    $requete->bindValue(":ville", $vil_num);

    $retour = $requete->execute();
    return $retour;
  }

  /*
  Cette fonction permet de verifier que l'on ajoute pas une ville qui existe deja.
  Retourne true si la ville existe déjà, false sinon.
  */
	public function isExistanteVille($vil_nom) {
		$sql = "SELECT vil_num, vil_nom FROM ville WHERE vil_nom=:vil_nom ";
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ":vil_nom", $vil_nom );

		$requete->execute ();

		$resultat = $requete->fetch ( PDO::FETCH_OBJ );

		if ($resultat != null) // La ville existe déjà
    {
			return true;
		} else {
			return false;
		}
	}



  /*
  Fonction qui permet de lister toutes les villes présente dans la base de données.
  Retourne un tableau d'objet Ville
  */
  public function getAllVilles() {
    $listeVilles = array();

    $sql = 'SELECT vil_num, vil_nom FROM ville';

    $requete = $this->db->prepare($sql);
    $requete->execute();

    while ($ville = $requete->fetch(PDO::FETCH_OBJ)) {
      $listeVilles[] = new Ville($ville);
    }
    $requete->closeCursor();
    return $listeVilles;
  }

  /*
  Cette fonction permet de savoir le nombre de villes présentes dans la base de données.
  Retourne directement la valeur.
  */
  public function getNbVilles() {
    $sql = "SELECT count(vil_num) as nbVille FROM ville";

    $requete = $this->db->prepare($sql);
    $requete->execute();

    $retour = $requete->fetch(PDO::FETCH_ASSOC);
    return $retour['nbVille'];
  }
}
?>
