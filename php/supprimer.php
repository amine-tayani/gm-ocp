<?php 
session_start();
$fin=$_GET['fin'];
$debut=$_GET['debut'];
$mod = $_GET['var'];
$bil=$_GET['bil'];
?>
<html lang="fr-MA">
<head>
<head>
<title>Ocp service medicale</title>
  <link rel="icon" type="image/jpg" href="../images/OCP-logo.jpg">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet">
<meta charset="UTF-8">
</head>

</head>
<body style="background-image: url(../images/rawpixel-626041-unsplash.jpg);">

              <script language="JavaScript"> if(confirm("Voulez vous supprimer vraiment votre consultation !")){ document.location.href="<?php echo 'supprimer2.php?var='.
              $mod.'&debut='.$debut.'&fin='.$fin.'&bil='.$bil.'&mat='.$_GET['mat'].''; ?>" }        </script>

              <img src="../images/ocp.png" style=" width: 120px; margin: 30px;">
<h1 style="font-size: 50px;font-family:montserrat;text-align: center;position: absolute;top: 100px;left: 29%;color: #fff" >Suppression des consultations</h1>
<a href="main1.php"><i style="position: absolute; left: 90% ;top: 80px; color: #fff;font-size: 34px;" class="fas fa-home"></i></a>
 <table>


</body>
</html>