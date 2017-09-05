<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 05/09/2017
 * Time: 22:55
 */
session_start();
$description = "Présentation du matériel que j'utilise pour le brassage de mes bières";
$titre = "Mon matériel de brassage";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");

?>

<div class="container">
    <h1>Présentation du matériel utilisé</h1>
    <p class="lead">Voici une rapide présentation du matériel que j'utilise pour réaliser mes bières.</p>
    <h3>Un moulin à malt</h3>
    <h3>Une marmite d'environ 30 litres</h3>
    <h3>Un fourquet</h3>
    <h3>Un thermomètre</h3>
    <h3>Des chaussettes à houblon</h3>
    <h3>Un stérilisant</h3>
    <h3>Un filtre manifold</h3>
    <h3>Un fermenteur avec son barboteur</h3>
    <h3>Une capsuleuse</h3>


    