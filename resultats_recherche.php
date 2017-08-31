<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 13/06/2017
 * Time: 22:32
 */
$titre = "Resultats de recherche";
$description="Résultats de recherche";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
include_once("includes/analyticstracking.php");
?>
<div class="container">
<?php
/*------------------------------------------------------------*/
/*---------- Shooter's Search Engine v1.2 ----------*/
/*------------------------------------------------------------*/

/* Configuration */
// indique o� le moteur de recherche doit rechercher
// './' correspond au dossier o� se trouve la page
// '../' correspond au dossier contenant le dossier o� se trouve la page
// '/' correspond au dossier de la racine de votre site web
$dossierDeLaRecherche = './';

// indique si le moteur de recherche doit rechercher DANS LE CODE SOURCE DES PAGES
// true pour rechercher dans le code source
// false pour ne pas rechercher dans le code source
$rechercherDansLeCodeSource = true;

// indique si le moteur de recherche doit rechercher DANS LES SOUS DOSSIERS
// true pour rechercher dans les sous dossiers
// false pour ne pas rechercher dans les sous dossiers (La recherche se limitera alors au dossier de la recherche)
define('RechercherDansLesSousDossiers', true);

// indique les pages que le moteur de recherche doit ignorer
// remplacez la ligne 33 par $exclure = array(); pour n'exclure aucune page
$exclure = array('recherche.php', 'resultats_recherche.php', 'design_recherche.css');

// indique les dossiers que le moteur de recherche doit ignorer
// remplacez la ligne 36 par $exclureDossier = array(); pour n'exclure aucun dossier
$exclureDossier = array('.git', 'images', 'js', 'front');

function scanner($path)
{
	if($dir = opendir($path))
	{
		$fichiers = array();
		$i = 0;
		while(false !== ($file = readdir($dir)))
		{
			if($file != "." && $file != "..")
			{
				if(!is_dir($file))
				{
					$fichiers[$i] = preg_replace('#.#', '$0', $file);
					$i++;
				}
				else
				{
					if(RechercherDansLesSousDossiers)
					{
						$sous_dossier = scanner($file);
						
						$j = 0;
						while($j < count($sous_dossier))
						{
							array_unshift($fichiers, $file . '/' . preg_replace('#.#', '$0', $sous_dossier[$j]));
							$j++;
						}
						$i++;
					}
				}
			}
		}
		closedir($dir);
	}
	return $fichiers;
}

function exclureDossier($recherche, $arrayExclure)
{
	$recherche = explode('/', $recherche);
	$i = 0;
	while($i < count($recherche) - 1)
	{
		if(in_array($recherche[$i], $arrayExclure))
			return true;
		else
			return false;
		$i++;
	}
}

if(isset($_POST['recherche']) AND !empty($_POST['recherche']))
{
	$recherche = strip_tags($_POST['recherche']);
	$fichiers = scanner($dossierDeLaRecherche);
	
	/* chronom�tre */
	$debut = microtime();
	
	/* si on a choisi tous les mots */
	if($_POST['mode'] == 'AND')
	{
		/* tableau contenant les fichiers qui contiennent la recherche */
		$resutats_recherche = array();
		
		/* on �crit la mise en forme */
		echo '<h1>R&eacute;sultats de la recherche "<span class="italique">' . $recherche . '</span>" :</h1><hr /><p>';
		
		$i = 0;
		while($i < count($fichiers))
		{
			/* On ouvre le fichier */
			if($rechercherDansLeCodeSource)
				$fichier_courant = file_get_contents($fichiers[$i]);
			else
				$fichier_courant = strip_tags(file_get_contents($fichiers[$i]));
			
			$cherche = '#' . $recherche . '{1,}#is';
			if(preg_match($cherche, $fichier_courant))
			{
				//on affiche UNIQUEMENT les r�sultats conformes (qui ne sont pas dans les pages interdites)
				if(!exclureDossier($fichiers[$i], $exclureDossier) AND !in_array($fichiers[$i], $exclure))
				{
					echo '<a href="' . $fichiers[$i] . '">' . $fichiers[$i] . '</a><br />';
					$resutats_recherche[$i] = $fichiers[$i];
				}
			}
			$i++;
		}
		
		/* Si il n'y a aucun r�sultat � afficher */
		if(count($resutats_recherche) == 0)
			echo 'La recherche n\'a retourn&eacute;e aucun r&eacute;sultat.';
		elseif(count($resutats_recherche) == 1)
			echo '</p><hr /><p>' . count($resutats_recherche) . ' page trouv&eacute;e en ' . round(microtime() - $debut, 9) . ' secondes<br />';
		else
			echo '</p><hr /><p>' . count($resutats_recherche) . ' pages trouv&eacute;es en ' . round(microtime() - $debut, 9) . ' secondes<br />';
	}
	
	/* si on a choisi au moins un mot */
	if($_POST['mode'] == 'OR')
	{
		/* tableau contenant les fichiers qui contiennent la recherche */
		$resutats_recherche = array();
		
		/* on �crit la mise en forme */
		echo '<h1>R&eacute;sultats de la recherche "<span class="italique">' . $recherche . '</span>" :</h1><hr /><p>';
		
		$recherche = explode(' ', $recherche);
		$j = 0;
		$lien = array();
		while($j < count($recherche))
		{
			$lien[$j] = array();
			$i = 0;
			while($i < count($fichiers))
			{
				/* On ouvre le fichier */
				if($rechercherDansLeCodeSource)
					$fichier_courant = file_get_contents($fichiers[$i]);
				else
					$fichier_courant = strip_tags(file_get_contents($fichiers[$i]));
				
				$cherche = '#' . $recherche[$j] . '{1,}#is';
				if(preg_match($cherche, $fichier_courant))
				{
					//on affiche UNIQUEMENT les r�sultats conformes (qui ne sont pas dans les pages interdites)
					if(!exclureDossier($fichiers[$i], $exclureDossier) AND !in_array($fichiers[$i], $exclure))
					{
						$lien[$j][$i] = '<a href="' . $fichiers[$i] . '">' . $fichiers[$i] . '</a><br />';
						$resutats_recherche[$i] = $fichiers[$i];
					}
				}
				$i++;
			}
			/* on affiche les r�sultats sous forme de cat&eacute;gories */
			if(!in_array($fichiers[$i], $exclure))
			{
				echo '<span class="souligne">R&eacute;sultats pour "<span class="italique">' . $recherche[$j] . '</span>" :</span><br />';
				foreach($lien[$j] as $sous_lien)
				{
					echo $sous_lien;
				}
			}
			$j++;
			/* Si il n'y a aucun r�sultat � afficher */
			if(count($resutats_recherche) == 0)
				echo 'La recherche n\'a retourn&eacute;e aucun r&eacute;sultat.<br/>';
		}
		if(count($resutats_recherche) == 0)
		{}
		elseif(count($resutats_recherche) == 1)
			echo '</p><hr /><p>' . count($resutats_recherche) . ' page trouv&eacute;e en ' . round(microtime() - $debut, 9) . ' secondes<br />';
		else
			echo '</p><hr /><p>' . count($resutats_recherche) . ' pages trouv&eacute;es en ' . round(microtime() - $debut, 9) . ' secondes<br />';
	}
}//fin du grand if

// Si on ne vient pas de la page de recherche, on y va !
else
{
	header('Status: 200 OK');
	header('Location: recherche.php');
}
?>
		</p>
	</div>
	</body>
</html>