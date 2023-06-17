<?php
session_start();
?>
<html>
<head>
<title>Ocp service medicale</title>
  <link rel="icon" type="image/jpg" href="../images/OCP-logo.jpg">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<meta charset="UTF-8">
</head>
<body style="background-image: url(../images/rawpixel-626041-unsplash.jpg);">
<?php

$link = mysqli_connect("localhost","root","","gestion_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}
$query = "select e.matricule,e.nom,e.prenom,e.service,e.code_emploi,e.division,c.destinataire,b.bilan,c.num_feuille,c.debut,c.fin,c.date_ajout
from employe e,consultation c,bilan b
where c.id_bilan=b.id_bilan  and c.matricule=e.matricule";
$result = mysqli_query($link,$query);
?>
<img src="../images/ocp.png" style=" width: 120px; margin: 30px;">
<h1 style="font-size: 50px;font-family:montserrat;text-align: center;position: absolute;top: 100px;left: 29%;color: #fff" >Historique des consultations</h1>
 <table>
  <tr>
    <th>Matricule</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Service</th>
    <th>Code Emploi</th>
    <th>Division</th>
    <th>Destinataire</th>
    <th>Bilan</th>
    <th>Numéro de feuille</th>
    <th>Début</th>
    <th>Fin</th>
    <th>Date d'ajout</th>
    <th>Modification</th>
    <th>Suppression</th>
        <th>Prise en charge</th>

    <th>Ordonnance</th>
   </tr>
            <?php 
            while($donnees = mysqli_fetch_array($result))
            {
            ?>
                <tr>
                    <td><?php echo $donnees['matricule']; ?></td>
                    <td><?php echo $donnees['nom']; ?></td>
                    <td><?php echo $donnees['prenom']; ?></td>
                    <td><?php echo $donnees['service']; ?></td>
                    <td><?php echo $donnees['code_emploi']; ?></td>
                    <td><?php echo $donnees['division']; ?></td>
                    <td><?php echo $donnees['destinataire']; ?></td>
                    <td><?php echo $donnees['bilan']; ?></td>
                    <td><?php echo $donnees['num_feuille']; ?></td>
                    <td><?php echo $donnees['debut']; ?></td>
                    <td><?php echo $donnees['fin']; ?></td>
                    <td><?php echo $donnees['date_ajout']; ?></td>
                    <td> <?php echo '<a style="color: #00cec9 ;text-decoration: none" href="modifier.php?var='.$donnees['num_feuille'].'&debut='.$donnees['debut'].'&fin='.$donnees['fin'].'&bil='.$donnees['bilan'].'&mat='.$donnees['matricule'].'">Modifier</a>'; ?> </td>
                    <td> <?php echo '<a style="color: #00cec9 ;text-decoration: none" href="supprimer.php?var='.$donnees['num_feuille'].'&debut='.$donnees['debut'].'&fin='.$donnees['fin'].'&bil='.$donnees['bilan'].'&mat='.$donnees['matricule'].'">Supprimer</a>'; ?> </td>
                      <td> <?php echo '<a style="color: #00cec9 ;text-decoration: none" href="../fpdf/pdf.php?des='.$donnees['destinataire'].'&prenom='.$donnees['prenom'].'&nom='.$donnees['nom'].'&mat='.$donnees['matricule'].'&ser='.$donnees['service'].'&cemp='.$donnees['code_emploi'].'&div='.$donnees['division'].'&bilan='.$donnees['bilan'].'&num='.$donnees['num_feuille'].'">Prise.pdf</a>'; ?> </td>
                      <td> <?php echo '<a style="color: #00cec9 ;text-decoration: none" href="../fpdf/ordonnance.php?prenom='.$donnees['prenom'].'&nom='.$donnees['nom'].'&mat='.$donnees['matricule'].'&ser='.$donnees['service'].'&div='.$donnees['division'].'&bilan='.$donnees['bilan'].'">Ordonnance.pdf</a>'; ?> </td>


                </tr>
            <?php
            }   
            ?>
        </table>
 <a href="main1.php"><i style="position: absolute; left: 95% ;top: 60px; color: #fff;font-size: 34px;" class="fas fa-home"></i></a>
      <style type="text/css">

      table {
    font-family:montserrat;
    border-collapse: collapse;
    width: 1580px;
    line-height: 15px;
    margin: 10px auto;

}
table td{
    background-color: #f2f2f2;
}

table td, table th {
    border: 1px solid #aaa;
    padding: 8px;
}
table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #55efc4;
    color: white;
}
</style>
</body>
</html>



  

