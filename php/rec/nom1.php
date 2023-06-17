<?php

session_start();

$nom = $_POST['nom'];
?>
<!DOCTYPE html>
<html lang="fr-MA">
   <head>
      <title>Ocp service medicale</title>
      <link rel="icon" type="image/jpg" href="../../images/OCP-logo.jpg">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Abel|Cabin|Dosis|Hind|Josefin+Sans|Muli|PT+Sans|Quicksand|Raleway" rel="stylesheet">
      <meta charset="UTF-8">
   </head>
   <body style="background-image: url(../../images/rawpixel-626041-unsplash.jpg);">
<?php

$link = mysqli_connect("localhost","root","","gestion_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}
$query = 'select e.matricule,e.nom,e.prenom,e.service,e.code_emploi,e.division,c.destinataire,b.bilan,c.num_feuille,c.debut,c.fin
from employe e,consultation c,bilan b
where e.nom="'.$nom.'" and c.id_bilan=b.id_bilan  and c.matricule=e.matricule';
$result = mysqli_query($link,$query);
?>
<img src="../../images/ocp.png" style=" width: 120px; margin: 30px;">
<h1 style="font-size: 50px;font-family:montserrat;text-align: center;position: absolute;top: 100px;left: 29%;color: #fff" >Rechercher des consultations</h1>
<a href="../main1.php"><i style="position: absolute; left: 90% ;top: 80px; color: #fff;font-size: 34px;" class="fas fa-home"></i></a>

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
                   
                </tr>
            <?php
            }   
            ?>
        </table>
        

        <style type="text/css">
      table {
    font-family:montserrat;
    border-collapse: collapse;
    width: 1500px;
    line-height: 17px;
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