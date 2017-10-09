<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 03/09/2017
 * Time: 22:29
 */
session_start();
$titre = "Liens utilses";
$description = "Liens utiles";
$keywords = "";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
?>

<div class="container font_white" xmlns="http://www.w3.org/1999/html">
    <script type="text/javascript">
        $(document).ready( function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Saveur bière
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="viewed">257 <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="viewed">3 <b class="glyphicon glyphicon-star"></b></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">Lien</span>
                    </span>
                </h4>
                <img src="images/SaveurBiere.png" alt="...">
                <a href="https://www.saveur-biere.com/fr/" class="btn btn-warning col-xs-12" role="button">C'est ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Brouwland
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">433 <i class="glyphicon glyphicon-eye-open"></i></span>
                        <span data-toggle="tooltip" title="Favorited">4 <i class="glyphicon glyphicon-star"></i></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">Lien</span>
                    </span>
                </h4>
                <img src="images/logo-brouwland2.png" alt="...">
                <a href="https://www.brouwland.com" class="btn btn-warning col-xs-12" role="button">C'est ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    LeBonPlan
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">433 <i class="glyphicon glyphicon-eye-open"></i></span>
                        <span data-toggle="tooltip" title="Favorited">4 <i class="glyphicon glyphicon-star"></i></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">Lien</span>
                    </span>
                </h4>
                <img src="images/logo_lebonplan.png" alt="...">
                <a href="http://www.lebonplan.fr/" class="btn btn-warning col-xs-12" role="button">C'est ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Little Bock
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">2.1K <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="Favorited">13 <b class="glyphicon glyphicon-star"></b></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">Lien</span>
                    </span>
                </h4>
                <img src="images/logo_blog.png" alt="...">
                <a href="https://blog.littlebock.fr/" class="btn btn-warning col-xs-12" role="button">C'est ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Univers Bière!
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">2.1K <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="Favorited">13 <b class="glyphicon glyphicon-star"></b></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">Lien</span>
                    </span>
                </h4>
                <img src="images/nainacc.png" alt="...">
                <a href="http://univers-biere.net/" class="btn btn-warning col-xs-12" role="button">C'est ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Brassage Amateur
                    <span class="label label-info info">
                        <!--span data-toggle="tooltip" title="Viewed">2.1K <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="Favorited">13 <b class="glyphicon glyphicon-star"></b></span-->
                        <span data-toggle="tooltip" title="Bootstrap version">Forum</span>
                    </span>
                </h4>
                <img src="images/brassageamateur_com.gif" alt="...">
                <a href="https://www.brassageamateur.com/forum/" class="btn btn-warning col-xs-12" role="button">C'est ici!</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
