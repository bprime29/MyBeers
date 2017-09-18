<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 18/09/2017
 * Time: 22:31
 */
session_start();
$description = "Présentation et explication du brassage";
$titre = "Le brassage";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");

?>

<div class="container">
    <h1>Le brassage</h1>
    <p class="text-justify">La conception et la fabrication d'une bière reflètent l'humeur de celui qui la fait. Selon le feeling qui préside au brassage, le résultat peut être technique, appliqué, original, expérimental ou vraiment personnel. Créer sa propre bière est extrèmement satisfaisant. Pour le brassage à la maison, j'utilise la méthode "tout grain".</p>
    <h2>La méthode traditionnelle tout grain (que je pratique!)</h2>
    <p class="text-justify">Pour moi, c'est la voie à suivre pour brasser une bière maison. C'est la plus coûteuse en temps et en matériel, mais avec un peu de pratique, on parvient à réaliser de bon breuvage!</p>
    <h3>Les trois fondamentaux</h3>
    <p class="text-justify"><span class="label label-success text-uppercase">Propreté</span> Une propreté scrupuleuse est indispensable!</p>
    <p class="text-justify"><span class="label label-success text-uppercase">eau</span> Une bière à 4% d'alcool par volume (ABV) est composée, en gros, de 96% d'eau. La dureté ou la douceur de l'eau utilisée aura une influence énorme sur le goût du style de bière choisi. Je me contente personnelement de l'eau du robinet. Les brasseurs ajoutent souvent du siulfate de calcium pour adoucir l'eau. Il est possible de trouver des kits de sels minéraux dans les boutiques spécialisées et sur internet.</p>
    <p class="text-justify"><span class="label label-success text-uppercase">conservation</span> Comment conserver sa bière? En tourie, en fût ou demi fût, en baril ou en bouteille? Une bière gardée dans de grands contenants sera moins pétillante qu'en bouteille. Une bière qui a subi une fermentation secondaire en bouteille se conservera plus longtemps, mais en déployant des notes aromatiques et des textures différentes.</p>
    <h3>Les 6 étapes</h3>
    <p class="text-justify"><span class="text-uppercase">1. L'empâtage</span> C'est le moment où l'amidon contenu dans le malt d'orge se transforme en sucres pour donner naissance au moût de bière. Pour ce faire, on laisse tremper les grains dans une eau chauffée à 68°. "Empâtage est explicite : il s'agit de verser lentement le grain dans l'eau préchauffée (dans la cuve de brassage), et de remuer jusqu'à l'obtention d'une pâte en évitantla formation de grumeaux de grains.</p>
    <p class="text-justify">Il faut ensuite maintenir la température entre 60°C et 68°C. Personnelement, je me cale sur 66°C pendant 60 à 90 minutes. Pour grester à la température, j'entourne ma marmite d'un drap et je remets un légé coup de chauffe si la température descend trop.</p>
    <p class="text-justify"><span class="text-uppercase">2. Le rinçage</span> Il s'agit d'extraine le plus efficacement possible des déchets de grains tous les sucres transformés, afin d'obtenir le moût. Après avoir filtré l'essentiel de la liqueur de malt sucrée de la maische, il reste un gâteau d'enveloppes de grains (ou drèches) qu'on va arroser avec de l'eau entre 75 et 80°C. Ce rinçage sert aussi à stopper la transformation de l'amidon en sucres (ou scarification)</p>
