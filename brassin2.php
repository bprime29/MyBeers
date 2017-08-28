<?php
session_start();
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 6/14/17
 * Time: 4:31 PM
 */
$titre = "Brassin 2";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");
?>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=MyBeers;charset=utf8', 'mybeers', 'Bebzh2912!');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$name = "Brassin 2 : English India Pale Ale";

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
        <p class="lead">Pour mon deuxieme brassin, j'ai voulu tenter une recette d'India Pale Ale classique. Je me suis beaucoup inspiré d'une recette du site du nain brasseur. (<a href="http://univers-biere.net">http://univers-biere.net</a>)</p>
        <p align="center">Quelques photos du brassin <a href="https://goo.gl/photos/bxsVtosVEL5FhTADA">ici</a></p>
    </div>

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-borderless table-condensed table-hover">
            <caption>
                <h4>Information</h4>
            </caption>
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
    </div>

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Ingrédients</h4>
            </caption>
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
    </div>

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <thead>
            <tr>
                <th>Step time</th>
                <th>Name</th>
                <th>Description</th>
                <th>Step temp</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $mash_step=$bdd->query($sql_mash_step);
            while($dataMashStep = $mash_step->fetch())
            {
                ?>
                <tr>
                    <td><?php echo $dataMashStep['Step_time']; ?></td>
                    <td><?php echo $dataMashStep['Name']; ?></td>
                    <td><?php echo $dataMashStep['Description']; ?></td>
                    <td><?php echo $dataMashStep['Step_temp']; ?></td>
                </tr>
                <?php
            }

            ?>
            </tbody>
        </table>
    </div>

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Profil de la bière</h4>
            </caption>
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

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-borderless table-condensed table-hover">
            <caption>
                <h4>Mash profile</h4>
            </caption>
            <?php
            $mash_info=$bdd->query($sql_mash_info);
            $dataMashInfo=$mash_info->fetch();
            ?>
            <tr>
                <td width="40%">
                    <b><i>Mash Name</i>:</b>
                    <?php echo $dataMashInfo['Mash_name']; ?></td>
                <td width="52%"><b><i>Total Grain Weight</i>:</b>
                    <?php echo $dataMashInfo['Total_grain']; ?></td>
            </tr>
            <tr>
                <td width="40%">
                    <b><i>Sparge Water</i>:</b>
                    <?php echo $dataMashInfo['Sparge_water']; ?></td>
                <td width="52%"><b><i>Sparge Temperature</i>:</b> <?php echo $dataMashInfo['Sparge_temp']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <thead>
            <tr>
                <th>Step time</th>
                <th>Name</th>
                <th>Description</th>
                <th>Step temp</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $mash_step=$bdd->query($sql_mash_step);
            while($dataMashStep = $mash_step->fetch())
            {
                ?>
                <tr>
                    <td><?php echo $dataMashStep['Step_time']; ?></td>
                    <td><?php echo $dataMashStep['Name']; ?></td>
                    <td><?php echo $dataMashStep['Description']; ?></td>
                    <td><?php echo $dataMashStep['Step_temp']; ?></td>
                </tr>
                <?php
            }

            ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-borderless table-condensed table-hover">
            <caption>
                <h4>Fermentation </h4>
            </caption>
            <tbody>
            <?php
            $fermentation=$bdd->query($sql_fermentation);
            $datafermentation=$fermentation->fetch();
            ?>
            <tr>
                <td colspan="2"><em><strong>Primaire :</strong></em> <?php echo $datafermentation['Primaire']; ?></td>
            </tr>
            <tr>
                <td colspan="2"><strong><em>Secondaire</em></strong> <em><strong>:</strong></em> <?php echo $datafermentation['Secondaire']; ?></td>
            </tr>
            <tr>
                <td colspan="2"><em><strong>Sucre à l'embouteillage :</strong></em> <?php echo $datafermentation['Sucre']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <!--div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Commentaires : </h4>
            </caption>
            <tbody>
            <?php
    $fermentation=$bdd->query($sql_fermentation);
    $datafermentation=$fermentation->fetch();
    ?>
            <tr>
                <td colspan="2"><em><strong>Primaire :</strong></em> <?php echo $datafermentation['Primaire']; ?></td>
            </tr>
            </tbody>
        </table>
    </div-->
</div>
</div><!-- /.container -->
</body>