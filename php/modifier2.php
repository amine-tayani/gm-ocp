<?php
session_start();

$select_med = $_POST['select_med'];
$mat = $_POST['mat'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$service = $_POST['service'];
$codemp = $_POST['codemp'];
$division = $_POST['division'];
$start = $_GET['start'];
$end = $_GET['fin'];
$ndef = $_GET['ndef'];
$bilan = $_POST['bilan'];
$date_ajout = $_POST['date_ajout'];
?>
<!DOCTYPE html>
<html lang="fr-MA">
   <head>
      <title>Ocp service medicale</title>
      <link rel="icon" type="image/jpg" href="../images/OCP-logo.jpg">
      <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Abel|Cabin|Dosis|Hind|Josefin+Sans|Muli|PT+Sans|Quicksand|Raleway" rel="stylesheet">
      <meta charset="UTF-8">
   </head>
   <body>
<?php

$link = mysqli_connect("localhost","root","","gestion_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}
$query = 'UPDATE employe
SET nom = "'.$nom.'", prenom = "'.$prenom.'", service = "'.$service.'" , code_emploi = "'.$codemp.'" , division = "'.$division.'" , matricule = "'.$mat.'"
WHERE matricule="'.$_GET['mat'].'"';

$query1 = 'UPDATE bilan
SET bilan = "'.$bilan.'"
where bilan="'.$_GET['bil'].'"';

$id_bil='SELECT id_bilan FroM bilan where bilan="'.$_GET['bil'].'"';
$result4 = mysqli_query($link,$id_bil);
  while($donnees = mysqli_fetch_array($result4))
            { $bi = $donnees['id_bilan']; }          

$query2 = 'UPDATE consultation
SET destinataire = "'.$select_med.'",matricule = "'.$mat.'",date_ajout = "'.$date_ajout.'" 
WHERE matricule="'.$_GET['mat'].'" and num_feuille="'.$_GET['ndef'].'" and debut="'.$_GET['start'].'" and fin="'.$_GET['fin'].'"';

$result = mysqli_query($link,$query);
$result1 = mysqli_query($link,$query1);
$result2 = mysqli_query($link,$query2);

if ($result && $result1 && $result2 && $result4){ ?> 
<div class="alert alert-success">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Felicitations !</strong> Vous Avez modifier votre consultation.
</div>
<?php } 
else{ ?>
<div class="alert alert-danger">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Error !</strong> un problème lors d'opération. essayer à nouveau </div>
<?php }
?>
<script type="text/javascript">
  setTimeout(function(){
      window.location.href = 'main1.php';
},1900);
</script>
<style type="text/css">
	.alert{
		width:1200px;
		height:90px;
		margin: 10% auto;
		padding-top: 33px;
		padding-left: 40px;
		font-family: poppins;
		font-size: 20px;
	}

</style>
</body>
</html>