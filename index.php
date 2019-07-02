<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tweet @cademie</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="cotn_principal">
		<img src="https://fontmeme.com/temporary/9185935e815d0d5666fbc02a8098eab1.png">
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
					<div class="cont_form_login">
						<h2>Connexion</h2>
						<input type="email" placeholder="Adresse mail" name="email">
						<input type="password" placeholder="Mot de passe" name="mdp">
						<button class="btn_login" onclick="cambiar_login()">SE CONNECTER</button>
					</div>
					<form method="POST" action="inscription.php">
						<div class="cont_form_sign_up">
							<h2>Inscription</h2>
							<input type="text" placeholder="Nom" name="nom">
							<input type="text" placeholder="Prénom" name="prenom">
							<input type="date" name="birthdate">
							<input type="text" placeholder="Pays" name="pays">
							<input type="email" placeholder="Adresse mail" name="email">
							<input type="password" placeholder="Mot de passe" name="mdp">
							<button class="btn_sign_up" onclick="cambiar_sign_up()">S'INSCRIRE</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect ---------------------------------------*/
	function cambiar_login() {
		document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
		document.querySelector('.cont_form_login').style.display = "block";
		document.querySelector('.cont_form_sign_up').style.opacity = "0";               
		setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
		setTimeout(function(){    
		document.querySelector('.cont_form_sign_up').style.display = "none";
		},200);  
	}

	function cambiar_sign_up(at) {
		document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
		document.querySelector('.cont_form_sign_up').style.display = "block";
		document.querySelector('.cont_form_login').style.opacity = "0";
		setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
		},100);  
		setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
		},400);  
	}   
	</script>
</body>
</html>