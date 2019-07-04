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
		$this->contenu = $_POST['tweet-contenu'];
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
	}
}