<?php
session_start();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mopass = $_POST['mopass'];
$confmot = $_POST['confmot'];
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
$query = "INSERT INTO admin(nom_d,prenom_d,motpass,email) VALUES('$nom','$prenom','$mopass','$email');";
$result = mysqli_query($link,$query);
if ($result && $mopass==$confmot){ 
	header("location:../login.html"); }
else{ ?>
<div class="alert alert-danger">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Error !!!</strong>Failure of registration</div>
<?php }
?>
<script type="text/javascript">
  setTimeout(function(){
      window.location.href = 'compte.html';
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
