<?php
include "../connexion.php";
$id = $_GET["id"];
$req = $bdd->prepare("delete from personnages where idPerso=?");
$req->execute([$id]);

header('Location: personnages.php');
?>