<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/Bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Musées</title>
  </head>
  <body>
  <header id="header"role="banner">
   <h1 class="titre">Guide de Musées</h1>
  </header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right" style="width:100%;">
          <li class="col-sm-4"><a class="valign" href="accueil.php">Accueil</a></li>
          <li class="col-sm-4"><a class="valign" href="recherche.php">Musées</a></li>
          <li class="col-sm-4">
          </li>
        </ul>
      </div>
    </div>
  </nav>



<div class="container" id="background">
<form action="recherche.php" method="GET">
  <h2>Tout les musées de France répertoriés sur notre site.</h2>
<input class="col-sm-6 col-sm-offset-3" id="recherche"type="text" name="search" placeholder="Recherche">
<input class="col-sm-2 col-sm-offset-5" id="envoi"type="submit" name="submit" placeholder="envoyer">
</form>
</div>

<footer role="contentinfo">
  <img class="logo"src="css/facebook.png">
  <img class="logo"src="css/twitter.png">
  <img class="logo"src="css/slack.png">
</footer>
  </body>
</html>
