<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 7/27/17
 * Time: 1:52 PM
 */
$titre = "Formulaire";
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
$sql="SELECT Type, Name FROM stock";
$item=$bdd->query($sql);
?>

<script src="js/fonction.js" xmlns="http://www.w3.org/1999/html"></script>
<body>
<div class="container">
    <form method="post" name="update" action="update.php" />
    <div class="panel panel-default">
        <div class="row">
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Brassin" name="Brassin" value="" placeholder="Brassin" required="required">
                </div>
            </div>
        </div>
        <div class="panel-heading">Informations :</div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Type :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Type" name="Type" value="" placeholder="Type">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Date :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Date" name="Date" value="" placeholder="Date">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Batch size :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Batch_size" name="Batch_size" value="" placeholder="l">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Brasseur :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Brasseur" name="Brasseur" value="" placeholder="Bertrand">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Boil size :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Boil_size" name="Boil_size" value="" placeholder="l">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Boil time :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Boil time" name="Boil time" value="" placeholder="h">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-heading">Ingrédients</div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Amount" name="Amount[]" value="" placeholder="Amount">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Item" name="Item[]" value="" placeholder="Item">
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
                        <input type="text" class="form-control" id="IBU" name="IBU[]" value="" placeholder="% / IBU">

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
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Densité initial :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="DI" name="DI" value="" placeholder="DI">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Densité final :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="DF" name="DF" value="" placeholder="DF">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Taux d'alcool estimé :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Alcool" name="Alcool" value="" placeholder="%">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Bitterness :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Bitterness" name="Bitterness" value="" placeholder="IBU">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Est color :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="color" name="color" value="" placeholder="EBC">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Color :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="color_val" name="color_val" value="" placeholder="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Mash profile :</div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Mash Name :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Mash_name" name="Mash_name" value="" placeholder="Infusion, Batch Sparge">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Total Grain Weight :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Total_grain" name="Total_grain" value="" placeholder="6.00 kg">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Sparge Water :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Sparge_water" name="Sparge_water" value="" placeholder="10.0 L">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Sparge Temperature :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Sparge_temp" name="Sparge_temp" value="" placeholder="78.0 C">
                    </div>
                </div>
            </div>
        </div>
        Mash step :
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Step_time" name="Step_time[]" value="" placeholder="80 min">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Step_name" name="Step_name[]" value="" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="Description" name="Description[]" value="" placeholder="Description">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="Step_temp" name="Step_temp[]" value="" placeholder="72.0 C">

                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"  onclick="mash_step();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mash_step">

            </div>

            <div class="clear"></div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Fermentation :</div>
        </div>
        <div class="panel-body">
            <div class="col-sm-3 nopadding">
                <p>Primaire :</p>
            </div>
            <div class="col-sm-9 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="primaire" name="primaire" value="" placeholder="température 22°C durée 4 jours à 1 semaine">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Secondaire :</p>
            </div>
            <div class="col-sm-9 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="secondaire" name="secondaire" value="" placeholder="température 22°C durée 1 semaine puis 15°C durée 2-3 semaines">
                </div>
            </div>
            <div class="col-sm-3 nopadding">
                <p>Sucre :</p>
            </div>
            <div class="col-sm-3 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control" id="sucre" name="sucre" value="" placeholder="7g/L">
                </div>
            </div>
        </div>

            <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
        <input class="submit" type="submit" value="Confirm" />
        </form>
    </div>
</div>
</body>
