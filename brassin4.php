<?php
session_start();
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 6/14/17
 * Time: 4:31 PM
 */
$titre = "Bière de Noël";
$description = "Recette de ma première bière de Noël";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");

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

$name = "Brassin 4 - Bière de Noël";

$sql_info="SELECT * FROM Info WHERE Brassin='$name'";
$sql_ingredients="SELECT * FROM ingredients WHERE Brassin='$name'";
$sql_profil="SELECT * FROM profil WHERE Brassin='$name'";
$sql_fermentation="SELECT * FROM fermentation WHERE Brassin='$name'";
$sql_mash_step="SELECT * FROM mash_step WHERE Brassin='$name'";
$sql_mash_info="SELECT * FROM mash_info WHERE Brassin='$name'";
?>
<link href="css/timeline_recette.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
<script src="js/lightgallery.min.js"></script>
<!-- lightgallery plugins -->
<script src="js/lg-thumbnail.min.js"></script>
<script src="js/lg-fullscreen.min.js"></script>
<div class="container font_white">

    <div class="starter-template">
        <h1><?php echo $name; ?></h1>
        <p class="lead">Voici la recette de ma première bière de Noël!</p>
        <!--p align="center">Quelques photos sont disponible <a href="https://goo.gl/photos/6BA9mZiJzFsnFB9v8">ici</a></p-->
    </div>
    <section class="row">
        <style type="text/css">
            [class*="col-"] { margin-bottom: 20px; }
            img { width: 100%; }
        </style>
        <div class="col-lg-10 col-lg-offset-1">
            <div id="aniimated-thumbnials" class="zoom">
                <a class="col-xs-4 col-sm-3 col-md-2 image" href="images/brassin4/1.jpg">
                    <img class="img-responsive" src="images/brassin4/thumb-1.jpg">
                </a>
                <a class="col-xs-4 col-sm-3 col-md-2 image" href="images/brassin4/2.jpg">
                    <img class="img-responsive" src="images/brassin4/thumb-2.jpg">
                    <!--div class="demo-gallery-poster">
                        <!--img src="../static/img/zoom.png">
                    </div-->
                </a>

                <a class="col-xs-4 col-sm-3 col-md-2 image" href="images/brassin4/6.jpg">
                    <img class="img-responsive" src="images/brassin4/thumb-6.jpg">
                </a>

                <a class="col-xs-4 col-sm-3 col-md-2 image" href="images/brassin4/7.jpg">
                    <img class="img-responsive" src="images/brassin4/thumb-7.jpg">
                </a>

                <a class="col-xs-4 col-sm-3 col-md-2 image" href="images/brassin4/9.jpg">
                    <img class="img-responsive" src="images/brassin4/thumb-9.jpg">
                </a>

                <a class="col-xs-4 col-sm-3 col-md-2 image" href="images/brassin4/11.jpg">
                    <img class="img-responsive" src="images/brassin4/thumb-11.jpg">
                </a>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $('#aniimated-thumbnials').lightGallery({
            thumbnail:true
        });
    </script>

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-borderless table-condensed table-hover">
            <caption>
                <h4>Information</h4>
            </caption>
            <tbody>
            <?php
            $info=$bdd->query($sql_info);
            $dataInfo=$info->fetch();
            ?>
            <tr>
                <td>Type: <?php echo $dataInfo['Type']; ?></td>
                <td>Date: <?php echo $dataInfo['Date']; ?></td>
            </tr>
            <tr>
                <td>Batch size: <?php echo $dataInfo['Batch_size']; ?></td>
                <td>Brasseur: <?php echo $dataInfo['Brasseur']; ?></td>
            </tr>
            <tr>
                <td>Boil size: <?php echo $dataInfo['Boil_size']; ?></td>
                <td>Boil time: <?php echo $dataInfo['Boil_time']; ?></td>
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
            <thead>
            <tr>
                <th>Step time</th>
                <th>Name</th>
                <th>Description</th>
                <th>Step temp</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $mash_step=$bdd->query($sql_mash_step);
            while($dataMashStep = $mash_step->fetch())
            {
                ?>
                <tr>
                    <td><?php echo $dataMashStep['Step_time']; ?></td>
                    <td><?php echo $dataMashStep['Name']; ?></td>
                    <td><?php echo $dataMashStep['Description']; ?></td>
                    <td><?php echo $dataMashStep['Step_temp']; ?></td>
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
                <h4>Profil de la bière</h4>
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

    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-borderless table-condensed table-hover">
            <caption>
                <h4>Mash profile</h4>
            </caption>
            <?php
            $mash_info=$bdd->query($sql_mash_info);
            $dataMashInfo=$mash_info->fetch();
            ?>
            <tr>
                <td width="40%">
                    <b><i>Mash Name</i>:</b>
                    <?php echo $dataMashInfo['Mash_name']; ?></td>
                <td width="52%"><b><i>Total Grain Weight</i>:</b>
                    <?php echo $dataMashInfo['Total_grain']; ?></td>
            </tr>
            <tr>
                <td width="40%">
                    <b><i>Sparge Water</i>:</b>
                    <?php echo $dataMashInfo['Sparge_water']; ?></td>
                <td width="52%"><b><i>Sparge Temperature</i>:</b> <?php echo $dataMashInfo['Sparge_temp']; ?></td>
            </tr>
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
            <?php
            $mash_step=$bdd->query($sql_mash_step);
            while($dataMashStep = $mash_step->fetch())
            {
                ?>
                <tr>
                    <td><?php echo $dataMashStep['Step_time']; ?></td>
                    <td><?php echo $dataMashStep['Name']; ?></td>
                    <td><?php echo $dataMashStep['Description']; ?></td>
                    <td><?php echo $dataMashStep['Step_temp']; ?></td>
                </tr>
                <?php
            }

            ?>
            </tbody>
        </table>
    </div>
    <!--div-- class="col-lg-10 col-lg-offset-1">
        <table class="table table-borderless table-condensed table-hover">
            <caption>
                <h4>Fermentation </h4>
            </caption>
            <tbody>

            </tbody>
        </table>
    </div-->

    <!--div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover table-striped table-condensed">
            <caption>
                <h4>Commentaires : </h4>
            </caption>
            <tbody>
            <?php
            $fermentation=$bdd->query($sql_fermentation);
            $datafermentation=$fermentation->fetch();
            ?>
            <tr>
                <td colspan="2"><em><strong>Primaire :</strong></em> <?php echo $datafermentation['Primaire']; ?></td>
            </tr>
            </tbody>
        </table>
    </div-->
    <div class="col-lg-10 col-lg-offset-1">
        <ul class="nav nav-tabs tabs tabs-top" style="width: 100%">
            <li class="tab active">
                <a href="#mashing" data-toggle="tab" target="_blank">
                    Empâtage
                </a>
            </li>
            <li class="tab">
                <a href="#boil" data-toggle="tab" target="_blank">
                    Ebullition
                </a>
            </li>
            <li class="tab">
                <a href="#ferment" data-toggle="tab" target="_blank">
                    Fermentation
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="mashing">
            <div class="col-lg-10 col-lg-offset-1">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge primary"><i class="fa fa-gavel"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Concasser le malt</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge danger"><i class="fa fa-fire"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Faire chauffer 18 L d&rsquo;eau</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-spoon"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><strong>Mono-palier</strong> à 68°C pendant 60 minutes</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-spoon"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Palier de <strong>désactivation des enzymes</strong> (mash-out) à 78°C pendant 10 minutes</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-tint"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Filtrer et laver les drêches avec <strong>13 L d&rsquo;eau à 80°C.</strong> <em>Adapter le volume d&rsquo;eau en fonction de la quantité de moût obtenue</em></div>
                        </div>
                </ul>
            </div>
        </div>
        <div class="tab-pane" id="boil">
            <div class="col-lg-10 col-lg-offset-1">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge danger"><i class="fa fa-fire"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Faire bouillir le moût</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-plus"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Ajouter les <strong>25 g de Northern Brewer</strong></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-hourglass-start"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><i>Minuteur 30 minutes</i></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-plus"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Ajouter les <strong>100 g de sucre Candi</strong></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-hourglass-start"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><i>Minuteur 30 minutes</i></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-plus"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Ajouter les <strong>10 g de Styrian Golding</strong></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-hourglass-start"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><i>Minuteur 15 minutes</i></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-plus"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Ajouter les <strong>20 g de Cascade</strong></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-hourglass-start"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><i>Minuteur 10 minutes</i></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-plus"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Ajouter toutes les <strong>épices</strong></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-hourglass-start"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><i>Minuteur 5 minutes</i></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-remove"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Retirer tout le houblon et les épices</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge danger"><i class="fa fa-fire-extinguisher"> </i></div>
                        <div class="timeline-panel">
                            <div class="timeline-body">Faire refroidir le moût</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane" id="ferment">
            <div class="col-lg-10 col-lg-offset-1">
                <?php
                $fermentation=$bdd->query($sql_fermentation);
                $datafermentation=$fermentation->fetch();
                ?>
                <table class="table table-borderless table-condensed table-hover">
                    <tr>
                        <td colspan="2"><em><strong>Primaire :</strong></em> <?php echo $datafermentation['Primaire']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong><em>Secondaire</em></strong> <em><strong>:</strong></em> <?php echo $datafermentation['Secondaire']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><em><strong>Sucre à l'embouteillage :</strong></em> <?php echo $datafermentation['Sucre']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div><!-- /.container -->
</body>