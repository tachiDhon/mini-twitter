<?php 

include('connect.php');

/**
 * 
 */
class Connexion extends Connexion_BDD
{
	private $email;
	private $mdp;
	protected $bdd;
	
	public function __construct()
	{
		$this->email = $_POST['email'];
		$this->mdp = $_POST['mdp'];
		$this->bdd = new Connexion_BDD;
	}

	public function getemail()
	{
		return $this->email;
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

	public function User_connect()
	{
		$verifie_email = $this->bdd->prepare('SELECT * FROM users WHERE mail = ?');
		$test = $verifie_email->execute(array($this->email));

		$verifie_mdp = $this->bdd->prepare('SELECT * FROM users WHERE password = ?');
		$test2 = $verifie_mdp->execute(array($this->mdp));

		if ($verifie_email->rowcount() == 0) 
		{
			echo "Adresse mail incorrecte"; 
		}

		elseif ($verifie_mdp->rowcount() == 0) 
		{
			echo "Mot de passe incorrect"; 
		}

		else
		{
			echo "Bienvenue sur Tweet Academie!";

			while($donnees = $verifie_email->fetch()) {
				$id = $donnees['id'];
				$pseudo = $donnees['pseudo'];
			}

			session_start();
			
			$_SESSION['email'] = $this->email;
			$_SESSION['id'] = $id;
			$_SESSION['pseudo'] = $pseudo;
		}


	}
}

$donnees = new Connexion;
$donnees->getmdp();
$donnees->connexion();
$donnees->User_connect();