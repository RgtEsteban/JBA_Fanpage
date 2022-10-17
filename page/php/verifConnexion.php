<?php


session_start();


include('connexion.php');

if ( isset($_POST['email']) and !empty($_POST['email']) and isset($_POST['mdp']) and !empty($_POST['mdp']))
{
$login = $_POST['email'];
$password = $_POST['mdp'];

$verif= $bdd->prepare('SELECT * FROM utilisateur WHERE email= :login AND mdp= :mot_passe');
$verif->execute(array('login'=>$login,'mot_passe'=>$password));
$cpte= $verif->rowCount();

if($cpte==0)
{
echo'votre login ou mot de passe est incorrect';
include('seconnecter.php');


}

else
{
$res=$verif->fetch();
$_SESSION['email'] = $res['email'];
header('location: ../../index.php');


}
}

?>
