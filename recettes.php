<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 14/06/2017
 * Time: 22:32
 */
session_start();
$description = "Les différentes recettes de bière que j'ai réalisée";
$titre = "Mes recettes";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");

?>
<link href="css/timeline.css" rel="stylesheet">

<div class="container">

    <div class="starter-template">
        <h1>Mes recettes de bières</h1>
        <p class="lead">Voici ci dessous les différentes recettes que j'ai testée.</p>
        <li><a href="brassin1.php">Brassin 1 : Blonde simple au combava</a></li>
        <li><a href="brassin2.php">Brassin 2 : English India Pale Ale</a></li>
        <li><a href="brassin3.php">Brassin 3 : Bière douce rubis profond</a></li>
        <li><a href="brassin4.php">Brassin 4 : Bière de Noël</a></li>
        <li><a href="brassin5.php">Brassin 5 : Bière blonde cascade</a></li>
        <li><a href="brassin6.php">Brassin 6 : Bière blanche</a></li>
        <li><a href="brassin7.php">Brassin 7 : IPA Amarillo/Citra</a></li>
        <li><a href="brassin8.php">Brassin 8 : Pilsner v1</a></li>
    </div>
    <!--div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Mes recettes de bières</h1>
            <p class="text-center">
                Voici ci dessous les différentes recettes que j'ai testée.
            </p>
            <ul class="timeline">
                <li>
                    <div class="timeline-image">
                        <a href="brassin1.php"><img class="img-circle img-responsive" src="images/combava-coupe.jpg" alt=""></a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>22/04/2017</h4>
                            <h4 class="subheading">Blonde simple au combava</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Pour mon premier brassin, je suis parti sur une recette de bière blonde simple. J'y ai rajouté un combava pour lui rajouter une petite note exotique.
                            </p>
                        </div>
                    </div>
                    <div class="line"></div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <a href="brassin2.php"><img class="img-circle img-responsive" src="images/brassin02.jpg" alt=""></a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>09/06/2017</h4>
                            <h4 class="subheading">English India Pale Ale</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Pour mon deuxieme brassin, j'ai voulu tenter une recette d'India Pale Ale classique. Je me suis beaucoup inspiré d'une recette du site du nain brasseur.
                            </p>
                        </div>
                    </div>
                    <div class="line"></div>
                </li>
                <li>
                    <div class="timeline-image">
                        <a href="brassin3.php"><img class="img-circle img-responsive" src="images/brassin03.jpg" alt=""></a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>13/08/2017</h4>
                            <h4 class="subheading">Bière douce rubis profond</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                L'objectif était de réaliser une bière rouge "d'automne". Elle se caractérise par une base malté sucrée, équilibré par une légère note de houblon.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div-->

</div><!-- /.container -->