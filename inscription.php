<?php

require('connect.php');
include_once('index.php');

class user extends Connexion_BDD {
	private $nom;
	private $prenom;
	private $date_naissance;
	private $pays;
	private $email;
	private $mdp;

	public function __construct($post) {
		$this->nom = $post['nom'];
		$this->prenom = $post['prenom'];
		$this->date_naissance = $post['birthdate'];
		$this->pays = $post['pays'];
		$this->email = $post['email'];
		$this->mdp = hash_hmac('ripemd160', $post['mdp'], "vive le projet tweet_academy");
	}
}