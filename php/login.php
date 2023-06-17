<?php
session_start();
$email = $_POST['email'];
$mopass = $_POST['mopass'];
$_SESSION['email']=$email;
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
$query = "select email,motpass from admin where email='$email' and motpass='$mopass';";
$result=mysqli_query($link,$query);
if (mysqli_num_rows($result))
{ 
$_SESSION['email']=$email;
$_SESSION['mopass']=$mopass;
  HEADER("location:main1.php");exit;

}else
{ ?>
<div class="alert alert-danger">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Login Error !</strong> Vous Avez Remplir des informations fausses ou non complètes . 
  <?php

}
?>
<script type="text/javascript">
	setTimeout(function(){
			window.location.href = '../login.html';
},2500);
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