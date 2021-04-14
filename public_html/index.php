<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <script src="js/popup.js"></script> 
     
<!-- Custom styles for this template -->
<link href="css/navbar.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">   
<link rel="stylesheet" href="css/popup.css"> 
<link rel="stylesheet" href="css/navbar.css"> 

    <!-- <title>Document</title> -->
    <style>
      nav img{width:120px;}
	.nav-link{color:#444 !important;}
  .nav-item{margin:0 20px;}
  @media only screen and (max-width: 575px) {
    .leftaside{width:100% !important;}
    .rightaside
    {width:100% !important ;}
   
  }
  body{padding-bottom:0px !important;}
      </style>
   
</head>

<body>

   

    <nav class="navbar navbar-expand-sm navbar-light">
      <a class="navbar-brand" href="about.php"><img src="image/favicon.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recepie.php">Create Receipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ingredientss.php">Ingredient</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="recepies.php">All Receipe</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="aboutTeam.php">About Team</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
      </li>
         <span class="user">
          <?php
ob_start();
if (!empty($_SESSION['email'])) {
    echo $_SESSION['email'];
}
?></span>
        </ul>
        
      </div>

    </nav>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>