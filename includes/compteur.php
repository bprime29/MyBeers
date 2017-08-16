<?php
// Connexion à MySQL
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'visiteur', 'visiteur');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$bdd->query($sql_ingredients);

// -------
// ÉTAPE 1 : on vérifie si l'IP se trouve déjà dans la table.
// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse IP du visiteur.
$retour = $bdd->query('SELECT COUNT(*) AS nbre_entrees FROM visiteurs WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
$donnees = $retour->fetch();

if ($donnees['nbre_entrees'] == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
{
    $bdd->query('INSERT INTO visiteurs VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
}
else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
{
    $bdd->query('UPDATE visiteurs SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
}

// -------
// ÉTAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes.

// On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
//mysql_query('DELETE FROM visiteurs WHERE timestamp < ' . $timestamp_5min);

// -------
// ÉTAPE 3 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
//$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM visiteurs');
//$donnees = mysql_fetch_array($retour);


// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
//echo '<p>Il y a actuellement ' . $donnees['nbre_entrees'] . ' visiteurs connectés sur mon site !</p>';
$retour = $bdd->query('SELECT COUNT(*) AS nbre_entrees FROM visiteurs WHERE timestamp>\'' . $timestamp_5min . '\'');
$donnees = $retour->fetch();

if ($donnees['nbre_entrees'] == 1)// respect du singulier
{
    echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteur connecté<br />';
}
else
{
    echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteurs connectés<br />';
}

$jour = date('d');
$mois = date('m');
$annee = date('Y');
$aujourd_hui = mktime(0, 0, 0, $mois, $jour, $annee);
$retour = $bdd->query('SELECT COUNT(*) AS nbre_entrees FROM visiteurs WHERE timestamp>\'' . $aujourd_hui . '\'');
$donnees = $retour->fetch();

if ($donnees['nbre_entrees'] == 1)// respect du singulier
{
    echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteur aujourd\'hui<br />';
}
else
{
    echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteurs aujourd\'hui<br />';
}

$retour = $bdd->query('SELECT COUNT(*) AS nbre_entrees FROM visiteurs');
$donnees = $retour->fetch();

echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visites au total<br />';
?>
