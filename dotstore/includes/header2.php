<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/event.css">
	 <link rel="stylesheet" type="text/css" href="../styles/css/style.css">
     <link rel="stylesheet" type="text/css" href="../styles/style.css">
	
</head>

<body>
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btnc btn-sm">
               <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                   </a>
              
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6 "  ><!-- col-md-6 Begin -->
               
               <ul class="menu  " ><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="../my_account.php">My Account</a>
                   </li>
                   <li>
                       <a href="../cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                       <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='../checkout.php'> Login </a>";

                               }else{

                                echo " <a href='../logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                           </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="background-color: #000;">
  <a class="navbar-brand" href="#"> <img src="../images/logo.png"  style="	width: 128px;  margin-left: 130px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown" style="margin-right: 130px;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../shop.php">SHOP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../events/events.php">EVENTS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        CITIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../cities/aswan.php">ASWAN</a>
          <a class="dropdown-item" href="../cities/cairo.php">CAIRO</a>
          <a class="dropdown-item" href="../cities/fayoum.php">FAYOUM</a>
          <a class="dropdown-item" href="../cities/marsamtro7.php">MARSA MATRUH</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact.php">CONTACT US</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link " href="../my_account.php" >
        MY ACCOUNT
        </a>
       
      </li>
      <li><a href="#"><i class="fa fa-search icon" style="color:#fff; padding-right:20px; padding-top:15px; padding-left:20px;"></i></a></li>
        <li><a href="../cart.php"><i class="fa fa-opencart icon " style="color:#fff;  padding-top:15px;"></i></a></li>
    </ul>
  </div>
</nav>
