<?php
include("php/connexion.php");
?>

<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Antagonistes</title>

    <!--js pour menu déroulant-->
    <script src="../js/bootstrap.bundle.min.js"></script>

  </header>

<body>

<!--Navbar-->
<?php
include_once ("../entete.php");
?>

<!--bannière-->
<div id="bannerimage">
  <img src="../image/banniere_antoganiste.png" alt="" id="banniere" class="img-fluid">
</div>

<!--titres-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4" id="text">
        <h1 class="titre">Antagonistes</h1>
      </div>
      <div class="col-md-4" id="text"></div>
      <div class="col-md-4" id="text">
        <h1 class="titre">Stands</h1>
      </div>
    </div>
  </div>
</section>

<!--les personnages-->
<?php
$req = $bdd->prepare("SELECT * from personnages");
$req->execute();
$perso = $req->fetchAll();

foreach ($perso as $personnages){
  $id = $personnages["IdPerso"];
  $nom = $personnages["NomPerso"];
  $img = $personnages["ImgPerso"];
  $nomstand = $personnages["NomStand"];
  $imgstand = $personnages["ImgStand"];
  $pageperso= $personnages["PagePerso"];
  $idcateg = $personnages["IdCateg"];

  if($idcateg == 2){
    echo "<div class=container'>
    <br>
      <div class='row'>
        <div class='col-md-4' id='text'>
        <a href='personnages/$pageperso'><img src='../image/personnage/$img' id=perso></a>
        <a href='personnages/$pageperso' ><h3>$nom</h3></a>
        </div>
        <div class='col-md-4' id='text'><img src='../image/personnage/fleche.png' id='fleche'></div>
        <div class='col-md-4' id='text'>
        <a href='personnages/$pageperso' ><img src='../image/personnage/$imgstand' id='perso'></a>
        <a href='personnages/$pageperso' ><h3>$nomstand</h3></a>
        </div>";
        echo "  <br><br><br><br>";

}
}
?>

<!--pied de page-->
<?php
include_once ("../pied_de_page.php");
?>

</body>

</html>