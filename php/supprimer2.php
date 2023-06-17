<?php
session_start();
$mod = $_GET['var'];
?>
<html lang="fr-MA">
<head>
<title>Ocp service medicale</title>
<link rel="shortcut icon" type="image/png" href="../images/OCP-logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
<?php

$link = mysqli_connect("localhost","root","","gestion_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}
$query1 = 'DELETE FROM bilan WHERE bilan="'.$_GET['bil'].'"';
$result1 = mysqli_query($link,$query1);

$query2 = 'DELETE FROM employe WHERE matricule="'.$_GET['mat'].'"';
$result2 = mysqli_query($link,$query2);

$query = 'DELETE FROM consultation WHERE num_feuille="'.$mod.'" and debut="'.$_GET['debut'].'" and fin="'.$_GET['fin'].'"';
$result = mysqli_query($link,$query);

if ($result && $result1 && $result2){ ?> 
<div class="alert alert-success">
<i class="fal fa-award"></i>
  <strong>Felicitations !</strong> Vous Avez supprimé votre consultation.
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
		font-family: poppins;
		font-size: 20px;
	}
</style>
</body>
</html>