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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/Bootstrap.min.css">
    <link rel="stylesheet" href="css/affichage.css">
    <title>Musées</title>
  </head>
  <body>
  <header id="header"role="banner">
   <h1 class="titre">Guide de Musées</h1>
  </header>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right" style="width:100%;">
                  <li class="col-sm-4"><a class="valign" href="accueil.php">Accueil</a></li>
                  <li class="col-sm-4"><a class="valign" href="recherche.php">Musées</a></li>
                  <li class="col-sm-4">
                      <form class="form-group" method="GET" action="recherche.php">
                          <div class="input-group input-group-md icon-addon vpadding">
                              <input type="text" placeholder="Texte" name="search" id="schbox" class="form-control">
                              <i class="icon icon-search"></i>
                              <span class="input-group-btn">
                  <button type="submit" class="btn btn-inverse">Rechercher</button>
                </span>
                          </div>
                      </form>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <div class="container-fluid">
    <div class="row">


    <?php
         if (isset($id)) {
            if ($id>=0) {
                $query  = $bdd->query("SELECT * FROM musee WHERE id = $id");
                $fetch  = $query->fetch();
                if ($fetch==false) {
                    echo "pas bon";
                }  else  {
                    echo "<div class='col-sm-4'>";
                    echo "<img class='image2' src='".$fetch["IMAGES"]."'>";
                    echo "</div>";
                    echo "<div class='col-sm-8'>";
                    echo "<h2>".$fetch["NOMDUMUSEE"]."</h2>";
                    echo "<p class='infos'>Région : " . $fetch["NOMREG"] . "</p>";
                    echo "<p class='infos'>Département : " . $fetch["NOMDEP"] . "</p>";
                    echo "<p class='infos'>localisation : " . "<em id='adresse'>" . $fetch["ADR"] . " " . $fetch["CP"] . " " . $fetch["VILLE"] . "</em></p>";
                    if ($fetch["TELEPHONE1"] != "")
                    echo "<p class='infos'>Téléphone : " . $fetch["TELEPHONE1"] . "</p>";
                    if ($fetch["FAX"] != "")
                        echo "<p class='infos'>Fax : " . $fetch["FAX"] . "</p>";
                    if ($fetch["SITWEB"] != "")
                        echo "<p class='infos'>Site Web : " . $fetch["SITWEB"] . "</p>";
                    if ($fetch["PERIODE OUVERTURE"] != "")
                        echo "<p class='infos'>Periode D'ouverture : " . $fetch["PERIODE OUVERTURE"] . "</p>";
                    if ($fetch["FERMETURE ANNUELLE"] != "")
                        echo "<p class='infos'>Periode de fermeture : " . $fetch["FERMETURE ANNUELLE"] . "</p>";
                    if ($fetch["JOURS NOCTURNES"] != "")
                        echo "<p class='infos'>Jours de nocturnes : " . $fetch["JOURS NOCTURNES"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "votre id est invalide";
            }
         } else {
            echo 'id introuvable !';
         }
     ?>


    </div>
  </div>
  <div id="map" style="width: 100%;height: 400px;"></div>
  <footer role="contentinfo">
    <img class="logo"src="css/facebook.png">
    <img class="logo"src="css/twitter.png">
    <img class="logo"src="css/slack.png">
  </footer>

  <script src="http://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCdpE0sQVl9CJHh9DGGZUttQa5xpfNNEBg"></script>
  <script type="text/javascript" src="javascript/jquery.googlemap.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
