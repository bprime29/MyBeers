<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Ty brasseur, brassage amateur, bière artisanale">
<meta name="keywords" content="Ty brasseur, brassage, amateur, bière, empâtage, fermentation">
<meta name="author" content="bprime" />
<head>
    <?php
    /**********Vérification du titre...*************/

    if(isset($titre) && trim($titre) != '')
        $titre = ITRESITE.' : '.$titre;

    else
        $titre = TITRESITE;

    /***********Fin vérification titre...************/
    ?>
    <title><?php echo $titre; ?></title>
    <link rel="icon" type="image/png" href="images/icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" title="Design" href="css/design.css" type="text/css" media="screen" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>

<body>

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
                        <li><a href="outils.php">Outils</a></li>
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

                <li><a href="{% url 'login' %}"<span class="glyphicon glyphicon-lock"></span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
