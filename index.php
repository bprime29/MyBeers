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

</div><!-- /.container -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 footerleft ">
                <div class="logofooter"> Logo</div>
                <p><?php include ('includes/compteur.php'); ?></p>

            </div>
            <div class="col-md-2 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">GENERAL LINKS</h6>
                <ul class="footer-ul">
                    <li><a href="#"> Career</a></li>
                    <li><a href="#"> Privacy Policy</a></li>
                    <li><a href="#"> Terms & Conditions</a></li>
                    <li><a href="#"> Client Gateway</a></li>
                    <li><a href="#"> Ranking</a></li>
                    <li><a href="#"> Case Studies</a></li>
                    <li><a href="#"> Frequently Ask Questions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">LATEST POST</h6>
                <div class="post">
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
