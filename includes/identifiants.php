<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'visiteur', 'visiteur');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
