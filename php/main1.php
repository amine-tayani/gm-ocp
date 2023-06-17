<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-MA">
   <head>
      <title>Ocp service medicale</title>
      <link rel="icon" type="image/jpg" href="../images/OCP-logo.jpg">
      <link rel="stylesheet" type="text/css" href="../css/main.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Abel|Cabin|Dosis|Hind|Josefin+Sans|Muli|PT+Sans|Quicksand|Raleway" rel="stylesheet">
      <meta charset="UTF-8">
   </head>
   <body>
         <div class="interface">
            <div class="left">
               <img class="main-logo" src="../images/doctor.png">
               <h1>Service medicale OCP</h1>
               

            </div>
            <div class="right">
               <a href="logout.php"><i style="position: absolute; left: 95% ;top: 20px;" class="fas fa-power-off"></i></a>
               <form method="POST" action="main.php">
               <p class="subtitle-1">Destinataire :</p>
               <select name="select_med">
                  <option>Nabil Charafi</option>
                  <option>Ahmed Mansouri</option>
                  <option>Abdellah Lesfar</option>
                  <option>Loubna Aderdour</option>
                  <option>Jihan Bouzrar</option>
                  <option>Khalid Benani</option>
                  <option>Hajar Qaryoun</option>
                  <option>Ahlam Jirari</option>
                  <option>Amine Hamri</option>
                  <option>Walid Taibi</option>
               </select>
               <p>Matricule :</p>
               <input type="text" name="mat">
               <p>Nom :</p>
               <input type="text" name="nom">
               <p>Prenom :</p>
               <input type="text" name="prenom">
               <p>Service :</p>
               <input type="text" name="service">
               <p>Code d'emploi :</p>
               <input type="text" name="codemp">
               <p >Division :</p>
               <input type="text" name="division">	
               <p>Debut :</p>
               <input type="text" name="start">
               <p>Fin :</p>
               <input type="text" name="end">
               
               <input type="submit" name="valider" value="valider">
               <input type="reset" name="Annuler" value="Annuler">
               <label class="container">Nfs
               <input type="checkbox" name="bilan[]" value="Nfs">
               <span class="checkmark"></span>
               </label>
               <label class="container">Uree
               <input type="checkbox" name="bilan[]" value="Uree">
               <span class="checkmark"></span>
               </label>
               <label class="container">Creatimine
               <input type="checkbox" name="bilan[]" value="Creatimine">
               <span class="checkmark"></span>
               </label>
               <label class="container">Glycemie a jeun
               <input type="checkbox" name="bilan[]" value="Glycemie a jeun">
               <span class="checkmark"></span>
               </label>
               <label class="container">HbA1c
               <input type="checkbox" name="bilan[]" value="HbA1c">
               <span class="checkmark"></span>
               </label>
               <label class="container">Ecg
               <input type="checkbox" name="bilan[]" value="Ecg">
               <span class="checkmark"></span>
               </label>
               <label class="container">Efr
               <input type="checkbox" name="bilan[]" value="Efr">
               <span class="checkmark"></span>
               </label>
                   <label class="container">Crp
               <input type="checkbox" name="bilan[]" value="Crp">
               <span class="checkmark"></span>
               </label>
               <label class="container">Asat
               <input type="checkbox" name="bilan[]" value="Asat">
               <span class="checkmark"></span>
               </label>
               <label class="container">Alat
               <input type="checkbox" name="bilan[]" value="Alat">
               <span class="checkmark"></span>
               </label>
               <label class="container">Sgot
               <input type="checkbox" name="bilan[]" value="Sgot">
               <span class="checkmark"></span>
               </label>
               <label class="container">Sgpt
               <input type="checkbox" name="bilan[]" value="Sgpt">
               <span class="checkmark"></span>
               </label>
               <label class="container">Ferritinémie
               <input type="checkbox" name="bilan[]" value="Ferritinémie">
               <span class="checkmark"></span>
               </label>
         </div>
    </div>
          </form>
        <div class="buttons" style="position: absolute;width:123px;left: 56%;bottom:20%">
               <i class="fas fa-plus" style="top:3%; left: 13px;"></i>
               <button><a style="color: #fff ;text-decoration: none" href="ajouter.php" >Ajouter</a></button>
               <i class="fas fa-bookmark" style="top:22%; left: 13px;"></i>
               <button><a style="color: #fff ;text-decoration: none" href="modifi.php" >Modifier</a></button>
               <i class="far fa-trash-alt" style="top:43%; left: 13px;"></i>
               <button><a  style="color: #fff ;text-decoration: none" href="supprim.php">Supprimer</a></button>
               <i class="fas fa-search" style="top:63%; left: 13px;"></i>
               <button><a style="color: #fff ;text-decoration: none" href="recherche.php">Rechercher</a></button>
               <i class="fas fa-history" style="top:83%; left: 13px;"></i>
               <button><a style="color: #fff ;text-decoration: none" href="historique.php">Historique</a></button>
         </div>
       

   </body>
</html>