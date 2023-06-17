<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-MA">
   <head>
      <title>Ocp service medicale</title>
      <link rel="icon" type="image/jpg" href="../../images/OCP-logo.jpg">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Abel|Cabin|Dosis|Hind|Josefin+Sans|Muli|PT+Sans|Quicksand|Raleway" rel="stylesheet">
      <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <meta charset="UTF-8">
   </head>
   <body>
   <form method="post" action="ce1.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Faire une Recherche" name="ce">
          <div class="input-group-btn">
              <button class="btn btn-default" type="submit" name="valider">
              <i class="fas fa-search"></i>
              </button>
        </div>
        </div>
   </form>

<style type="text/css">
   
   body{
       background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
   }

  .input-group{
   width: 500px;
   transform: translate(100%,650%);
   font-family: poppins;
   font-size: 20px;
  }
  .form-control{
   font-size: 18px;
   padding: 23px;
   padding-left: 42px;
  }
 .btn{
   padding: 13px;
 }
i{
   font-size: 17px;
   color: #5f27cd;
}

</style> 
</body>
</html>