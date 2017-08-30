<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <?php
    /**********Vérification du titre...*************/

    if(isset($titre) && trim($titre) != '')
        $titre = TITRESITE.' : '.$titre;

    else
        $titre = TITRESITE;

    /***********Fin vérification titre...************/
    ?>
    <title><?php echo $titre; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    <link rel="icon" type="image/png" href="images/icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="google-site-verification" content="KaO7PLBwrwRjaUbrUrj_B-4euSaSyCToTxL94j5ExRc" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ty brasseur, brassage amateur, bière artisanale">
    <meta name="keywords" content="Ty brasseur, brassage, amateur, bière, empâtage, fermentation, recettes">
    <meta name="author" content="bprime" />
    <link rel="stylesheet" title="Design" href="css/design.css" type="text/css" media="screen" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <?php include_once("includes/analyticstracking.php");?>
</head>


<?php

//Attribution des variables de session
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

//Création des variables
$ip = ip2long($_SERVER['REMOTE_ADDR']);

//Requête
$query=$db->prepare('INSERT INTO forum_whosonline VALUES(:id, :time,:ip)
ON DUPLICATE KEY UPDATE
online_time = :time , online_id = :id');
$query->bindValue(':id',$id,PDO::PARAM_INT);
$query->bindValue(':time',time(), PDO::PARAM_INT);
$query->bindValue(':ip', $ip, PDO::PARAM_INT);
$query->execute();
$query->CloseCursor();
$time_max = time() - (60 * 5);
$query=$db->prepare('DELETE FROM forum_whosonline WHERE online_time < :timemax');
$query->bindValue(':timemax',$time_max, PDO::PARAM_INT);
$query->execute();
$query->CloseCursor();
//On inclue les 2 pages restantes
include("./includes/functions.php");
include("./includes/constants.php");
include("./includes/microdonnees.php")
?>
<body>
<?php include_once("includes/analyticstracking.php");?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ty brasseur</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Accueil</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">Brassage<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="recettes.php">Mes recettes</a></li>
                        <li><a href="#">Le matériel</a></li>
                        <!--li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#"><span class="glyphicon glyphicon-list-alt"></span> Outils</a>
                            <ul class="dropdown-menu">
                                <li><a href="calc_avec_refracto.php">Calcul taux d'alcool avec réfracomètre</a></li>
                                <li><a href="outils.php">Calcul taux d'alcool avec densimètre</a></li>
                            </ul>
                        </li-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">Outils<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="calc_avec_refracto.php">Calcul taux d'alcool avec réfracomètre</a></li>
                        <li><a href="outils.php">Calcul taux d'alcool avec densimètre</a></li>
                        <li class="divider"></li>
                        <li><a href="lien.php">Liens</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right inline-form" action="resultats_recherche.php" method="post">
                <div class="form-group">
                    <input type="text" class="input-sm form-control" placeholder="Recherche" name="recherche" id="recherche">
                    <input type="hidden" id="AND" name="mode" value="AND"/>
                    <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <!--li><a href="{% url 'post_new' %}"<span class="glyphicon glyphicon-plus"></span></a></li>
                <li><a href="{% url 'post_draft_list' %}"><span class="glyphicon glyphicon-edit"></span></a></li>
                <li><p>Hello {{ user.username }} <small>(<a href="{% url 'logout' %}">Log out</a>)</small></p></li-->
                <li class="dropdown">
                    <?php
                    if ($id!=0)
                    {
                        ?>
                        <a data-toggle="dropdown" href="#">Bienvenue <?php echo $pseudo?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            if ($lvl==4)
                            {
                                ?>
                                <li><a href="formulaire.php">Formulaire</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="voirprofil.php?m=<?php echo $id; ?>&amp;action=modifier">Gérer mon compte</a></li>
                            <li><a href="deconnexion.php">Déconnecter</a></li>
                        </ul>
                        <?php
                    }

                    else
                    {
                        ?>
                        <a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-lock"><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="register.php">Inscription</a></li>
                            <li><a href="connexion.php">Connexion</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </li>
                <!--li><a href="{% url 'login' %}"<span class="glyphicon glyphicon-lock"></span></a></li-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
