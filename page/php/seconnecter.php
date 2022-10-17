<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/stylelogin.css">
    <title>Accueil</title>

    <!--js pour menu déroulant-->
    <script src="../../js/bootstrap.bundle.min.js"></script>

</head>

<?php

include('../../entete.php');
include ("connexion.php");

?>
<br>
<form method="post" action="verifConnexion.php">

<div class="row">
<div class='col-md-6 offset-md-3' >
    <div class="mb-3" >
    <label class="form-label"><h3>Inscription</h3></label>
    </div>

    <div class="mb-3">
    <label class="form-label">Adresse mail</label>
    <input type="text" name="email" class="form-control"/>
    </div>

    <div class="mb-3">
    <label class="form-label">Mot de passe</label>
    <input type="password" name="mdp" class="form-control"/>
    </div>

    <div class="mb-3">
        <table>
            <tr>
                <th><button type="submit" value="Connexion" class="btn btn-dark">Connexion</button></th>
                <th><button type="reset" value="Annuler" class="btn btn-dark">Annuler</button></th>
                <th><h5><a href="inscription.php">Inscription</a></h5></th>
            </tr>
        </table>
    </div>
    <div class="mb-3" >
        <h5><a href="adminlog.php">Admin</a></h5>
    </div>
</form>
<br>
<br>
<div>

<?php
include("../../pied_de_page.php");
?>
</div>