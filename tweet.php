<?php

session_start();

include('connect.php');

class Tweets extends Connexion_BDD
{
	private $email;
	private $id;
	public $contenu;
	protected $bdd;

	public function __construct()
	{
		$this->email = $_SESSION['email'];
		$this->id = $_SESSION['id'];
		$this->contenu = $_POST['tweet'];
		$this->bdd = new Connexion_BDD;
	}

	public function getemail()
	{
		return $this->email;
	}

	public function getid()
	{
		return $this->id;
	}

	public function getcontenu()
	{
		return $this->contenu;
	}

	public function getbdd()
	{
		return $this->bdd;
	}

	public function sendTweet()
	{
		$requete = $this->bdd->query('INSERT INTO post (`id_user`, `post_content`, `post_date`, `hashtags`, `hasMedia`, `media_id`) VALUES ("' . $this->id . '", "' . $this->contenu . '", "NOW()", NULL, NULL, NULL');

		$tab_2 = array();


		$tab = explode(" ", $this->contenu);


		foreach ($tab as $value)
		{
			$hash = strpos($value, "#", 0);
			
			if ($hash !== false)
			{
				array_push($tab_2, $value);
				
			}
		}

		if (count($tab_2) >= 1)
		{
			foreach ($tab_2 as $value)
			{
				$requete = $this->bdd->query("INSERT INTO post (`id_user`, `post_content`, `post_date`, `hashtags`, `hasMedia`, `media_id`) VALUES (" . $this->id .", '" . $this->contenu . "', NOW(), '" . $value . "' , NULL, NULL)");
				var_dump($requete);
			}		
		}

		else
		{	
			$requete = $this->bdd->query("INSERT INTO post (`id_user`, `post_content`, `post_date`, `hashtags`, `hasMedia`, `media_id`) VALUES (" . $this->id .", '" . $this->contenu . "', NOW(), 'NULL' , NULL, NULL)");

			var_dump($requete);
		}
	}
}

$donnes = new Tweets;
$donnes->connexion();
$donnes->sendTweet();