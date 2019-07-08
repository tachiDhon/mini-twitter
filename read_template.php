<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recherche</title>
	<link rel="stylesheet" href="styletweet.css" type="text/css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<div class="row">
		<div class="col-sm-12">
			<center><h2>Rechercher sur Twitter</h2></center><br><br>
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <form class="search_form" action="search.php" method="post">
            <input type="text" placeholder="Recherche sur Twitter" name="search_users">
            <button class="btn btn-info" type="submit" name="search_user_btn"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="col-sm-4">
        </div>
      </div><br><br>
      <?php include_once 'functions.php';?>
    </div>
  </div>
<script src="script-tweet.js"></script>
</body>
</html>
