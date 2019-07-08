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
				<ul class="nav nav-pills nav-stacked admin-menu" >
					<li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Compte</a></li>
					<li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
					<li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Général</a></li>
					<li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Déconnexion</a></li>
				</ul>
			</div>

			<div class="col-md-9  admin-content" id="profile">
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Nom d'utilisateur</h3>
					</div>
					<div class="panel-body">
						@<?php echo $_SESSION['pseudo']; ?>
					</div>
				</div>
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Email</h3>
					</div>
					<div class="panel-body">
						<?php echo $_SESSION['email']; ?>
					</div>
				</div>
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Tweet Name</h3>

					</div>
					<div class="panel-body">
						4 days Ago
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
				<div class="panel panel-info" style="margin: 1em;">
					<div class="panel-heading">
						<h3 class="panel-title">Admin</h3>

					</div>
					<div class="panel-body">
						<div class="label label-success">yes</div>
					</div>
				</div>

			</div>

			<div class="col-md-9  admin-content" id="change-password">
				<form method="POST">


					<div class="panel panel-info" style="margin: 1em;">
						<div class="panel-heading">
							<h3 class="panel-title"><label for="new_password" class="control-label panel-title">New Password</label></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" id="new_password" >
								</div>
							</div>

						</div>
					</div>


					<div class="panel panel-info" style="margin: 1em;">
						<div class="panel-heading">
							<h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password_confirmation" id="confirm_password" >
								</div>
							</div>
						</div>
					</div>


					<div class="panel panel-info border" style="margin: 1em;">
						<div class="panel-body">
							<div class="form-group">
								<div class="pull-left">
									<input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
								</div>
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
					<a href="/account" class="label label-success"> <span >  No   </span></a>
				</div>
				<form id="logout-form" action="#" method="POST" style="display: none;">
				</form>
			</div>
		</div>
	</div>
	<script src="script-settings.js"></script>
</body>
</html>