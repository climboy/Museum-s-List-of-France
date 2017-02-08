<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=musee;charset=utf8', 'root', '');
}

catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}

$reponses = $bdd->query("SELECT * FROM musee ORDER BY VILLE ASC");


  ?>
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

<!-- <div class="col-sm-1"> -->
<!-- <ul class="vertical"> -->
  <!-- <li><a href="#">Home</a></li>
  <li><a href="#">News</a></li>
</ul>
<ul class="vertical">
  <li><a href="#">Home</a></li>
  <li><a href="#">News</a></li>
</ul>
<ul class="vertical">
  <li><a href="#">Home</a></li>
  <li><a href="#">News</a></li>
</ul> -->
<!-- </div> -->

<div class="col-sm-11">
  <div class="row">

    <?php
    foreach($reponses as $reponse){
      echo"<div class='cadre col-sm-3'>";
      echo "<a href='affichage.php?id=" . $reponse["id"] . "'>";
      echo"<div class='border'>";
      echo "<img class='ca'src='" . $reponse["IMAGES"] . "'>";
      echo "</div>";
      echo "<div class='texte'>";
      echo "<h3>" . $reponse["NOM DU MUSEE"] . "</h3>";
      echo "<p>" . $reponse["ADR"] . " " . $reponse["VILLE"] . "</p>";
      echo "</div>";
      echo "</a>";
      echo "</div>";
    }
     ?>
  </div>
</div>

<footer>
 <div class="col-sm-12">
   <div class="row">
     <div class="col-sm-3"></div>
     <div class="col-sm-3"></div>
     <div class="col-sm-3"></div>
     <div class="col-sm-3"></div>     

 </div>
 </div>
</footer>
</body>
</html>
