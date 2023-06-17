<?php
$bilan = $_POST['bilan'];
$b=implode(",",$bilan);

?>
<html>
<head>
<title>Artisa Store for Moroccan Craft Products</title>
<link rel="shortcut icon" type="image/png" href="images\online-shop.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BStore for online Shopping" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php

$link = mysqli_connect("localhost","root","","service_medicale_ocp");
if(mysqli_connect_errno()){
    printf("echec de la connexion : %s\n",mysqli_connect_error());
    exit();
}
$query = 'INSERT INTO consultation(bilan) values ('$b')';
$result = mysqli_query($link,$query);
if ($result ){ ?> 
<div class="alert alert-success">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Congratulation !</strong> You have been registred the consultation in the Application.
</div>
<?php } 
else{ ?>
<div class="alert alert-danger">
  <i class="icon icon-check-circle icon-lg"></i>
  <strong>Error !!!</strong>Failure of registration</div>
<?php }
?>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
