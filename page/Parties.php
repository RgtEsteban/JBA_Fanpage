<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Autre Partie</title>

    <!--js pour menu déroulant-->
    <script src="../js/bootstrap.bundle.min.js"></script>

</head>
<body>

<!--Navbar-->
<?php
include ("../entete.php");
?>

<!--bannière-->
<div id="bannerimage">
  <img src="../image/banniere_parties.png" alt="" id="banniere" class="img-fluid">
</div>

<!--parties-->
<section>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="../image/parties/Part1.jpg" class="card-img-top" id="card-img">
            <div class="card-body">
              <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Phantom_Blood">Phantom Blood</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../image/parties/Part2.jpg" class="card-img-top" id="card-img">
            <div class="card-body">
              <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Battle_Tendency" >Battle Tendency</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" id="size-card">
            <img src="../image/parties/Part3.jpg" class="card-img-top" id="card-img">
            <div class="card-body">
              <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Stardust_Crusaders">Stardust Crusaders</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../image/parties/Part4.jpg" class="card-img-top" id="card-img">
            <div class="card-body">
              <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Diamond_is_Unbreakable">Diamond is Unbreakable</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card">
              <img src="../image/parties/Part5.jpg" class="card-img-top" id="card-img">
              <div class="card-body">
                <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Golden_Wind">Golden Wind</a></h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../image/parties/Part6.jpg" class="card-img-top" id="card-img">
              <div class="card-body">
                <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Stone_Ocean">Stone Ocean</a></h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../image/parties/Part7.jpg" class="card-img-top" id="card-img">
              <div class="card-body">
                <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/Steel_Ball_Run">Steel Ball Run</a></h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../image/parties/Part8.jpg" class="card-img-top" id="card-img">
              <div class="card-body">
                <h5 class="card-title"><a href="https://fr.wikipedia.org/wiki/JoJolion">JoJolion</a></h5>
              </div>
            </div>
          </div>     
      </div>
    </section>

<!--pied de page-->
<?php
include_once ("../pied_de_page.php");
?>
</body>
</html>