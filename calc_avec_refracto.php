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
    <h3>Conversion de la densité en Brix en densité spécifique pour le moût avant fermentation</h3>
    <form  name="densite_brix" title="conversion densite en Brix en densite specifique pour le moût avant fermentation" action="refractometre.php">
        <table>
            <tr>
                <td ><p> Saisir la densité en degrés Brix :
                        <input type="text" name="densB" value="12" size="4" maxlength="4" tabindex="1" />
                    </p>
                    <p class="text-center"><input type="button" name="btosp" value="Calculer" tabindex="3" onclick="brixToSg(densB.value)" /></p>
                    <p>La densité spécifique est de :
                        <input type="text" name="densS" value="" size="4" maxlength="5" style="border: solid 1px #993300" readonly />
                        <br />
                    </p>
                </td>
            </tr>
        </table>
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
    </form>
</div>
