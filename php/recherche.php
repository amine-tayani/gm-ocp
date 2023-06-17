<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-MA">
   <head>
      <title>Ocp service medicale</title>
      <link rel="icon" type="image/jpg" href="../images/OCP-logo.jpg">
      <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins|Abel|Cabin|Dosis|Hind|Josefin+Sans|Muli|PT+Sans|Quicksand|Raleway" rel="stylesheet">
      <meta charset="UTF-8">
   </head>
   <body >
	<div class="list-group ">
  <a href="#" style="background-color:#1e90ff ;border-color:#1e90ff;" class="list-group-item active">
    Rechercher par :
  </a>
  <a href="rec/nom.php" class="list-group-item">Filter la Recherche par Votre Nom</a>
  <a href="rec/prenom.php" class="list-group-item">Ou bien filter la Recherche par Prénom</a>
  <a href="rec/mat.php" class="list-group-item">Rechercher par Votre Matricule </a>
  <a href="rec/ser.php" class="list-group-item">Rechercher par Votre Service d'emploi</a>
  <a href="rec/ce.php" class="list-group-item">Rechercher par Votre Code d'emploi </a>
  <a href="rec/div.php" class="list-group-item">Rechercher par Votre Division </a>
</div>
 <a href="main1.php"><i style="position: absolute; left: 94% ;top: 60px;font-size: 34px;" class="fas fa-home"></i></a>
<style type="text/css">
	.list-group{
		width: 700px;
		font-family: montserrat;
		font-size: 20px;
		position: absolute;
		top: 20%;
		left: 27%;
	}

</style>
</body>
</html>