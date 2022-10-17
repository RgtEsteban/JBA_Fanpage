<?php

include ("connexion.php");

$select = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
$select->execute([$_POST["email"]]);
$verif = $select->rowCount();
if($verif == 1) {
    echo "Cette adresse mail existe déjà";
    include('inscription.php');
}
else{
    $req = $bdd->prepare("insert into utilisateur(Pseudo, Email, mdp) values (?,?,?)");
    $req->execute([$_POST["pseudo"], $_POST["email"], $_POST["mdp"]]);
    header('location: ../../index.php');
}

?>