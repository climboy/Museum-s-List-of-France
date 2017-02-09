<?php
/*pour connection à la base de données*/
$host   = "localhost";
$base   = "musee";
$login  = "root";
$pass    = "";

try {
  $bdd = new PDO('mysql:host='. $host .';dbname='. $base, $login, $pass, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
  die('Erreur : '. $e->getMessage());}


  if (isset($_GET['id']))
    $id=$_GET['id'];

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
<<<<<<< HEAD
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
=======
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
>>>>>>> origin/master
    </div>
  </nav>

<div class="container-fluid">
 <div class="row">

 <?php
  if (isset($id)) // On a l'id
  {

<<<<<<< HEAD

=======
   
>>>>>>> origin/master
    if ($id>=0)
    {
      $query  = $bdd->query("SELECT * FROM musee WHERE id = $id");// $query=récupère tes données voulues dans ta base de donnée
      $fetch  = $query->fetch();// fetch=transforme le résultat de la requête en tableau
<<<<<<< HEAD
      if ($fetch==false)
=======
      if ($fetch==false) 
>>>>>>> origin/master
      {
        echo "pas bon";
      }
      else
      {
<<<<<<< HEAD

=======
            
>>>>>>> origin/master
        echo "<div class='col-sm-4'>";
        echo "<div class='border'>";
        echo "<img class='image' src='".$fetch["IMAGES"]."'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='col-sm-8'>";
        echo "<h1>".$fetch["NOMDUMUSEE"]."</h1>";
        echo "<p class='infos'>localisation : ".$fetch["NOMREG"].", ".$fetch["NOMDEP"].", ".$fetch["VILLE"].", ".$fetch["ADR"].",". $fetch["CP"]."</p>";
        echo "<p class='infos'>".$fetch["TELEPHONE1"].", ".$fetch["FAX"]."</p>";
        echo "<p class='infos'>".$fetch["SITWEB"]."</p>";
        echo "<p class='infos'>".$fetch["PERIODE OUVERTURE"]."</p>";
        echo "<p class='infos'>".$fetch["FERMETURE ANNUELLE"]."</p>";
        echo "<p class='infos'>".$fetch["JOURS NOCTURNES"]."</p>";
        echo "</div>";
      }
    }
    else
    {
      echo "votre id est invalide";
    }
  }
  else // Il manque des paramètres, on avertit le visiteur
  {

    echo 'id introuvable !';

  }

 ?>

<<<<<<< HEAD

=======
   
>>>>>>> origin/master
 </div>
</div>
<footer role="contentinfo">
  <img class="logo"src="css/facebook.png">
  <img class="logo"src="css/twitter.png">
  <img class="logo"src="css/slack.png">
</footer>
  </body>
</html>
