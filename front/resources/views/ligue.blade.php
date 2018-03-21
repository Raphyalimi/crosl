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

	<h1 class="titre2">Ajouter une Ligue</h1><br/>

		<form class="formulaire" method="link" action= "ligueprestaok.html">

			<fieldset>
					<label for="Ligue">Ligues</label>
					<p><input type = "text" name = "Ligue" id = "Ligue" /></p>
			</fieldset><br/>		

			<fieldset>

				<legend>Coordonnée Trésorier</legend>		
				
					<label for="tresorier">N° Trésorier</label> : 
					<p><input type= "number" name= "tresorier" id= "tresorier" /></p>
			
					<label for="nomtresorier">Nom Trésorier</label> : 
					<p><input type= "text" name= "nomtresorier" id= "nomtresorier" /></p>

					<label for="adresse">Adresse</label> : 
					<p><input type= "text" name= "adresse" id= "adresse" /></p>

					<label for="cdp">Code Postal</label> : 
					<p><input type= "number" name= "cdp" id= "cdp" /></p>

					<label for="ville">Ville</label> : 
					<p><input type= "text" name= "ville" id= "ville" /></p>

				<p>
					Envoyer à l'adresse du trésorier ?
					<input type = "radio" name = "choix" value="oui" id="oui" required /> <label for="choix">Oui</label>
					<input type = "radio" name = "choix" value="non" id="non" required /> <label for ="choix">Non</label>
				</p>

				<input type="submit" name="envoyer" value="Envoyer" /> <a href="ligueprestaok.html"></a>
				<input type="reset" name="annuler" value="Annuler" />

			</fieldset>	

		</form>
	</body>
</html>