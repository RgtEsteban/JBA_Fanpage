<?php


session_start();


include('connexion.php');

if ( isset($_POST['login']) and !empty($_POST['login']) and isset($_POST['mdpadmin']) and !empty($_POST['mdpadmin']))
{
$login = $_POST['login'];
$password = $_POST['mdpadmin'];

$verif= $bdd->prepare('SELECT * FROM administrateur WHERE LoginAd= :login AND mdpAd= :mot_passe');
$verif->execute(array('login'=>$login,'mot_passe'=>$password));
$cpte= $verif->rowCount();

if($cpte==0)
{
echo'votre login ou mot de passe est incorrect';
include('adminlog.php');


}

else
{
$res=$verif->fetch();
session_start();
$_SESSION['login'] = $res['login'];
//header('location: ./admin/personnages.php');


}
}

?>
