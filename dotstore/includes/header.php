<?php 
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/home.css">
     <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css"  href="styles/style.css">
      <link rel="stylesheet" type="text/css" href="styles/css/style.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="my_account.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">
                       <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                           </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <nav class="navbar navbar-inverse bg-dark ">
  <div class="container-fluid " style="height:70px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img  src="images/logo.png" style="width: 110px; margin-top: 5px; margin-left: 250px;"></a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav"  style=" margin-top: 5px; ">
        <li class="active"><a href="index.php">HOME</a></li>
         <li><a href="shop.php">SHOP</a></li>
        <li><a href="events/events.php">EVENTS</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CITIES<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cities/aswan.php">ASWAN</a></li>
            <li><a href="cities/cairo.php">CAIRO</a></li>
            <li><a href="cities/fayoum.php">FAYOUM</a></li>
            <li><a href="cities/marsamtro7.php">MARSAMATROH</a></li>
            
          </ul>
        </li>
        <li><a href="contact.php">CONTACT US</a></li>
         <li ><a  href="my_account.php">MY ACCOUNT</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style=" margin-top: 5px; margin-right: 250px;">
        <li><a href="#"><i class="fa fa-search"></i></a></li>
        <li><a href="cart.php"><i class="fa fa-opencart "></i></a></li>
      </ul>
    </div>
  </div>
</nav>
  

