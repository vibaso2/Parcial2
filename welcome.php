<?php
include ('validate_log.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PokéBank Index</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PokéBank</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="retiro.php">Retiro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="deposito.php">Deposito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="transfer.php">Transferencias</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="img/profile.png" alt="">
        <div class="intro-text">
          <span class="name"><?php if($_SESSION['username']): ?>
            <p><h6>Hi,<?=$_SESSION['username']?></h6></p>
			<?php endif; ?> </span>
          <hr class="star-light">
          <span class="skills"></span>
        </div>
      </div>
    </header>



    <footer class="text-center">
       <div class="footer-above">
         <div class="container">
           <div class="row">
             <div class="footer-col col-md-4">
               <h3></h3>
               <p>
                 <br></p>
             </div>
             <div class="footer-col col-md-4">
               <h3>Banco ABC</h3>

               <ul class="list-inline">
                 <li class="list-inline-item">
                   <a class="btn-social btn-outline" href="#">
                     <i class="fa fa-fw fa-facebook"></i>
                   </a>
                 </li>
                 <li class="list-inline-item">
                   <a class="btn-social btn-outline" href="#">
                     <i class="fa fa-fw fa-google-plus"></i>
                   </a>
                 </li>
                 <li class="list-inline-item">
                   <a class="btn-social btn-outline" href="#">
                     <i class="fa fa-fw fa-twitter"></i>
                   </a>
                 </li>


               </ul>
             </div>

           </div>
         </div>
       </div>
       <div class="footer-below">
         <div class="container">
           <div class="row">
             <div class="col-lg-12">
               Copyright &copy; <br>
               Creado por: Victor Baso y Laura Centella 2017
             </div>
           </div>
         </div>
       </div>
     </footer>

  </body>

</html>
