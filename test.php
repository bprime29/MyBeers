<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 6/14/17
 * Time: 4:31 PM
 */
$titre = "Brassin 1";
include("includes/config.php");
include("includes/debut.php");
?>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=MyBeers;charset=utf8', 'root', 'livebox');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$name = "Test1";

$sql_info="SELECT * FROM Info WHERE Brassin='$name'";
$sql_ingredients="SELECT * FROM ingredients WHERE Brassin='$name'";
$sql_profil="SELECT * FROM profil WHERE Brassin='$name'";
$sql_fermentation="SELECT * FROM fermentation WHERE Brassin='$name'";
$sql_mash_step="SELECT * FROM mash_step WHERE Brassin='$name'";
$sql_mash_info="SELECT * FROM mash_info WHERE Brassin='$name'";
?>


<div class="container">
    <div class="starter-template">
        <h1><?php echo $name; ?></h1>
        <p class="lead">Pour mon premier brassin, je suis parti sur une recette de bière blonde simple. J'y ai rajouté un combava pour lui rajouter une petite note exotique.</p>
        <p align="center">Quelques photos sont disponible <a href="https://goo.gl/photos/6BA9mZiJzFsnFB9v8">ici</a></p>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Informations :</div>
            <table class="table table-borderless table-condensed table-hover">
                <tbody>
                <?php
                $info=$bdd->query($sql_info);
                $dataInfo=$info->fetch();
                ?>
                <tr>
                    <td>Type: <?php echo $dataInfo['Type']; ?></td>
                    <td>Date: <?php echo $dataInfo['Date']; ?></td>
                </tr>
                <tr>
                    <td>Batch size: <?php echo $dataInfo['Batch_size']; ?></td>
                    <td>Brasseur: <?php echo $dataInfo['Brasseur']; ?></td>
                </tr>
                <tr>
                    <td>Boil size: <?php echo $dataInfo['Boil_size']; ?></td>
                    <td>Boil time: <?php echo $dataInfo['Boil_time']; ?></td>
                </tr>
                </tbody>
            </table>
        <div class="panel-heading">Ingrédients :</div>
        <table class="table table-hover table-striped table-condensed">
            <thead>
            <tr>
                <th>Quantité</th>
                <th>item</th>
                <th>Type</th>
                <th>% / IBU</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $ingredients=$bdd->query($sql_ingredients);
            while($dataIngredients = $ingredients->fetch())
            {
                ?>
                <tr>
                    <td><?php echo $dataIngredients['quantité']; ?></td>
                    <td><?php echo $dataIngredients['Item']; ?></td>
                    <td><?php echo $dataIngredients['type']; ?></td>
                    <td><?php echo $dataIngredients['IBU']; ?></td>
                </tr>
                <?php
            }

            ?>
            </tbody>
        </table>
        <div class="panel-heading">Profile de la bière :</div>
        <table class="table table-hover table-striped table-condensed">
            <tbody>
            <?php
            $profil=$bdd->query($sql_profil);
            $dataProfil=$profil->fetch();
            ?>
            <tr>
                <td>Densité initial</td>
                <td><?php echo $dataProfil['DI']; ?></td>
                <td>Densité final</td>
                <td><?php echo $dataProfil['DF']; ?></td>
            </tr>
            <tr>
                <td>Taux d'alcool estimé</td>
                <td><?php echo $dataProfil['Alcool']; ?></td>
                <td>Bitterness</td>
                <td><?php echo $dataProfil['Bitterness']; ?></td>
            </tr>
            <tr>
                <td>Est Color</td>
                <td><?php echo $dataProfil['color']; ?></td>
                <td>Color</td>
                <td><TABLE><TD BGCOLOR="<?php echo $dataProfil['color_val']; ?>"><FONT COLOR="<?php echo $dataProfil['color_val']; ?>"> Color </FONT></TD></TABLE></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</div>