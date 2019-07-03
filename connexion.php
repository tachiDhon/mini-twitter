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
		$verifie_email = $this->bdd->query('SELECT mail FROM users WHERE mail = "' . $this->email . '"');

		$verifie_mdp = $this->bdd->query('SELECT password FROM users WHERE password = "' . $this->mdp . '"');


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
			echo "Bienvenu sur Tweet Academie!";
		}


	}
}

$donnees = new Connexion;
$donnees->getmdp();
$donnees->connexion();
$donnees->User_connect();