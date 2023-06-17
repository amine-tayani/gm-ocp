<?php
session_start(); 
$mod = $_GET['var'];
?>
<!DOCTYPE html>
<html lang="fr-MA">
   <head>
      <title>Ocp service medicale</title>
      <link rel="icon" type="image/jpg" href="../images/OCP-logo.jpg">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Abel|Cabin|Dosis|Hind|Josefin+Sans|Muli|PT+Sans|Quicksand|Raleway" rel="stylesheet">
      <meta charset="UTF-8">
   </head>
   <body style="background-image: url(../images/rawpixel-626041-unsplash.jpg);">
        <img src="../images/ocp.png" style=" width: 120px; margin: 30px;">

<?php

$link = mysqli_connect("localhost","root","","gestion_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}
$query = 'select e.matricule,e.nom,e.prenom,e.service,e.code_emploi,e.division,c.destinataire,b.bilan,c.num_feuille,c.debut,c.fin,c.date_ajout
from employe e,consultation c,bilan b
where c.id_bilan=b.id_bilan  and c.matricule=e.matricule and c.num_feuille="'.$_GET['var'].'" and c.debut="'.$_GET['debut'].'" and c.fin="'.$_GET['fin'].'"';
$result = mysqli_query($link,$query);
            while($donnees = mysqli_fetch_array($result))
            {
            ?>

<form action = "modifier2.php?ndef=<?php echo $donnees['num_feuille']; ?>&start=<?php echo $donnees['debut']; ?>&fin=<?php echo $donnees['fin']; ?>&mat=<?php echo $donnees['matricule']; ?>&bil=<?php echo $donnees['bilan']; ?>" method = "post">
  <p style="left: -40%;top: 20px;position: relative; color:#fff">Matricule :</p>
<input style="left: -40%;top:20px;" type= "text" name = "mat" value ="<?php echo $donnees['matricule']; ?>" />

<p style="left: -40%;top:20px;position: relative;color:#fff">Nom :</p>
<input style="left: -40%;top:20px;" type= "text" name = "nom" value ="<?php echo $donnees['nom']; ?>" />

<p style="left: -40%;top:20px;position: relative;color:#fff">Prenom :</p>
<input style="left:-40%;top:20px;" type= "text" name = "prenom" value ="<?php echo $donnees['prenom']; ?>" />

<p style="left: -40%;top:20px;position: relative;color:#fff">Service :</p>
<input style="left:-40%;top:20px;" type= "text" name = "service" value ="<?php echo $donnees['service']; ?>" />

<p style="right: -20%;bottom:350px;position: relative;color:#fff">Code d'emploi :</p>
<input style="right: -20%;bottom:352px;" type= "text" name = "codemp" value ="<?php echo $donnees['code_emploi']; ?>" />

<p style="right: -20%;bottom:600px;position: relative;color:#fff">Division :</p>
<input style="right: -20%;bottom:600px;" type= "text" name = "division" value ="<?php echo $donnees['division']; ?>" />

<p style="right: 10%;bottom:230px;position: relative;color:#fff">Destinataire :</p>
<input style="right: 10%;bottom:230px;" type= "text" name = "select_med" value ="<?php echo $donnees['destinataire']; ?>" />
<p style="right: -20%;bottom:600px;position: relative;color:#fff">Date d'ajout :</p>
<input style="right: -20%;bottom:600px;position: relative;" type= "date" name = "date_ajout" value ="<?php echo $donnees['date_ajout']; ?>" />

<p style="right: -20%;bottom:600px;position: relative;color:#fff">bilan :</p>
<input style="right: -20%;bottom:606px;" type="text" name = "bilan" value ="<?php echo $donnees['bilan']; ?>" />



<input class="sub" type = "submit" value = "modifier" />
</form>
 <a href="main1.php"><i style="position: absolute; left: 95% ;top: 60px; color: #fff;font-size: 34px;" class="fas fa-home"></i></a>
 <?php
            }   
            ?>

       <style type="text/css">

      .sub{
        position: relative;
        top:-500px;
        left: -10%;
      } 
      *{
       	font-family: poppins;
       }
    form{
    	position: absolute;
    	top:20px;
    	left:45%;
    }   
       	
     input[type=text]{
    width: 400px;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    position: relative;
}
     input[type=date]{
    width: 400px;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

input[type=submit] {
    width: 400px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transform: translate(-101%,170%);
    font-size: 19px;
}

input[type=submit]:hover {
    background-color: #45a049;
}
       </style>  
</body>
</html>