<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 02/07/2017
 * Time: 17:45
 */
$titre = "outils";
include("includes/config.php");
include("includes/debut.php");
?>
<div class="container">

    <div class="col-lg-10 col-lg-offset-1">
<table>
	     <tr>
	       <td><h2>Outil de calcul du taux d'alcool dans la bi&egrave;re : </h2>
	         <form action="outils.php"  name="calculalc" id="calculalc" title="Calcul du taux d'alcool">
	           <table>
	             <tr>
	               <td ><p>La densit&eacute; initiale (DI) :
	                   <input type="text" name="og" value="1060" size="3" maxlength="5" tabindex="1" />
	                   <br />
	    La densit&eacute; finale (DF) :
	    <input type="text" name="fg" value="1010" size="3" maxlength="5" tabindex="2" />
	    <br />
	    Le sucre ajout&eacute; &agrave; l'embouteillage (g/L) :
	    <input name="sucre" type="text" id="sucre4" tabindex="2" value="6" size="3" maxlength="5" />&nbsp;&nbsp;</p></td>
	               <td><input type="button" name="calculer" value="Calculer" tabindex="3" onclick="calcalc(og.value, fg.value, sucre.value)" /></td>
	             </tr>
	           </table>

		<h3>Estimations :</h3>
		<p>
	           Avant refermentation en bouteille, la bi&egrave;re fait
	               <input type="text" name="dens" value="" size="3" maxlength="6" style="border: solid 1px #993300" readonly />
    % alc. vol.<br />
	La refermentation en bouteille provoque une hausse de
<input type="text" name="referm" value="" size="3" maxlength="6" style="border: solid 1px #993300" readonly />
	% alc. vol.<br />
	Le taux d'alcool final de la bi&egrave;re est donc de
	<input type="text" name="ref_tot" value="" size="3" maxlength="6" style="border: solid 1px #993300" readonly />
	% alc. vol.<br />
	L'att&eacute;nuation apparente finale de la bi&egrave;re est donc de
<input type="text" name="attenuation" value="" size="3" maxlength="6" style="border: solid 1px #993300" readonly />
	%</p>
	       </form></td>
	     </tr>
	   </table>
        </div>
    </div>

<script type="text/javascript">
    <!--

    function calcalc(og, fg, sucre) {

        if (og=='' || fg=='' || sucre=='' || og < fg || isNaN(og) || isNaN(fg) || isNaN(sucre)) {
            alert("Veuillez remplir les champs avec des valeurs numeriques coherentes !");
        }
        else {

            // pour remplir le champ dens avec l'alcool avant refermentation
            dens1 = (og - fg) * 1.05;
            dens1 = (((dens1 / fg) * 100) / 0.795);
            document.forms['calculalc'].dens.value = dens1.toFixed(2);

            // pour remplir le champ referm avec l'alcool apporté par la refermentation
            referm1 = (((sucre * 0.5) / 0.795) /10);
            document.forms['calculalc'].referm.value = referm1.toFixed(2);

            // pour remplir le champ ref_tot avec l'alcool total dans la bière
            ref_tot1 = dens1 + referm1;
            document.forms['calculalc'].ref_tot.value = ref_tot1.toFixed(2);

            // pour remplir le champ attenuation apparente
            attenuation = (((og - fg) / 1000) / ((og/1000) -1)) * 100;
            document.forms['calculalc'].attenuation.value = attenuation.toFixed(2);

        }
    }

    //-->
</script>