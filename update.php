<?php
session_start();
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 7/27/17
 * Time: 2:36 PM
 */
$titre = "update";
$description = "update";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
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
?>

<?php if(isset($_POST)==true && empty($_POST)==false):
$etype = $_POST['Type'];
$date = $_POST['Date'];
$batch_size = $_POST['Batch_size'];
$brasseur = $_POST['Brasseur'];
$boil_size = $_POST['Boil_size'];
$boil_time = $_POST['Boil_time'];

$brassin = $_POST['Brassin'];
$amount = $_POST['Amount'];
$item = $_POST['Item'];
$type = $_POST['Type'];
$ibu = $_POST['IBU'];

$di = $_POST['DI'];
$df = $_POST['DF'];
$alcool = $_POST['Alcool'];
$bitterness = $_POST['Bitterness'];
$color = $_POST['color'];
$color_val = $_POST['color_val'];

$mash_name = $_POST['Mash_name'];
$total_grain = $_POST['Total_grain'];
$sparge_water = $_POST['Sparge_water'];
$sparge_temp = $_POST['Sparge_temp'];

$step_time = $_POST['Step_time'];
$step_name = $_POST['Step_name'];
$description = $_POST['Description'];
$step_temp = $_POST['Step_temp'];

$primaire = $_POST['primaire'];
$secondaire = $_POST['secondaire'];
$sucre = $_POST['sucre'];

?>
<div class="container">

    <div class="col-lg-10 col-lg-offset-1">
        <h1><?php echo $brassin ?></h1>

    </div>
    
    <?php
    $qInfo="INSERT INTO Info (Brassin, Type, Date, Batch_size, Brasseur, Boil_size, Boil_time) VALUES ('".$brassin."','".$etype."','".$date."','".$batch_size."','".$brasseur."','".$boil_size."','".$boil_time."')";
    $bdd->query($qInfo);
    ?>
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Informations</h4>
            </caption>
            <tbody>
            <tr>
                <td>Type :</td>
                <td><?php echo $etype; ?></td>
                <td>Date :</td>
                <td><?php echo $date; ?></td>
            </tr>
            <tr>
                <td>Batch size :</td>
                <td><?php echo $batch_size; ?></td>
                <td>Brasseur :</td>
                <td><?php echo $brasseur; ?></td>
            </tr>
            <tr>
                <td>Boil size :</td>
                <td><?php echo $boil_size; ?></td>
                <td>Boil time :</td>
                <td><?php echo $boil_time; ?></td>
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
    <?php foreach($item as $a => $b){
    $query1="INSERT INTO ingredients (Brassin, Item, quantité, type, IBU) VALUES ('".$brassin."','".$item[$a]."','".$amount[$a]."','".$type[$a]."','".$ibu[$a]."')";

    $bdd->query($query1);
    ?>
                <tr>
                    <td><?php echo $amount[$a]; ?></td>
                    <td><?php echo $item[$a]; ?></td>
                    <td><?php echo $type[$a]; ?></td>
                    <td><?php echo $ibu[$a]; ?></td>
                </tr>
    <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    $query2="INSERT INTO profil (Brassin, DI, DF, Alcool, Bitterness, color, color_val) VALUES ('".$brassin."','".$di."','".$df."','".$alcool."','".$bitterness."','".$color."','".$color_val."')";
    $bdd->query($query2);
    ?>
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Profile de la bière</h4>
            </caption>
            <tbody>
            <tr>
                <td>Densité initial</td>
                <td><?php echo $di; ?></td>
                <td>Densité final</td>
                <td><?php echo $df; ?></td>
            </tr>
            <tr>
                <td>Taux d'alcool estimé</td>
                <td><?php echo $alcool; ?></td>
                <td>Bitterness</td>
                <td><?php echo $bitterness; ?></td>
            </tr>
            <tr>
                <td>Est Color</td>
                <td><?php echo $color; ?></td>
                <td>Color</td>
                <td><TABLE><TD BGCOLOR="<?php echo $color_val; ?>"><FONT COLOR="<?php echo $color_val; ?>"> Color </FONT></TD></TABLE></td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php
    $query_mashinfo="INSERT INTO mash_info (Brassin, Mash_name, Total_grain, Sparge_water, Sparge_temp) VALUES ('".$brassin."','".$mash_name."','".$total_grain."','".$sparge_water."','".$sparge_temp."')";
    $bdd->query($query_mashinfo);
    ?>
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Mash Profile</h4>
            </caption>
            <tbody>
            <tr>
                <td>Mash Name</td>
                <td><?php echo $mash_name; ?></td>
                <td>Total grain</td>
                <td><?php echo $total_grain; ?></td>
            </tr>
            <tr>
                <td>Sparge water</td>
                <td><?php echo $sparge_water; ?></td>
                <td>Sparge temperature</td>
                <td><?php echo $sparge_temp; ?></td>
            </tr>
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
            <?php foreach($step_name as $a => $b){
                $query1="INSERT INTO mash_step (Brassin, Step_time, Name, Description, Step_temp) VALUES ('".$brassin."','".$step_time[$a]."','".$step_name[$a]."','".$description[$a]."','".$step_temp[$a]."')";

                $bdd->query($query1);
                ?>
                <tr>
                    <td><?php echo $step_time[$a]; ?></td>
                    <td><?php echo $step_name[$a]; ?></td>
                    <td><?php echo $description[$a]; ?></td>
                    <td><?php echo $step_temp[$a]; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    $query_mashinfo="INSERT INTO fermentation (Brassin, Primaire, Secondaire, Sucre) VALUES ('".$brassin."','".$primaire."','".$secondaire."','".$sucre."')";
    $bdd->query($query_mashinfo);
    ?>
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Mash Profile</h4>
            </caption>
            <tbody>
            <tr>
                <td>Mash Name</td>
                <td><?php echo $mash_name; ?></td>
                <td>Total grain</td>
                <td><?php echo $total_grain; ?></td>
            </tr>
            <tr>
                <td>Sparge water</td>
                <td><?php echo $sparge_water; ?></td>
                <td>Sparge temperature</td>
                <td><?php echo $sparge_temp; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<?php else: ?>
    <fieldset class="row1">
        <legend>Sorry</legend>
        <p>Some things went wrong please try again.</p>
    </fieldset>
<?php endif; ?>

