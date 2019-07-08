<?php

session_start();

include('connect.php');

class MAJ extends Connexion_BDD
{
	private $pseudo;
	private $email;
	private $mdp;
	private $mdp_confirm;

	public function __construct()
	{
		$this->pseudo = $_POST['pseudo'];
		$this->email = $_POST['email'];
		$this->mdp = $_POST['new_mdp'];
		$this->mdp_confirm = $_POST['mdp_confirmation'];
		$this->bdd = new Connexion_BDD;
	}

	public function getpseudo()
	{
		return $this->pseudo;
	}

	public function getemail()
	{
		return $this->email;
	}

	public function getmdp()
	{
		return $this->mdp;
	}

	public function getmdp_confirm()
	{
		return $this->mdp_confirm;
	}
	
	public function getbdd()
	{
		return $this->bdd;
	}

	public function UpdateCompte()
	{
		if ($this->pseudo != "") {
			$verifie_pseudo = $this->bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
			$test = $verifie_pseudo->execute(array($this->pseudo));

			if ($verifie_pseudo->rowcount() == 0) {
				$new_pseudo = $this->bdd->prepare('UPDATE users SET pseudo = ? WHERE id = ?');
				$update = $new_pseudo->execute(array($this->pseudo, $_SESSION['id']));
				$_SESSION['pseudo'] = $this->pseudo;
				echo "Votre pseudo a été correctement modifié!";
			}else {
				echo "Ce pseudo est déjà utilisé!";
			}
		}

		if ($this->email != "") {
			$verifie_email = $this->bdd->prepare('SELECT * FROM users WHERE mail = ?');
			$test = $verifie_email->execute(array($this->email));

			if ($verifie_email->rowcount() == 0) {
				$new_email = $this->bdd->prepare('UPDATE users SET mail = ? WHERE id = ?');
				$update2 = $new_email->execute(array($this->email, $_SESSION['id']));
				$_SESSION['email'] = $this->email;
				echo "Votre email a été correctement modifié!";
			}else {
				echo "Cette adresse mail est déjà utilisée!";
			}
		}

		if ($this->mdp != "" && $this->mdp_confirm != "") {
			if ($this->mdp == $this->mdp_confirm) {
				$this->mdp = hash_hmac('ripemd160', $this->mdp, 'vive le projet tweet_academy');
				$new_mdp = $this->bdd->prepare('UPDATE users SET password = ? WHERE id = ?');
				$update3 = $new_mdp->execute(array($this->mdp, $_SESSION['id']));
				echo "Votre mot de passe a été correctement modifié!";
			}else {
				echo "Les mots de passe sont différents!";
			}
		}
	}
}

$maj = new MAJ;
$maj->connexion();
$maj->UpdateCompte();