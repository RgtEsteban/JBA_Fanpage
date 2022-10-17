<?php
include "../connexion.php";

$req = $bdd->prepare("INSERT INTO personnages(NomPerso, ImgPerso, NomStand, ImgStand, PagePerso ) VALUES (?,?,?,?,?)");
$req->execute([$_POST["nom"], $_POST["img"], $_POST["nomstand"], $_POST["imgstand"], $_POST["pageperso"]]);

header('Location: personnages.php');
?>