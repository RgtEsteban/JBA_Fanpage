<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styleadmin.css">
    <title>Accueil</title>

    <!--js pour menu déroulant-->
    <script src="../../js/bootstrap.bundle.min.js"></script>

</head>

<?php

include ("connexion.php");

?>  
<br>
<form method="post" action="verifAdmin.php">

<div class="row">
<div class='col-md-6 offset-md-3' >
    <div class="mb-3" >
    <label class="form-label"><h3>Se connecter</h3></label>
    </div>

    <div class="mb-3">
    <label class="form-label">Login</label>
    <input type="text" name="login" class="form-control"/>
    </div>

    <div class="mb-3">
    <label class="form-label">Mot de passe</label>
    <input type="password" name="mdpadmin" class="form-control"/>
    </div>

    <div class="mb-3">
        <table>
            <tr>
                <th><button type="submit" value="Se connecter" class="btn btn-dark">Se connecter</button></th>
                <th><button type="reset" value="Annuler" class="btn btn-dark">Annuler</button></th>
            </tr>
        </table>
    </div>
</form>
<form action="../../index.php">
    <button class="btn btn-dark ms-lg-3" id="button-color" type="submit">Retour</button>
</form>
<br>
<br>
<div>
<?php
include("../../pied_de_page.php");
?>
</div>