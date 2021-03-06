<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tweet @cademie</title>
	<link rel="stylesheet" href="style_tl.css" type="text/css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-light bg-white">
		<a href="tweetlist.php"><img src="minilogo.png"></a>
		<form class="form-inline">
			<div class="input-group">
				<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-primary" type="button" id="button-addon2">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
		</form>
	</nav>


	<div class="container-fluid gedf-wrapper">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div class="h5">TN DU BOUG</div>
						<div class="h7 text-muted">@ DU BOUG</div>
						<div class="h7">BIOGRAPHIE DU BOUG
						</div>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="h6 text-muted">Abonnés(s)</div>
							<div class="h5">NOMBRE D'ABONNES</div>
						</li>
						<li class="list-group-item">
							<div class="h6 text-muted">Abonnement(s)</div>
							<div class="h5">NOMBRE D'ABONNEMENTS</div>
						</li>
						<li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>
			</div>
			<div id="liste" class="col-md-6 gedf-main">

				<!--- \\\\\\\Post-->
				<div class="card gedf-card">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Ecrire un tweet</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
								<div id="form_tweet" class="form-group">
									<form id="tweeet" method="POST">
										<label class="sr-only" for="message">post</label>
										<textarea class="form-control" id="tweet-contenu" name="tweet-contenu" rows="3" maxlength="140" placeholder="Ecris ton tweet ici ma gueule!"></textarea>

									<input type="submit" name="share" value="share">
									</form>
								</div>

							</div>
							<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile">
										<label class="custom-file-label" for="customFile">C'est par ici les médias ma gueule!</label>
									</div>
								</div>
								<div class="py-4"></div>
							</div>
						</div>
						<div class="btn-toolbar justify-content-between">
							<div class="btn-group">
								<button type="submit" class="btn btn-primary">share</button>
							</div>
							<div class="btn-group">
								<button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								<i class="fa fa-globe"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
								<a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
								<a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
								<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Post /////-->

			<!--- \\\\\\\Post-->
			<div id="poste" class="card gedf-card">
				<div class="card-header">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2">
								<img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
							</div>
							<div class="ml-2">
								<div class="h5 m-0">@LeeCross</div>
								<div class="h7 text-muted">Miracles Lee Cross</div>
							</div>
						</div>
						<div>
							<div class="dropdown">
								<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
									<div class="h6 dropdown-header">Configuration</div>
									<a class="dropdown-item" href="#">Save</a>
									<a class="dropdown-item" href="#">Hide</a>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
					<a class="card-link" href="#">
						<p class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</p>
					</a>

					<p class="card-text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
						sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
					<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
				</div>
			</div>
			<!-- Post /////-->

			<!--- \\\\\\\Post-->
			<div class="card gedf-card">
				<div class="card-header">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2">
								<img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
							</div>
							<div class="ml-2">
								<div class="h5 m-0">@LeeCross</div>
								<div class="h7 text-muted">Miracles Lee Cross</div>
							</div>
						</div>
						<div>
							<div class="dropdown">
								<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
									<div class="h6 dropdown-header">Configuration</div>
									<a class="dropdown-item" href="#">Save</a>
									<a class="dropdown-item" href="#">Hide</a>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
					<a class="card-link" href="#">
						<h5 class="card-title">Totam non adipisci hic! Possimus ducimus amet, dolores illo ipsum quos
						cum.</h5>
					</a>

					<p class="card-text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt fugit reprehenderit consectetur exercitationem odio,
						quam nobis? Officiis, similique, harum voluptate, facilis voluptas pariatur dolorum tempora sapiente
						eius maxime quaerat.
						<a href="https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
					<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
				</div>
			</div>
			<!-- Post /////-->



		</div>
		<div class="col-md-3">
			<div class="card gedf-card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
					card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
			</div>
			<div class="card gedf-card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
					card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="script-tweet.js"></script>
</body>
</html>
