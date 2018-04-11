<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css" />
    <title>MedFocus</title>
</head>

<body>
	<div id="container1_user">
	 	<header>
	 		<div id="head">
            	<div class="logo"><a href="Accueil2.html"><img src="logo-01.png" width=200px></a></div>
            	<div class="connexion">
                	<ul id="onglets">
                    	<li><a class="btn btn-outline-info" href="login_user.php" role="button">Mon compte</a></li>
                    	<li><a class="btn btn-outline-info" href="login_med.php" role="button">Professionnel de santé ?</a></li>
                	</ul>
            	</div>
        	</div>
        </header>
    </div>

    <div id="container2_user">
        <h1>Création de votre compte professionnel</h1>

        <div id="container3_subscribe_med">
            <ul class="nav border-round nav-fill">
                    <li class="nav-item">
                    <a class="nav-link bouton-bleu text-blanc" href="subscribe_form_med_presentation.php">Présentation</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-info" href="subscribe_form_med_honoraires.php">Honoraires</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-info" href="subscribe_form_med_lieu.php">Lieu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-info" href="subscribe_form_med_contact.php">Contact</a>
                    </li>
            </ul>
        <div id="container4_subscribe_med">
        <div id="container5_subscribe_med">
        <form id="form">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputName">Nom</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
            <label for="inputSurname">Prénom</label>
            <input type="text" class="form-control" id="inputSurname" placeholder="Prénom">
            </div>
            <div class="form-group col-md-6">
            <label for="inputProf">Profession</label>
            <input type="text" class="form-control" id="inputProf" placeholder="Profession">
            </div>
            <div class="form-group col-md-6">
            <label for="inputSpeciality">Spécialité</label>
            <input type="text" class="form-control" id="inputSpeciality" placeholder="Spécialité">
            </div>
        </div>
        <div class="form-group">
            <label for="inputRPPS">Etes-vous membre d'une AGA ? Si oui, laquelle ?</label>
            <input type="text" class="form-control" id="inputRPPS" placeholder="Oui/Non, ...">
            </div>
        <form method="post" action="traitement.php">
   <p>
       <label for="ameliorer">Indiquez les diplômes que vous avez obtenus</label><br/>
       <textarea type="text" class="form-control" id="inputSpeciality"></textarea>
   </p>
</form>
    </form>
</div>
        <div id="container6_subscribe_med">
          <form id="form">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputSex">Je suis un /une</label>
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-light">Homme</button>
            <button type="button" class="btn btn-light">Femme</button>
            </div>
            </div>
            <div class="form-group col-md-6">
            <label for="inputBirth">Date de naissance</label>
            <input type="date" class="form-control" id="inputBirth" placeholder="Birth">
            </div>
        </div>
        <div class="form-group">
            <label for="inputRPPS">Numéro RPPS</label>
            <input type="text" class="form-control" id="inputRPPS" placeholder="N°....">
            </div>

        <div class="form-group">
            <label for="inputRPPS">Indiquez les langues parlées</label>
            <input type="text" class="form-control" id="inputRPPS" placeholder="Anglais, espagnol, ...">
            </div>
   <p>
       <label for="ameliorer">Expériences</label><br/>
       <textarea type="text" class="form-control" id="inputSpeciality" placeholder="Pompier volontaire, Croix Rouge Française, ..."></textarea>
   </p>
   <button type="button" class="btn btn-info bouton-droite"><a class="lien-normal text-blanc" href="subscribe_form_med_honoraires.php">Etape suivante</a></button>
</form>
        </form>

    </div>
</div>
</div>
</div>
</body>
</html>