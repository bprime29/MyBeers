<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 6/14/17
 * Time: 4:31 PM
 */
$titre = "Brassin 1";
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
$sql_ingredients="SELECT * FROM ingredients WHERE Brassin='tt'";
$sql_profil="SELECT * FROM profil WHERE Brassin='Brassin1'";
?>
<div class="container">

    <div class="col-lg-10 col-lg-offset-1">
        <h1>XXXXXXXXXXX</h1>
        <p class="lead">Pour mon premier brassin, je suis parti sur une recette de bière blonde simple. J'y ai rajouté un combava pour lui rajouter une petite note exotique.</p>
        <p align="center">Quelques photos du brassin <a href="https://goo.gl/photos/6BA9mZiJzFsnFB9v8">ici</a></p>
        <p align="center">Quelques photos sont disponible <a href="https://goo.gl/photos/6BA9mZiJzFsnFB9v8">ici</a></p>
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
            <caption>
                <h4>Profile de la bière</h4>
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
    <div align="center">
        <table class="table1">
            <tbody>
            <tr>
                <td class="topleft">
                    Type: Monopalier
                </td>
                <td class="topright">
                    Date: 22/04/2017
                </td>
            </tr>
            <tr>
                <td class="topleft">
                    Batch size: 20l
                </td>
                <td class="topright">
                    Brasseur: Bertrand
                </td>
            </tr>
            <tr>
                <td class="topleft">
                    Boil size: 20l
                </td>
                <td class="topright">
                    Boil time: 80min
                </td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#a9a9a9">
                    <p class="text-center">
                        Ingrédients
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#a9a9a9">
                    <p class="text-center">
                        Profile de la bière
                    </p>
                </td>
            </tr>
            <tr>
                <td width="40%">
                    <p style="margin-top: 0; margin-bottom: 0"><b><i>Est Original
                                Gravity</i>:</b>
                        1,059 SG</td>
                <td width="52%"><i><b>Est Final Gravity:</b></i> 1,015 SG</td>
            </tr>
            <tr>
                <td width="40%">
                    <b><i>Estimated Alcohol by Vol</i></b><i><b>:</b></i> 5,74 % </td>
                <td width="52%"><i><b>Bitterness:</b></i> 30,3 IBU</td>
            </tr>
            <tr>
                <td width="40%">
                    <i><b>Est Color:</b></i> 8,0 EBC</td>
                <td width="52%"><b><i>Color</i>:</b> <TABLE><TD BGCOLOR="#ece563"><FONT COLOR="#ece563"> Color </FONT></TD></TABLE></td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#a9a9a9">
                    <p class="text-center">
                        Mash profile
                    </p>
                </td>
            </tr>
            <tr>
                <td width="40%">
                    <b><i>Mash Name</i>:</b>
                    Infusion, Batch Sparge</td>
                <td width="52%"><b><i>Total Grain Weight</i>:</b>
                    6,00 kg</td>
            </tr>
            <tr>
                <td width="40%">
                    <b><i>Sparge Water</i>:</b>
                    19,31 L</td>
                <td width="52%"><b><i>Sparge Temperature</i>:</b> 75,6 C</td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="text-center">
                    <table width="100%%" cellspacing="0" cellpadding="0">
                        <caption><u><b>Single Infusion, Full Body, Batch Sparge</b></u></caption>

                        <tbody>
                        <tr>
                            <th width="16%" align="left">Step Time</th>
                            <th width="23%" align="left">Name</th>
                            <th width="44%" align="left">Description</th>
                            <th width="16%" align="left">Step Temp</th>
                        </tr>
                        <tr>
                            <td align="left">70 min</td>
                            <td align="left">Monopalier</td>
                            <td align="left">Add 15,65 L of water at 74,7 C</td>
                            <td align="left">68,0 C</td>
                        </tr>

                        <tr>
                            <td align="left">10 min</td>
                            <td align="left">Mash Out</td>
                            <td align="left">Heat at 78,0 C</td>
                            <td align="left">78,0 C</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#a9a9a9">
                    <p class="text-center">
                        Fermentation
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2"><em><strong>Primaire :</strong></em> temp&eacute;rature 22&deg;C dur&eacute;e 4 jours &agrave; 1 semaine</td>
            </tr>
            <tr>
                <td colspan="2"><strong><em>Secondaire</em></strong> <em><strong>:</strong></em> temp&eacute;rature 22&deg;C dur&eacute;e 1 semaine puis 15&deg;C dur&eacute;e 2-3 semaines</td>
            </tr>
            <tr>
                <td colspan="2"><em><strong>Sucre &agrave; l'embouteillage :</strong></em> 7g/L</td>
            </tr>
            </tbody>
        </table>
    </div>

</div><!-- /.container -->
