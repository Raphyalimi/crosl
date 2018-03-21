<!DOCTYPE html>
<html>
	<head>
		<meta charset="uts-8" />
		<link rel="stylesheet" href = "style.css" />
		<title>CROSL Facture</title>
	</head>

	<body>
	<header>
            <div>
        		<a href="accueil.html" id="header-logo" title= "Acceuil">CROSL FACTURE</a>
            </div>
    </header>

	<h1 class="titre2">Formulaire Prestation</h1><br/>

		<form class="formulaire"  method="link" action= "ligueprestaok.html">

			<fieldset>

					<label for="code">Code Prestation</label> : 
					<p><input type= "text" name= "code" id= "code" required /></p>

					<label for="libelle">Libelle</label> : 
					<p><input type= "text" name= "libelle" id= "libelle" required /></p>

					<label for="pu">Prix Unitaire</label> : 
					<p><input type= "number" name= "pu" id= "pu" pattern="[0-9]+" required /></p>

					<input type="submit" name="envoyer" value="Envoyer" /> <a href="ligueprestaok.html"></a>
					<input type="reset" name="annuler" value="Annuler" />

			</fieldset><br/>		

		</form>
	</body>
</html>
	</body>
</html>