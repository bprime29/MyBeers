<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 7/27/17
 * Time: 2:36 PM
 */
$titre = "update";
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
?>

<?php if(isset($_POST)==true && empty($_POST)==false):
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

?>
<input name="bus" type="text" readonly="readonly" value="<?php echo $brassin ?>" xmlns="http://www.w3.org/1999/html"/>
<div class="container">

    <div class="col-lg-10 col-lg-offset-1">
        <h1><?php echo $brassin ?></h1>

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
</div>

<?php else: ?>
    <fieldset class="row1">
        <legend>Sorry</legend>
        <p>Some things went wrong please try again.</p>
    </fieldset>
<?php endif; ?>

