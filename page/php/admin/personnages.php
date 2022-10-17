<?php
// inclure la page connexion.php pour récuper les informations de la connexion.
include ("../connexion.php");
include ("../../../entete.php");
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
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/style.css">
  <title>Protagonistes</title>

  <!--js pour menu déroulant-->
  <script src="../js/bootstrap.bundle.min.js"></script>

</head>

<div><h1 class='titre'>Gestion des personnages</h1></div>

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

    echo "<div class=container'>
    
      <div class='row'>
      <div class='col-md-4'></div>
      <div class='col-md-4'></div>
      <div class='col-md-4'></div>

        <div class='w-100'></div>
        <br>
        <div class='col-md-4' id='text'>
        <a href='../personnages/$pageperso'><img src='../../../image/personnage/$img' id=perso></a>
        <a href='../personnages/$pageperso' ><h3>$nom</h3></a>
        </div>
        <div class='col-md-4' id='text'><img src='../../../image/personnage/fleche.png' id='fleche'></div>
        <div class='col-md-4' id='text'>
        <a href='../personnages/$pageperso' ><img src='../../../image/personnage/$imgstand' id='perso'></a>
        <a href='../personnages/$pageperso' ><h3>$nomstand</h3></a>
        </div>";
        echo "<div><a href=\"fromupdateperso.php?id=",$personnages["IdPerso"]."\">Modifier</a></div>";
        echo "<div><a href=\"delete_perso.php?id=",$personnages["IdPerso"]."\">Supprimer</a></div>";
        if($idcateg == 1){
          echo "<div>Ce personnage est un protagoniste</div>";
        }
        else{
          echo "<div>Ce personnage est un antagoniste</div>";
        }
        echo "  <br><br><br><br>";

}
?>
<table>
<br>



<form method="post" action="afficheperso.php">

<div class="row">
<div class='col-md-6 offset-md-3 align-self-center' >
    <div class="mb-3" >
    <label for="id" class="form-label">ID</label>
    <input type="int" name="id" class="form-control"/>
    </div>

    <div class="mb-3">
    <label for="nom" class="form-label">Nom du personnage</label>
    <input type="text" name="nom" class="form-control"/>
    </div>

    <div class="mb-3">
    <label for="img" class="form-label">Image du personnage</label>
    <input type="photo" name="img" class="form-control"/>
    </div>

    <div class="mb-3">
    <label for="nomstand" class="form-label">Nom de son stand</label>
    <input type="text" name="nomstand" class="form-control"/>
    </div>

    <div class="mb-3">
    <label for="imgstand" class="form-label">Image de son stand</label>
    <input type="photo" name="imgstand" class="form-control"/>
    </div>

    <div class="mb-3">
    <label for="pageparso" class="form-label">Page du personnage</label>
    <input type="text" name="pageperso" class="form-control"/>
    </div>

    <div class="d-grid gap-2 d-md-block">
    <button type="submit" value="Ajouter" class="btn btn-dark">Ajouter</button>
</div>

</form>