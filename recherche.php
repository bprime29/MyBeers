<!-- ============================================== -->
<!-- ========== Shooter's Search Engine v1.2 ========== -->
<!-- ============================================== -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Recherche</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<form action="resultats_recherche.php" method="post">
		<p>
			<label for="recherche">Rechercher :</label><br />
			
			<input type="text" name="recherche" id="recherche"/><br />
			
			<input checked="checked" id="AND" name="mode" value="AND" type="radio"/>
			<label for="AND"> Tous les mots</label><br />
			
			<input name="mode" id="OR" value="OR" type="radio"/>
			<label for="OR"> Au moins un mot</label><br />
			
			<input type="submit" value="Chercher !"/>
		</p>
		</form>
	</body>
</html>