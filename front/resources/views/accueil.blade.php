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
        		<a href= "{{ url('/accueil')}}" id="header-logo" title= "Accueil">CROSL FACTURE</a>
            </div>
    	</header>
            <div class="titre3">
                <h1>CROSL FACTURE APPLICATION</h1><br/>
                <p>Seletionnez Ligue pour ajouter une ligue<p>
                <p>Selectionnez Prestation pour ajouter une prestation</p>
                <p>Cliquer sur CROSL FACTURE pour revenir à l'accueil</p>
            </div>
    		<div class="facture">
            	<a href="{{ url('/ligue')}}" id= "ligue" title= "Ajouter une Ligue">Ligue</a>
            </div>
            <div class="facture">
            	<a href="{{url('/prestation')}}" id="prestation" title= "Ajouter une Prestation">Prestation</a>
            </div>
	</body>
</html>