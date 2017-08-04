<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 6/14/17
 * Time: 2:10 PM
 */
$titre = "Mes recettes";
include("includes/config.php");
include("includes/debut.php");
?>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="well" style="margin-top: 10%;">
            <h3>Send me a message</h3>
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email" class="h4">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Message</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>