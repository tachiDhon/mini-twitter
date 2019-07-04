<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tweet @cademie</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="cotn_principal">
		<img src="logo.png">
		<div class="cont_centrar">
			<div class="cont_login">
				<div class="cont_info_log_sign_up">
					<div class="col_md_login">
						<div class="cont_ba_opcitiy">
							<h2>Se connecter</h2>  
							<p></p> 
							<button class="btn_login" onclick="cambiar_login()">Cliquez ici</button>
						</div>
					</div>
					<div class="col_md_sign_up">
						<div class="cont_ba_opcitiy">
							<h2>S'incrire</h2>
							<p></p>
							<button class="btn_sign_up" onclick="cambiar_sign_up()">Cliquez ici</button>
						</div>
					</div>
				</div>
				<div class="cont_back_info">
					<div class="cont_img_back_grey">
						<img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
					</div>
				</div>
				<div class="cont_forms" >
					<div class="cont_img_back_">
						<img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
					</div>
					<form id="connexion" method="POST">
						<div class="cont_form_login">
							<h2>Connexion</h2>
							<input type="email" placeholder="Adresse mail" id="email_co" name="email" required>
							<input type="password" placeholder="Mot de passe" id="mdp_co" name="mdp" required>
							<button class="btn_login" onclick="cambiar_login()">SE CONNECTER</button>
						</div>
					</form>
					<form id="inscription" method="POST">
						<div class="cont_form_sign_up">
							<h2>Inscription</h2>
							<input type="text" placeholder="Nom" id="nom" name="nom" required>
							<input type="text" placeholder="Prénom" id="prenom" name="prenom" required>
							<input type="text" placeholder="Pseudo" id="pseudo" name="pseudo" required>
							<input type="date" id="birthdate" name="birthdate" required>
							<input type="text" placeholder="Pays" id="pays" name="pays" required>
							<input type="email" placeholder="Adresse mail" id="email" name="email" required>
							<input type="password" placeholder="Mot de passe" id="mdp" name="mdp" required>
							<button class="btn_sign_up" onclick="cambiar_sign_up()">S'INSCRIRE</button>
						</div>
					</form>
					<script src="page_inscription.js"></script>
				</div>
			</div>
		</div>
	</div>
</body>
</html>