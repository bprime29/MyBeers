<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 13/06/2017
 * Time: 22:32
 */
$titre = "Accueil";
include("includes/config.php");
include("includes/debut.php");
?>

<div class="container">

    <div class="starter-template">
        <h1>Mes expériences en tant que "brasseur amateur"</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
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
                <img src="http://localhost/images/1.jpg" alt="Image">
                <div class="carousel-caption">
                    <h3>Concassage</h3>
                    <p>Concassage dans le garage</p>
                </div>
            </div>

            <div class="item">
                <img src="images/2.jpg" alt="Image">
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

</div><!-- /.container -->
