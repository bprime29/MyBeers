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

<div class="container font_white">
    <div class="col-lg-8 col-lg-offset-2">
        <h1 class="titrePage text-center">Le brassage</h1>
        <p class="text-justify">La conception et la fabrication d'une bière reflètent l'humeur de celui qui la fait. Selon le feeling qui préside au brassage, le résultat peut être technique, appliqué, original, expérimental ou vraiment personnel. Créer sa propre bière est extrèmement satisfaisant. Pour le brassage à la maison, j'utilise la méthode "tout grain".</p>
        <h2>La méthode traditionnelle tout grain (que je pratique!)</h2>
        <p class="text-justify">Pour moi, c'est la voie à suivre pour brasser une bière maison. C'est la plus coûteuse en temps et en matériel, mais avec un peu de pratique, on parvient à réaliser de bon breuvage!</p>
        <h3>Les trois fondamentaux</h3>
        <p class="text-justify"><span class="label label-success text-uppercase">Propreté</span> Une propreté scrupuleuse est indispensable!</p>
        <p class="text-justify"><span class="label label-success text-uppercase">eau</span> Une bière à 4% d'alcool par volume (ABV) est composée, en gros, de 96% d'eau. La dureté ou la douceur de l'eau utilisée aura une influence énorme sur le goût du style de bière choisi. Je me contente personnelement de l'eau du robinet. Les brasseurs ajoutent souvent du siulfate de calcium pour adoucir l'eau. Il est possible de trouver des kits de sels minéraux dans les boutiques spécialisées et sur internet.</p>
        <p class="text-justify"><span class="label label-success text-uppercase">conservation</span> Comment conserver sa bière? En tourie, en fût ou demi fût, en baril ou en bouteille? Une bière gardée dans de grands contenants sera moins pétillante qu'en bouteille. Une bière qui a subi une fermentation secondaire en bouteille se conservera plus longtemps, mais en déployant des notes aromatiques et des textures différentes.</p>
        <h3>Les 6 étapes</h3>
        <img class="pull-left margeImage" src="images/empatage.png"/>
        <p class="text-justify"><span class="text-uppercase">1. L'empâtage</span> C'est le moment où l'amidon contenu dans le malt d'orge se transforme en sucres pour donner naissance au moût de bière. Pour ce faire, on laisse tremper les grains dans une eau chauffée à 68°. "Empâtage est explicite : il s'agit de verser lentement le grain dans l'eau préchauffée (dans la cuve de brassage), et de remuer jusqu'à l'obtention d'une pâte en évitantla formation de grumeaux de grains.</p>
        <p class="text-justify">Il faut ensuite maintenir la température entre 60°C et 68°C. Personnelement, je me cale sur 66°C pendant 60 à 90 minutes. Pour grester à la température, j'entourne ma marmite d'un drap et je remets un légé coup de chauffe si la température descend trop.</p>
        <p class="text-justify"><span class="text-uppercase">2. Le rinçage</span> Il s'agit d'extraine le plus efficacement possible des déchets de grains tous les sucres transformés, afin d'obtenir le moût. Après avoir filtré l'essentiel de la liqueur de malt sucrée de la maische, il reste un gâteau d'enveloppes de grains (ou drèches) qu'on va arroser avec de l'eau entre 75 et 80°C. Ce rinçage sert aussi à stopper la transformation de l'amidon en sucres (ou scarification).</p>
        <p class="text-justify">Il faut faire recirculer le moût, c'est à dire récupérer le jus en bas et le faire repasser sur le grain afin d'avoir un jus le plus clair possible. Comme on veut beaucoup de sucres fermentiscibles, il faut prendre son temps pendant cette étape.</p>
        <p class="text-justify">Il faut ensuite "rincer" avec l'eau chaude, en versant délicatement en petite quantités. Pendant le rinçage, attention à ne pas casser le gâteau de grain pour éviter d'en extraire trop de sédiments. On peut utiliser un arroseur, un arrosoir désinfecté ou un simple broc, ce qui compte, c'est de bien répartir le moût, puis l'eau, à la surface du gâteau. Attendre un peu entre chaque passage, le temps que les grains filtrent complètement le liquide.</p>
        <p class="text-justify"><span class="text-uppercase">3. L'ébullition</span> Dans les brasserie artisanales, on fait bouillir le moût dans une "chaudière d'ébullition". Moi je mets à boullir dans ma marmite!<p/>
        <p class="text-justify">Une fois que le moût bout, mettre le houblon amérisant préalablement mis dans une "chaussette à houlon". Attention, ça peut déborder! Ensuite, au bout d'environ 50 minutes, mettre le houblon aromatique. Ce dernier ne doit absolument pas rester plus de 10 minutes sinon l'amertume de ce houblon sera extraite et la bière risque d'être trop amère.</p>
        <p class="text-justify">A la fin de l'ébullition, il faut retirer les chaussettes de houblons. Puis à l'aide d'un fourquet, il faut faire un Whirlpool: faire tourner le moût pendant 30 secondes pour créer un tourbillon et laisser reposer 5 minutes.</p>
        <p class="text-justify">Il est maintenant temps de transvaser le moût dans une cuve de fermentation. Pour celà utiliser une canne, siphonner le moût bouillant dans le fermenteur. Le whirlpool doit normalement laisser un cô,e de protéines et de résidus de houblon au mileu de la gamelle. Il faut éviter en théorie de les mettre dans le fermenteur. Mettre ensuite le couvercle sur le fermenteur, de l'eau dans le barboteur, et laisser refroidir. Personnellement, je laisse refroidir le moût pendant toute une nuit, mais on peut aussi acheter, ou réaliser un refroidisseur.</p>
        <p class="text-justify"><span class="text-uppercase">4a. La fermentaton primaire</span> Il s'agit d'ajouter, ou de propager, la levure pour activer le processus de conversion des sucres du moût en alcool et en gaz carbonique. Il existe une grande variété de levures de brasserie sèches ou humides. Il est aussi possible de cultiver sa propre levure à partir de bouteilles ou d'échantillons prélevés dans les fûts d'un bar. Personnellement j'utilise des levures achetées sur des sites de vente en ligne.</p>
        <p class="text-justify">Une fois que le moût est à 20°C, on peut ensemencer. La fermentation primaire dure entre 1 semaine et 10 jours.</p>
        <p class="text-justify"><span class="text-uppercase">4b. La fermentaton secondaire</span> Ce processus dure un peu plus longtemps. En tre 1 à 3 semaines</p>
        <p class="text-justify"><span class="text-uppercase">5. Le soutirage</span> C'est le terme consacré pour le transfert de la bière dans le récipient désiré, à la fin de la fermentation. Il faut désinfecter les instruments pour éviter de contaminer la bière. Placer le fermenteur au minimum 30 cm au-dessus du récipient choisi pour que l'écoulement soit facilité par la gravité. Pensez à mettre la cuve de fermentation en place un peu avant de siphonner, afin que les sédiments tombent au fond.</p>
        <p class="text-justify"><span class="text-uppercase">6. La garde</span> C'est à ce moment que ce forme le gaz carbonique qui donne à la bière son pétillant!</p>
    </div>