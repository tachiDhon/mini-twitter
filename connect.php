<?php

class Connexion_BDD {
	protected $bdd;
	protected function __construct() {
		try {
			$this -> bdd = new PDO('mysql:host=localhost;dbname=commont-database;charset=utf8', 'root', 'root');
			$this -> bdd -> exec('SET CHARACTER SET utf8');
			$this -> bdd -> exec('SET NAMES utf8');
		}
		catch (PDOExeception $e) {
			die("Erreur: " . $e -> getMessage());
		}
	}
}
