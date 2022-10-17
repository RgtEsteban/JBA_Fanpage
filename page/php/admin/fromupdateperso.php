<?php
include "../connexion.php";
$id = $_GET["id"];

$req = $bdd->prepare("select * from personnages where IdPerso=?");
$req->execute([$id]);
$personnages = $req->fetch();
$id = $personnages["IdPerso"];
$nom = $personnages["NomPerso"];
$img = $personnages["ImgPerso"];
$nomstand = $personnages["NomStand"];
$imgstand = $personnages["ImgStand"];
$pageperso = $personnages["PagePerso"];
$idcateg = $personnages["IdCateg"];

?>

<fieldset>
    <legend>Mettre à jour un personnage</legend>
        <form action="updateperso.php" method="post">
            <table>
                <tr>
                    <td>
                        <label>Saisir l'id du personnage</label>
                    </td>
                    <td>
                        <?php echo "<input type=\"text\" name=\"id\"  value=\"$id\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisir le nom du personnage</label>
                    </td>
                    <td>
                    <?php echo "<input type=\"text\" name=\"nom\" value=\"$nom\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisir l'image du personnage</label>
                    </td>
                    <td>
                        <?php echo "<input type=\"photo\" name=\"img\"  value=\"$img\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisir le nom du stand</label>
                    </td>
                    <td>
                        <?php echo "<input type=\"text\" name=\"nomstand\" value=\"$nomstand\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisir l'image du stand</label>
                    </td>
                    <td>
                        <?php echo "<input type=\"photo\" name=\"imgstand\" value=\"$imgstand\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisir la page du personnage</label>
                    </td>
                    <td>
                        <?php echo "<input type=\"text\" name=\"pageperso\" value=\"$pageperso\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisir la categorie du personnage (1 = protagoniste / 2 = antagoniste)</label>
                    </td>
                    <td>
                        <?php echo "<input type=\"text\" name=\"pageperso\" value=\"$idcateg\">"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="MAJ">
                    </td>
                </tr>
            </table>
        </form>
    </legend>
</fieldset>