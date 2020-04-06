<?php include("functions.php");
session_start();
 ?>
 <html>
 <head>
 	<title>Home Page Section 1 </title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 	<link rel="stylesheet" type="text/css" href="Homepagesection.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">

 </style>
 </head>
 <body>
   <!-----header--->
 <div style="align-items:center;">
 <div class="navbar">
   <img src="imam logo.jpg" alt="logo1" >
   <img src="imam logo2.jpg" alt="logo2" style="margin-right:15%;" >
   <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==false) { ?>

   <a href="#MyProfile">MyProfile</a>
 <?php } ?>

   <a href="Homepagesection1.php">Home</a>
   <a href="Gpfile.php">Gp File</a>
   <img src="https://i.imgur.com/atzKUZU.png" alt="Graduation logo"style="width:60px ;height: 60px;">
   <a href="#AboutUs">About Us</a>
   <a href="mailto:cs.gp.f@imamu.edu.sa">Contact Us</a>
   <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true) { ?>
     <a href="/gp/forms/login.php">Login</a>
<?php } ?>
   </div>
 </div>
