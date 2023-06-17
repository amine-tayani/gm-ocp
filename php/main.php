<?php
session_start();
if(isset($_POST['bilan']) && isset($_POST['mat']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['service']) && isset($_POST['codemp']) && isset($_POST['division']) && isset($_POST['start']) && isset($_POST['end'])) {
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

$bil=$bilan[0];
for($i=1;$i<sizeof($bilan);$i++){
	$bil=$bil.','.$bilan[$i];
}


$query1 = "INSERT INTO bilan(bilan) VALUES('$bil')";
$result1 = mysqli_query($link,$query1); 
      
     
  $query5='SELECT * FroM bilan where bilan="'.$bil.'"';
$result5 = mysqli_query($link,$query5);
  while($donnees = mysqli_fetch_array($result5))
            { $bi = $donnees['id_bilan']; } 

$query2 = "INSERT INTO employe(matricule,nom,prenom,service,code_emploi,division) VALUES($mat,'$nom','$prenom','$service',$codemp,'$division')";
$result2 = mysqli_query($link,$query2);



$retour = 'SELECT COUNT(*) AS nbre_entrees FROM consultation WHERE debut = "'.$start.'" and  fin = "'.$end.'"';
$result1 = mysqli_query($link,$retour);
$donnees = mysqli_fetch_array($result1);
$nbre=$donnees['nbre_entrees'];

if($nbre==0){
  $max=$start;
   $query3 = "INSERT INTO consultation(destinataire,num_feuille,debut,fin,matricule,id_bilan,date_ajout,email) VALUES('$select_med',$start,$start,$end,$mat,$bi,NOW(),'".$_SESSION['email']."')";
  $result3 = mysqli_query($link,$query3);

}
else{
 $query7='SELECT MAX(num_feuille) as max_value FroM consultation where debut = "'.$start.'" and  fin = "'.$end.'"';
$result7 = mysqli_query($link,$query7);
  while($donnees = mysqli_fetch_array($result7))
            { $max = $donnees['max_value']; } 
$max++;

$query3 = "INSERT INTO consultation(destinataire,num_feuille,debut,fin,matricule,id_bilan,date_ajout,email) VALUES('$select_med',$max,$start,$end,$mat,$bi,NOW(),'".$_SESSION['email']."')";
  $result3 = mysqli_query($link,$query3);

}

if($result3 ){ ?>
<div class="alert alert-success">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Felicitations !</strong> Vous Avez Ajouter une consultation. Votre numéro de feuille est : <?php echo $max; ?>
</div>
<?php   } 
else{ ?>
<div class="alert alert-danger">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Error !</strong> Un problème lors de l'opération, Informations non correctes. Essayer à nouveau !!</div>
<?php } }
else{ ?>
<div class="Error">
  <strong>Error !</strong> Un champ non mentionné.</div>
<?php
}
?>
<script type="text/javascript">
  setTimeout(function(){
      window.location.href = 'main1.php';
},1900);
</script>
<style type="text/css">
 .Error{
    width:1200px;
    height:60px;
    margin: 10% auto;
    padding-top: 33px;
    padding-left: 40px;
    font-family: poppins;
    font-size: 20px;
    color: #721c24;
    padding-left: 52px;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    border-radius: .25rem;
 }
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