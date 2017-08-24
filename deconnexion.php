<?php
session_start();
session_destroy();

$titre="Déconnexion";
include('includes/config.php');
include('includes/identifiants.php');
include("includes/debut.php");
?>
<script type="text/javascript">
    window.onload = Init;
    var waitTime = 5; // Temps d'attente en seconde
    var url = 'index.php';     // Lien de destination
    var x;
    function Init() {
        window.document.getElementById('compteur').innerHTML = waitTime;
        x = window.setInterval('Decompte()', 1000);
    }
    function Decompte() {
        ((waitTime > 0)) ? (window.document.getElementById('compteur').innerHTML = --waitTime) : (window.clearInterval(x));
        if (waitTime == 0) {
            window.location = url;
        }
    }
</script>

<div class="container">
    <?php
if ($id==0) erreur(ERR_IS_NOT_CO);

echo '<p>Vous êtes à présent déconnecté <br /> 
    Vous allez être redirigé vers la page d accueil dans  <span id=\'compteur\'>5</span> secondes!</p><!--meta http-equiv="refresh" content="6; index.php"-->';
echo '</div></body></html>';


?>

