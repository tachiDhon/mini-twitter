<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tweet @cademie</title>
    <link rel="stylesheet" href="styletweet.css" type="text/css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="mainbody container-fluid">
        <div class="row">
            <div class="navbar-wrapper">
                <div class="container-fluid">
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="newformat.php" style="margin-right:-8px; margin-top:-5px;">
                                    <img alt="Brand" src="minilogo.png">
                                </a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">TweetList</a></li>
                                    <li><a href="#">Recherche</a></li>
                                    <li><span class="badge badge-important">2</span><a href="#"><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                            <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                                        </span>
                                        <span class="user-name">
                                            <?php echo '@' . $_SESSION['pseudo']; ?>
                                        </span>
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" alt="Alternate Text" class="img-responsive" width="120px" height="120px" />
                                                            <p class="text-center small">
                                                                <a href="settings.php">Editer son profil</a></p>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <span><?php echo '@' . $_SESSION['pseudo']; ?></span>
                                                                <p class="text-muted small">
                                                                <?php echo $_SESSION['email']; ?></p>
                                                                <div class="divider">
                                                                </div>
                                                                <a href="./56ExR" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                                <!--<a href="#" class="btn btn-default btn-xs"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts</a>-->
                                                                <a href="settings.php" class="btn btn-default btn-xs"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                                                <!--<a href="#" class="btn btn-default btn-xs"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Help!</a>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="navbar-footer">
                                                        <div class="navbar-footer-content">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a href="settings.php" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Passowrd</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="deconnexion.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script type="text/javascript" src="script-tweetlist.js"></script>
    </body>
    </html>