<?php
include "../connexion.php";
try{
$req = $bdd->prepare("UPDATE personnages SET NomPerso=?, ImgPerso=?, NomStand=?, ImgStand=?, PagePerso=?  WHERE IdPerso=?");
$req->execute([$_POST["nom"], $_POST["img"], $_POST["nomstand"], $_POST["imgstand"], $_POST["pageperso"], $_POST["id"]]);
}catch(PDOException $e){
    echo $e->getMessage();;
}
header('Location: personnages.php');
?>