<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tweet @cademie</title>
	<link rel="stylesheet" href="styletweet.css" type="text/css"/>
</head>
<body>
	<nav>
		<label for="menu-mobile" class="menu-mobile">Menu</label>
		<input type="checkbox" id="menu-mobile" role="button">
		<ul>
			<li><a href="newformat2.php"><img src="minilogo.png"></a></li>
			<li class="menu-tl"><a href="newformat2.php"><img src="https://img.icons8.com/ios/50/000000/person-at-home.png" height="35"></a>
				<li class="menu-search"><a href="#"><img src="https://img.icons8.com/ios/50/000000/google-web-search.png" height="35"></a></li>
				<li class="menu-dm"><a href="#"><img src="https://img.icons8.com/ios/50/000000/new-post.png" height="35"></a></li>
				<li class="menu-profil"><a href="#"><img class="pp" src="https://previews.123rf.com/images/salamatik/salamatik1801/salamatik180100019/92979836-ic%C3%B4ne-de-visage-anonyme-de-profil-personne-silhouette-grise-avatar-par-d%C3%A9faut-masculin-photo-placeholder-.jpg" height="35px"></a>
					<ul class="submenu">
						<li><a href="#"><img src="https://img.icons8.com/ios/100/000000/user-male-circle.png" height="17"> Profil - @<?php echo $_SESSION['pseudo'] ?></a></li>
						<li><a href="settings.php"><img src="https://img.icons8.com/ios/64/000000/vertical-settings-mixer.png" height="17"> Réglages</a></li>
						<li><a href="deconnexion.php"><img src="https://img.icons8.com/ios/50/000000/logout-rounded-up.png" height="17"> Déconnexion</a></li>
					</ul>
				</li>
			</li>
		</ul>
	</nav>
		<div class="tweet-post">
			<p>You have 144 characters left</p>
			<textarea>
			</textarea>
			<input type="submit" text="submit">
		</div>
		<div class="affiche_tweet">
		<?php	
			include('page_membre.php');
		?>
		</div>
	</body>
	</html>