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
        <li><a href="brassin9.php">Brassin 9 : Bière blanche v2 et blanche framboise</a></li>
        <li><a href="brassin9.php">Brassin 10 : Black IPA Amarillo/Cascade</a></li>
    </div>
</div><!-- /.container -->