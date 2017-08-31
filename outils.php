<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 02/07/2017
 * Time: 17:45
 */
$titre = "outils";
$description = "Calcul du taux d'alcool avec un densimètre";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
?>
<script src="js/fonction.js"></script>

<div class="container">
    <form class="form-horizontal col-lg-6 col-lg-offset-2" action="refractometre.php" name="calculalc" id="calculalc">
        <div class="form-group">
            <legend align="center">Taux d'alcool de la bière</legend>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-8 control-label">Saisir la densité initiale : </label>
                <div class="col-lg-2">
                    <input type="text" name="og" class="form-control" value="1068">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-8 control-label">Saisir la densité finale : </label>
                <div class="col-lg-2">
                    <input type="text" name="fg" class="form-control" value="1015">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-8 control-label">Sucre ajouté à l'embouteillage : (en g/l) </label>
                <div class="col-lg-2">
                    <input type="text" name="sucre" class="form-control" value="7">
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="button" class="center-block btn btn-primary" name="calculer" value="Calculer" onclick="calcalc(og.value, fg.value, sucre.value)" />
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-8 control-label">Le taux avant fermentation en bouteille est de : </label>
                <div class="col-lg-2">
                    <input type="textarea" name="dens" class="form-control" id="textarea" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-8 control-label">Le taux après fermentation en bouteille est de : </label>
                <div class="col-lg-2">
                    <input type="textarea" name="ref_tot" class="form-control" id="textarea" readonly>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    <!--



    //-->
</script>