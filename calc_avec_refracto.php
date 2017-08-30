<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 29/08/2017
 * Time: 23:04
 */
session_start();
$titre = "Accueil";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
?>
<script src="js/fonction.js"></script>

<div class="container">
    <!--h3>Conversion de la densité en Brix en densité spécifique pour le moût avant fermentation</h3>
    <form  name="densite_brix" title="conversion densite en Brix en densite specifique pour le moût avant fermentation" action="refractometre.php">
                    <p> Saisir la densité en degrés Brix :
                        <input type="text" class="form-control" name="densB" value="12" size="2" maxlength="4" tabindex="1" />
                    </p>
                    <p class="text-center"><input type="button" name="btosp" value="Calculer" tabindex="3" onclick="brixToSg(densB.value)" /></p>
                    <p>La densité spécifique est de :
                        <input type="text" name="densS" value="" size="4" maxlength="5" style="border: solid 1px #993300" readonly />
                    </p>
    </form>
    <h3>Conversion de la densité en Brix en densité spécifique pendant/après la fermentation</h3>
    <form  name="densite_brix_ferm" title="conversion densite en Brix en densite specifique pendant la fermentation" action="refractometre.php">
        <table>
            <tr>
                <td ><p> Saisir la densité initiale en degrés Brix du moût avant la fermentation :
                        <input type="text" name="densBO" value="12" size="4" maxlength="4" tabindex="1" />
                        <br />
                        Saisir la densité en degrés Brix de la bière pendant ou après fermentation :
                        <input type="text" name="densBC" value="6" size="4" maxlength="4" tabindex="1" />
                        <br />
                    </p>
                    <p class="text-center"><input type="button" name="btospf" value="Calculer" tabindex="3" onclick="brixToSgFerm(densBO.value,densBC.value)" /></p>
                    <p>La densité spécifique de la bière à ce moment de la fermentation est de :
                        <input type="text" name="densS" value="" size="4" maxlength="5" style="border: solid 1px #993300" readonly />
                        <br />
                    </p>
                </td>
            </tr>
        </table>
    </form-->


    <form class="form-horizontal col-lg-5" action="refractometre.php" name="densite_brix">
        <div class="form-group">
            <legend>Conversion de la densité avant fermentation</legend>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">Saisir la densité en degrés Brix : </label>
                <div class="col-lg-3">
                    <input type="text" name="densB" class="form-control" value="12">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">La densité spécifique est de : </label>
                <div class="col-lg-3">
                    <input type="textarea" name="densS" class="form-control" id="textarea" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="button" class="center-block btn btn-primary" name="btosp" value="Calculer" onclick="brixToSg(densB.value)" />
        </div>
    </form>
    <form class="form-horizontal col-lg-5 col-lg-offset-1" action="refractometre.php" name="densite_brix_ferm">
        <div class="form-group">
            <legend>Conversion de la densité après fermentation</legend>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">Saisir la DI en degrés Brix avant la fermentation : </label>
                <div class="col-lg-3">
                    <input type="text" name="densBO" value="12" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">Saisir la densité en degrés Brix après fermentation : </label>
                <div class="col-lg-3">
                    <input type="text" name="densBC" value="6" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">La densité spécifique est de : </label>
                <div class="col-lg-3">
                    <input type="textarea" name="densS" class="form-control" id="textarea" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="button" class="center-block btn btn-primary" name="btosp" value="Calculer" onclick="brixToSgFerm(densBO.value,densBC.value)" />
        </div>
    </form>

    <form class="form-horizontal col-lg-5 col-lg-offset-3" action="refractometre.php" name="densite_brix">
        <div class="form-group">
            <legend>Taux d'alcool de la bière</legend>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">Saisir la densité en degrés Brix : </label>
                <div class="col-lg-3">
                    <input type="text" name="densB" class="form-control" value="12">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="textarea" class="col-lg-6 control-label">La densité spécifique est de : </label>
                <div class="col-lg-3">
                    <input type="textarea" name="densS" class="form-control" id="textarea" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="button" class="center-block btn btn-primary" name="btosp" value="Calculer" onclick="brixToSg(densB.value)" />
        </div>
    </form>
</div>
