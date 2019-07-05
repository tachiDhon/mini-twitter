<?php

require('connect.php');

class user extends Connexion_BDD {
	private $nom;
	private $prenom;
	private $date_naissance;
	private $pays;
	private $email;
	private $mdp;
	private $pseudo;
	protected $bdd;

	public function __construct() {
		$this->nom = $_POST['nom'];
		$this->pseudo = $_POST['pseudo'];
		$this->prenom = $_POST['prenom'];
		$this->date_naissance = $_POST['birthdate'];
		$this->pays = $_POST['pays'];
		$this->email = $_POST['email'];
		$this->mdp = $_POST['mdp'];
		$this->bdd = new Connexion_BDD;
	}

	public function getnom()
	{
		return $this->nom;
	}

	public function getprenom()
	{
		return $this->prenom;
	}

	public function getdate_naissance()
	{
		return $this->date_naissance;
	}

	public function getpays()
	{
		return $this->pays;
	}

	public function getemail()
	{

		return $this->email;
	}

	public function getpseudo()
	{

		return $this->pseudo;
	}

	public function getmdp()
	{
		$this->mdp = hash_hmac('ripemd160', $this->mdp, 'vive le projet tweet_academy');
		return $this->mdp;
	}

	public function getbdd()
	{
		return $this->bdd;
	}

	public function newUser() {
		$verifie_email = $this->bdd->prepare('SELECT mail FROM users WHERE mail = ?');
		$test = $verifie_email->execute(array($this->email));
		$verifie_pseudo = $this->bdd->query('SELECT pseudo FROM users WHERE pseudo = ?');
		$test2 = $verifie_pseudo->execute(array($this->pseudo));
		if ($verifie_email->rowcount() >= 1) {
			echo "Cette adresse mail est déjà utilisée!";
		}elseif ($verifie_pseudo->rowcount() >= 1) {
			echo "Ce pseudo est déjà utilisé!";
		}else {
			$requete = $this->bdd->query("INSERT INTO users (`mail`, `pseudo`, `password`) VALUES ('" . $this->email . "', '" . $this->pseudo . "', '" . $this->mdp . "')");
			$requete2 = $this->bdd->query("SELECT id FROM users WHERE mail = '" . $this->email . "'");
			while ($data = $requete2->fetch()) {
				$id = $data['id'];
			}
			$requete3 = $this->bdd->query("INSERT INTO user_info (`id_user`, `birthdate`, `pays`, `name`, `surname`) VALUES (" . $id . ", '" . $this->date_naissance . "', '" . $this->pays . "', '" . $this->nom . "', '" . $this->prenom . "')");
			echo "Votre compte a bien été créé. Vous pouvez à présent vous connecter!";
		}
	}
}

$donnees = new user;
$donnees->connexion();
$donnees->getmdp();
$donnees->newUser();