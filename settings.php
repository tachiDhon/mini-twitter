<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tweet @cademie</title>
	<link rel="stylesheet" href="style_settings.css" type="text/css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked admin-menu">
					<li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Compte</a></li>
					<li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
					<li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Général</a></li>
					<li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Déconnexion</a></li>
				</ul>
				<ul class="nav">
					<li><a href="tl.php">Retour</a></li>
				</ul>
			</div>

			<div class="col-md-9  admin-content" id="profile">
				<form id="compte" method="POST">
					<div class="panel panel-info" style="margin: 1em;">
						<div class="panel-heading">
							<h3 class="panel-title">Pseudo</h3>
						</div>
						<div class="panel-body">
							<input id="pseudo" name="pseudo" type="text" placeholder="@<?php echo $_SESSION['pseudo']; ?>">
						</div>
					</div>
					<div class="panel panel-info" style="margin: 1em;">
						<div class="panel-heading">
							<h3 class="panel-title">Email</h3>
						</div>
						<div class="panel-body">
							<input id="email" name="email" type="email" placeholder="<?php echo $_SESSION['email']; ?>">
						</div>
					</div>
					<div class="panel panel-info border" style="margin: 1em;">
						<div class="panel-body">
							<div class="form-group">
								<input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Sauvegarder">
							</div>
						</div>
					</div>
			</div>
			<div class="col-md-9  admin-content" id="settings">
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Notification</h3>
					</div>
					<div class="panel-body">
						<div class="label label-success">allowed</div>
					</div>
				</div>
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Newsletter</h3>
					</div>
					<div class="panel-body">
						<div class="badge">Monthly</div>
					</div>
				</div>

			</div>

			<div class="col-md-9  admin-content" id="change-password">


					<div class="panel panel-info" style="margin: 1em;">
						<div class="panel-heading">
							<h3 class="panel-title"><label for="new_mdp" class="control-label panel-title">Nouveau mot de passe</label></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" name="new_mdp" id="new_mdp" >
								</div>
							</div>

						</div>
					</div>


					<div class="panel panel-info" style="margin: 1em;">
						<div class="panel-heading">
							<h3 class="panel-title"><label for="mdp_confirmation" class="control-label panel-title">Confirmez le mot de passe</label></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" name="mdp_confirmation" id="mdp_confirmation" >
								</div>
							</div>
						</div>
					</div>


					<div class="panel panel-info border" style="margin: 1em;">
						<div class="panel-body">
							<div class="form-group">
								<input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Sauvegarder">
							</div>
						</div>
					</div>

				</form>
			</div>

			<div class="col-md-9  admin-content" id="settings"></div>

			<div class="col-md-9  admin-content" id="logout">
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Confirm Logout</h3>
					</div>
					<div class="panel-body">
						Do you really want to logout ?  
						<a  href="deconnexion.php" class="label label-danger">
						<span >   Yes   </span>
					</a>    
					<a href="settings.php" class="label label-success"> <span >  No   </span></a>
				</div>
				<form id="logout-form" method="POST" style="display: none;">
				</form>
			</div>
		</div>
	</div>
	<script src="script-settings.js"></script>
</body>
</html>