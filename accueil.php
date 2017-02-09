<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/Bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Musées</title>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
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
 	              <ul class="nav navbar-nav">

 	                  <li class="col-sm-4"><a href="accueil.php">Accueil</a></li>

 	                  <li class="col-sm-4"><a href="recherche.php">Musées</a></li>

 	              </ul>
    </div>
  </div>
</nav>



<div class="container" id="background">
<form action="recherche.php" method="GET">
<input class="col-sm-6 col-sm-offset-3" type="text" name="search" placeholder="Recherche">
<input class="col-sm-1 col-sm-offset-1" type="submit" name="submit" placeholder="envoyer">
</form>
</div>


  </body>
</html>
