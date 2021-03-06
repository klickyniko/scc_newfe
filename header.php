<?php
include 'settings.php';
include 'functions.php';

header("Content-Type: text/html; charset=utf-8");
session_start();
if(!isset($_SESSION['userid'])) {
 $url = substr(htmlspecialchars( $_SERVER[REQUEST_URI], ENT_QUOTES, 'UTF-8' ), 5);
 echo '<head><meta http-equiv="refresh" content="3;url=https://korpozoo.de/scc/login.php?url='.$url.'" /></head>';
 die('Bitte zuerst <a href="login.php?url='.$url.'">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$username = $_SESSION['username'];

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="icon" href="../../favicon.ico">-->

  <title>SCC Online</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!--<link href="bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

  <!-- Custom styles for this template -->
  <!--<link href="starter-template.css" rel="stylesheet">-->

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!--<script src="bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js"></script>-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<link rel="stylesheet" type="text/css" href="css/default.css">
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

   <script src="scripts/jquery-3.2.1.min.js"></script>
   <script src="scripts/accordion.js"></script>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SCC Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href=index.php>Startseite</a></li>
      <li><a href=table.php?aktiv=on>Korporationen</a></li>
      <li><a href=couleursuche.php>Couleursuche</a></li>
      <li><a href=quellen.php>Quellenverzeichnis</a></li>
      <li><a href="wappen.php">Wappenverzeichnis</a></li>
      <li><a href="zirkel.php">Zirkel</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
      <li><a href=logout.php><span class="glyphicon glyphicon-log-out"></span> Abmelden (nur SCC)</a></li>
    </ul>
  </div>
</nav>

<hr />
