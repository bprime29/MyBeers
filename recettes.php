<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 14/06/2017
 * Time: 22:32
 */
session_start();
$titre = "Mes recettes";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");
?>

<div class="container">

    <div class="starter-template">
        <h1>Mes recettes de bières</h1>
        <p class="lead">Voici ci dessous les différentes recettes que j'ai testée.</p>
        <li><a href="brassin1.php">Brassin 1 : Blonde simple au combava</a></li>
        <li><a href="brassin2.php">Brassin 2 : English India Pale Ale</a></li>
        <li><a href="brassin3.php">Brassin 3 : Bière douce rubis profond</a></li>

    </div>

</div><!-- /.container -->