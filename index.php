<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 13/06/2017
 * Time: 22:32
 */
session_start();
$titre = "Accueil";
$description = "Ty brasseur : l'objectif de ce site est de partager mes expériences en tant que brasseur amateur";
$keywords = "Ty brasseur, brassage, amateur, bière, empâtage, fermentation, recettes";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");


?>

<div class="container">

    <div class="starter-template">
        <h1>Mes expériences en tant que "brasseur amateur"</h1>
        <p class="lead">Petite présentation de mon expérience.</p>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/01.jpg" alt="Image">
                <div class="carousel-caption">
                    <h3>Concassage</h3>
                    <p>Concassage dans le garage</p>
                </div>
            </div>

            <div class="item">
                <img src="images/02.jpg" alt="Image">
                <div class="carousel-caption">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum...</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <script type="text/javascript">
        $(document).ready( function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <hr/>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Bière rouge d'automne
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="viewed">257 <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="viewed">3 <b class="glyphicon glyphicon-star"></b></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">NEW</span>
                    </span>
                </h4>
                <img src="images/brassin3.jpg" alt="...">
                <a href="brassin3.php" class="btn btn-warning col-xs-12" role="button">Recette ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    India Pale Ale
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">433 <i class="glyphicon glyphicon-eye-open"></i></span>
                        <span data-toggle="tooltip" title="Favorited">4 <i class="glyphicon glyphicon-star"></i></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">NEW</span>
                    </span>
                </h4>
                <img src="images/brassin2.jpg" alt="...">
                <a href="brassin2.php" class="btn btn-primary col-xs-12" role="button">Recette ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Blonde au combava
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">2.1K <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="Favorited">13 <b class="glyphicon glyphicon-star"></b></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">NEW</span>
                    </span>
                </h4>
                <img src="images/brassin1.jpg" alt="...">
                <a href="brassin1.php" class="btn btn-info col-xs-12" role="button">Recette ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div><!-- /.container -->
<?php
include("includes/fin.php")
?>