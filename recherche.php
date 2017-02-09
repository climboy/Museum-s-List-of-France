<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=musee;charset=utf8', 'root', '');
}
catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}
if(isset($_GET['search']))
{
  $recherche=$_GET['search'];
  $reponses = $bdd->query("SELECT * FROM musee WHERE VILLE LIKE '%$recherche%' OR ADR LIKE '%$recherche%' OR NOMDUMUSEE LIKE '%$recherche%' OR NOMDEP LIKE '%$recherche%' OR NOMREG LIKE '%$recherche%' OR CP LIKE '%$recherche%'  ORDER BY VILLE ASC");
}
else{
  $reponses = $bdd->query("SELECT * FROM musee ORDER BY VILLE ASC");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="Bootstrap/css/Bootstrap.min.css">
  <link rel="stylesheet" href="css/recherche.css">

  <title>Musées</title>
</head>
<body>
 <header id="header"role="banner">
  <h1>Guide de Musées</h1>
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

  <div class="masonry">
    <?php
    foreach($reponses as $reponse){
      echo"<div class='item'>";
      echo "<a href='affichage.php?id=" . $reponse["id"] . "'>";
      echo "<figure class='img'>";
      echo "<img src='" . $reponse["IMAGES"] . "'>";
      echo "<figcaption class='menu'>";
      echo "<h3>" . $reponse["NOMDUMUSEE"] . "</h3>";
      echo "<p>" . $reponse["ADR"] . " " . $reponse["VILLE"] . "</p>";
      echo "</figcaption>";
      echo "</figure>";
      echo "</a>";
      echo "</div>";
    }

    ?>
  </div>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

<script type="text/javascript" language="javascript">
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".menu").addClass("fixed");
    } else {
        $(".menu").removeClass("fixed");
    }
});
</script>
<footer role="contentinfo">
  <img class="logo"src="css/facebook.png">
  <img class="logo"src="css/twitter.png">
  <img class="logo"src="css/slack.png">
</footer>
</body>
</html>
