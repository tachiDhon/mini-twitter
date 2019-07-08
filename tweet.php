<?php

session_start();

include('connect.php');

class Tweets extends Connexion_BDD
{
	private $email;
	private $id;
	private $pseudo;
	public $contenu;
	protected $bdd;

	public function __construct()
	{
		$this->email = $_SESSION['email'];
		$this->id = $_SESSION['id'];
		$this->pseudo = $_SESSION["pseudo"];
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

	public function getpseudo()
	{
		return $this->pseudo;
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
			}		
		}

		else
		{	
			$requete = $this->bdd->query("INSERT INTO post (`id_user`, `post_content`, `post_date`, `hashtags`, `hasMedia`, `media_id`) VALUES (" . $this->id .", '" . $this->contenu . "', NOW(), 'NULL' , NULL, NULL)");


			echo'<div class="card gedf-card">
						<div class="card-header">
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex justify-content-between align-items-center">
								<div class="mr-2">
									<img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
								</div>
								
									<div class="m-0"><h3>@' . $_SESSION["pseudo"] . '<h3></div>
									<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
								</div>
							<div>
								<div class="dropdown">
						
								</div>
							</div>
						</div>

					</div>
					<div class="card-body">

						<p class="card-text">
							' . $this->contenu . '
						</p>
					</div>
					<div class="card-footer">
						<a href="#" class="card-link"><i class="fa fa-gittip"></i><img class="like" src="https://img.icons8.com/material-outlined/24/000000/filled-like.png"> Like</a>
						<a href="#" class="card-link"><i class="fa fa-mail-forward"></i><img class="retweet" src="https://img.icons8.com/material/24/000000/retweet.png"> Retweet</a>
						<a href="#" class="card-link"><i class="fa fa-comment"></i><img class="comment" src="https://img.icons8.com/android/24/000000/comments.png"> Comment</a>
					</div>
				</div>
				</div>
			';
		}
	}
}

$donnes = new Tweets;
$donnes->connexion();
$donnes->sendTweet();