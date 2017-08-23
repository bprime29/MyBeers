<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 7/27/17
 * Time: 1:52 PM
 */
$titre = "Formulaire";
include("includes/config.php");
include("includes/identifiants.php");
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
$sql="SELECT Type, Name FROM stock";
$item=$bdd->query($sql);
?>

<script src="js/fonction.js" xmlns="http://www.w3.org/1999/html"></script>
<body>
<div class="container">
    <form method="post" name="update" action="update.php" />
    <div class="panel panel-default">
        <div class="panel-heading">Education Experience</div>
        <div class="panel-body">

            <div class="row">
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Brassin" name="Brassin" value="" placeholder="Brassin" required="required">
                </div>
            </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Amount" name="Amount[]" value="" placeholder="Amount">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="input-group">
                    <select class="form-control" id="Item" name="Item[]">
                        <option value="">Item</option>
                        <?php
                        while($dataPF = $item->fetch())
                        {
                            ?>
                            <option value="<?php echo $dataPF['Name']; ?>"><?php echo $dataPF['Name']; ?></option>
                            <?php
                        }

                        ?>

                    </select>
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Type" name="Type[]" value="" placeholder="Type">
                </div>
            </div>

            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" id="educationDate" name="educationDate[]">

                            <option value="">Date</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                        </select>
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="education_fields">

            </div>

            <div class="clear"></div>

        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Profil de la bière:</div>
        </div>
        <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
        <input class="submit" type="submit" value="Confirm" />
        </form>
    </div>
</div>
</body>
