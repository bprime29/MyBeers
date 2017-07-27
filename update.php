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
$ibu = $_POST['educationDate'];

?>
    <input name="bus" type="text" readonly="readonly" value="<?php echo $brassin ?>"/>
    <?php foreach($item as $a => $b){
    $query="INSERT INTO ingredients VALUES ('".$brassin."','".$item[$a]."','".$amount[$a]."','".$type[$a]."','".$ibu[$a]."')";
    $bdd->query($query);
    ?>
    <tr>
        <p>
        <td >
            <?php echo $a+1; ?>
        </td>
        <td>
            <label>Name</label>
            <input type="text" readonly="readonly" name="Item[$a]" value="<?php echo $item[$a]; ?>">
        </td>
        <td>
            <label for="BX_age">Age</label>
            <input type="text" readonly="readonly" class="small"  name="BX_age[]" value="<?php echo $amount[$a]; ?>">
        </td>
        <td>
            <label for="BX_gender">Gender</label>
            <input type="text" readonly="readonly" name="BX_gender[]" value="<?php echo $type[$a]; ?>">
        </td>
        <td>
            <label for="BX_birth">Berth Pre</label>
            <input type="text" readonly="readonly" name="BX_birth[]" value="<?php echo $ibu[$a]; ?>">
        </td>
        </p>
    </tr>


<?php } ?>

<?php else: ?>
    <fieldset class="row1">
        <legend>Sorry</legend>
        <p>Some things went wrong please try again.</p>
    </fieldset>
<?php endif; ?>

