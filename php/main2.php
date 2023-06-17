<?php
session_start();
$select_med = $_POST['select_med'];
$mat = $_POST['mat'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$service = $_POST['service'];
$codemp = $_POST['codemp'];
$division = $_POST['division'];
$start = $_POST['start'];
$end = $_POST['end'];
$bilan = $_POST['bilan'];
$ndef = $_POST['ndef'];
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

$link = mysqli_connect("localhost","root","","service_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}

$bil=$bilan[0];
for($i=1;$i<sizeof($bilan);$i++){
	$bil=$bil.','.$bilan[$i];
}
if ($ndef>=$start and $ndef<=$end){
$query = "INSERT INTO consultation (destinataire,matricule,nom,prenom,service,code_emploi,division,bilan,debut,fin,num_feuille) VALUES('$select_med',$mat,'$nom','$prenom','$service',$codemp,$division,'$bil',$start,$end,$ndef)";
$result = mysqli_query($link,$query); 
if($result){?>
<div class="alert alert-success">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Felicitations !</strong> Vous Avez Ajouter une consultation.
</div>
<?php } }
else{ ?>
<div class="alert alert-danger">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Error !</strong> un problème lors d'opération. essayer à nouveau </div>
<?php }
?>
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
