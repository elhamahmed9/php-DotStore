
<?php 
 $active='Home';
session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/css/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/css/hover.css">
    
  <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <link rel="stylesheet" type="text/css" href="styles/css/style.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body  >
   <!--start nav-->
  <div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top  ss">
 
            <a class="navbar-brand " href="#"><img  src="images/img/logo.png" class="logo d-none d-md-block"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          
              <div class="navbar-nav justify-content-end nav1 ">
                <a class="nav-item nav-link : active nava" href="index.php">HOME<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active nava" href="shop.php">SHOP</a>
                <a class="nav-item nav-link active nava" href="events/events.php">EVENTS</a>
                <li class="<?php if($active=='Cities') echo"active"; ?>">
                       <div class="dropdown">
                       <a href="#" class="nav-item nav-link active nava">CITIES</a>
                       
                       <div class="dropdown-content">
                        <a class="we" href="cities/aswan.php">ASWAN</a>
                         <a class="we" href="cities/cairo.php">CAIRO</a>
                         <a class="we" href="cities/fayoum.php">FAYOUM</a>
                         <a class="we" href="cities/marsamtro7.php">MASAMATROH</a>
                       </div>
                            </div>
                       
                       </li>
                <a class="nav-item nav-link active nava" href="contact.php">CONTACT</a>
                <a class="nav-item nav-link active nava" href="checkout.php">ACCOUNT</a>
               
                <a class="nav-item nav-link active nava" href="search.php"><i class="fa fa-search"></i></a>
                <a class="nav-item nav-link active nava" href="cart.php"><i class="fa fa-opencart "></i></a>
              </div>
            </div>
          </nav>
         <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="images/img/3-copy.jpg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption  ">
         
              <h3 class="h3-responsive d-none d-md-block">Transforming shopping into an experiance </h3>
          
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="images/img/3-copy.jpg"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption ">
            <h3 class="h3-responsive d-none d-md-block ">Transforming shopping into an experiance </h3>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="images/img/3-copy.jpg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption  ">
            <h3 class="h3-responsive d-none d-md-block">Transforming shopping into an experiance </h3>
        </div>
      </div>
    </div>
   
  </div>
  <!--/.Carousel Wrapper-->
    </div>
    

  </div>

	<!--end top section-->
  <!--space div-->
  <div id="hot" ><!-- #hot Begin -->
       
       <div class="box" ><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container" ><!-- container Begin -->
       
       <div class="row" ><!-- row Begin -->
          
          <?php 
           
           getPro();
           
           ?>
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
	<div style="height: 100px; background-color: #f0efed; "></div>
	<!--end space-->
	<!--start service-->
		<div class="container-fluid" style="background-color: #f0efed;">
  <div class="row">

    <div class="col-12 " style="text-align: center; ">
        <h1 style="margin-bottom: 10px;">Why choose us?</h1>
        <p> is set on the Nile River. At its heart is Tahrir Square and the vast Egyptian Museum</p>
    </div>
   
  </div>
  <div class="row" >
    <div class="col-12 col-lg-3 " style="text-align: center; margin-top: 70px; margin-bottom: 70px;">
        <i class="fa fa-truck hover" style="font-size:100px;  margin-bottom: 15px; "></i>
     
        <h3  >Free Shipping</h3>
				<p>Delivary All Over The World Free</p>
    </div>
    <div class="col-12 col-lg-3 " style="text-align: center; margin-top: 70px; margin-bottom: 70px; ">
        <i class="fa fa-headphones hover" style="font-size:100px;  margin-bottom: 15px;   "></i>
        
        <h3 >24/7 Online Help</h3>
				<p>Support Customer 24 Hours Helps</p>
    </div>
    <div class="col-12 col-lg-3 " style="text-align: center; margin-top: 70px; margin-bottom: 70px;">
        <i class="fa fa-money hover" style="font-size: 100px;  margin-bottom: 15px;    "></i>
       
        <h3  >Money Return</h3>
				<p>Delivary All Over The World Free</p>
    </div>
    <div class="col-12 col-lg-3 "style="text-align: center; margin-top: 70px; margin-bottom: 70px; ">
        <i class="fa fa-percent hover" style="font-size: 100px;  margin-bottom: 15px; "></i>
      
        <h3  >User Discount</h3>
        <p>Delivary All Over The World Free</p>
    </div>
  </div>
</div>
	<!--end service-->
	<!--space div-->
	<div style="height: 100px; background-color: #f0efed; "></div>
	<!--end space-->
	<!--startegypt-->
	<div class="container-fluid animated fadeInLeft" style="background-color: rgba(0, 0, 0, .5); ">
       
			<div class="row justify-content-center"  >
	  <div class="col-lg-2 col-12"></div>
		
			    <div class="col-12 col-lg-2 card hvr-bob " style="width: 18rem ; margin-top:40px;">
                                    
                                    <div class="card-body">
                                      <h5 class="card-title">cairo</h5>
                                      <p class="card-text">Cairo, Egypt’s sprawling capital, is set on the Nile River. At its heart is Tahrir Square and the vast Egyptian Museum</p>
                                      <a href="cities/cairo.php" class="btn btnc">for more details</a>
                                    </div>
					            
					            <img src="images/img/c.jpg" class="card-img-top" alt="cairo">
                                  
      
                        </div>
			
             
                    <div class="col-12 col-lg-2 card  hvr-bob" style="width: 18rem; margin-top:40px;   ">
                                    <img src="images/img/d.jpg" class="card-img-top" alt="damietta">
                                    <div class="card-body">
                                      <h5 class="card-title">fayoum</h5>
                                      <p class="card-text">fayoum is a port and the capital of the fayoum Governorate in Egypt, a former bishopric</p>
                                      <a href="cities/fayoum.php" class="btn btnc ">for more details</a>
                                    </div>
                                  
      
                        </div>
			

			
			
                    <div class="col-12 col-lg-2 card hvr-bob" style="width: 18rem;  margin-top:40px; ">
                                    
                                    <div class="card-body">
										
                                      <h5 class="card-title">Aswan</h5>
                                      <p class="card-text">Aswan is a city on the east bank of the Nile River in southern Egypt. It's on the site of ancient Thebes</p>
                                     <a href="cities/aswan.php" class="btn btnc">for more details</a>
                                    </div>
						
                                    <img src="images/img/l.jpg" class="card-img-top" alt="luxor">
                                  
      
                        </div>
			
			
                     <div class="col-12 col-lg-2  "> </div>
			
			
				<div class="col-12 col-lg-2  "> </div>
		
			    <div class="col-12 col-lg-2 card hvr-sink " style="width: 18rem; margin-bottom:40px; ">
                                    
                                    <div class="card-body">
                                      <h5 class="card-title">cairo</h5>
                                      <p class="card-text">Cairo, Egypt’s sprawling capital, is set on the Nile River. At its heart is Tahrir Square and the vast Egyptian Museum</p>
                                      <a href="#" class="btn btnc">for more details</a>
                                    </div>
					            
					            <img src="images/img/c.jpg" class="card-img-top" alt="cairo">
                                  
      
                        </div>
			
             
                    <div class="col-12 col-lg-2 card hvr-sink" style="width: 18rem; margin-bottom:40px;  ">
                                    <img src="images/img/d.jpg" class="card-img-top" alt="damietta">
                                    <div class="card-body">
                                      <h5 class="card-title">Marsamatroh</h5>
                                      <p class="card-text">Marsamatroh is a port and the capital of the Marsamatroh Governorate in Egypt, a former bishopric</p>
                                      <a href="cities/marsamtro7.php" class="btn btnc ">for more details</a>
                                    </div>
                                  
      
                        </div>
			

			
			
                    <div class="col-12 col-lg-2 card hvr-sink" style="width: 18rem; margin-bottom:40px;">
                                    
                                    <div class="card-body">
										 
                                      <h5 class="card-title">luxor</h5>
                                      <p class="card-text">Luxor is a city on the east bank of the Nile River in southern Egypt. It's on the site of ancient Thebes</p>
                                     <a href="#" class="btn btnc">for more details</a>
                                    </div>
						
                                    <img src="images/img/l.jpg" class="card-img-top" alt="luxor">
                                  
      
                        </div>
			
			
                     <div class="col-12 col-lg-2  "> </div>
			
			
      
      
           
			 </div>

  </div>
 <!--endegycard-->
	

    <!--timer-->
    <div class="container-fluid timer ">
    <div class="row">
    <div class="col-12 col-lg-2"></div>
    
      <div class=" col-12 col-lg-8  contdown  "> 
       <h3 id="head">Countdown to End discount :</h3>
         
            <ul id="ulcount">
     <li class="litimer animated bounceInRight"><span id="days"></span>days</li>
        <li class="litimer animated bounceInRight"><span id="hours"></span>Hours</li>
         <li class="litimer animated bounceInRight"><span id="minutes"></span>Minutes</li>
           
                                 </ul>
                                 
                                 <button type="button" class="btn  X hvr-buzz"> <a href="shop.php">Shop now </a></button>
                                 
                                  </div>
                                  <div class="col-12 col-lg-2"></div>
    
    </div>
 </div>
		<!--end timer-->
<!--footer starts from here-->
<footer class="footer" >
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-4 col-md col-sm-4  col-12 col">

  <img src="images/logo.png"  style="	width: 128px; margin-top: 20px;">
  <!--headin5_amrc-->
  <br>
  <br>
  <h5 style="color: #eabc2e ;">About Us</h5>
  <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  <h6 style="color: #eabc2e ;">Contact Us</h6>
  <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
  <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
  <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
  
  
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col" style="margin-top: 35px;">
  <h5 class="headin5_amrc col_white_amrc pt2"style="color: #eabc2e ;">Discover</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="http://webenlance.com">Image Rectoucing</a></li>
  <li><a href="http://webenlance.com">Clipping Path</a></li>
  <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
  <li><a href="http://webenlance.com">Ebay & Amazon</a></li>

  </ul>
  <!--footer_ul_amrc ends here-->
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col" style="margin-top: 35px;">
  <h5 class="headin5_amrc col_white_amrc pt2" style="color: #eabc2e ;">Quick links</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="http://webenlance.com" >Home </a></li>
  <li><a href="http://webenlance.com">About Us</a></li>
  <li><a href="http://webenlance.com">Shop</a></li>
  <li><a href="http://webenlance.com">Discove</a></li>
  <li><a href="http://webenlance.com">Contact Us</a></li>
 
  </ul>
  <!--footer_ul_amrc ends here-->
  </div>
  
  
  <div class=" col-sm-4 col-md  col-12 col"style="margin-top: 35px;">
  <h5 class="headin5_amrc col_white_amrc pt2"></h5>
  <!--headin5_amrc ends here-->
  
  <ul class="footer_ul2_amrc">
      <p style="font-weight: 900;">Subscribe To Our Newsteller</p>
      <div class="inputWithIcon">
       
          <input type="text" placeholder="Email">
          <i class="fa fa-envelope"></i>
        </div>
  <div class="">
    <button type="button" class="btn" style="background-color: #eabc2e;   margin-top: 10px; ">Subscribe</button>
  </div>
  </ul>
  <ul class="footer_ul2_amrc">
    <div> <a href="#" ><i class="fa fa-angle-double-up"  style="font-size: 50px; color:#eabc2e;   margin-left: 300px;"></i></a></div>
  </ul>
  <!--footer_ul2_amrc ends here-->
  </div>
  </div>
  </div>
  
  
  <div class="container">
 <br>
  <!--foote_bottom_ul_amrc ends here-->
  <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
  
  <ul class="social_footer_ul">
  <li><a href="http://www.google.com" ><i class="fa fa-facebook"></i></a></li>
  <li><a href="http://www.google.com"><i class="fa fa-twitter"></i></a></li>
  <li><a href="http://www.google.com"><i class="fa fa-linkedin"></i></a></li>
  <li><a href="http://www.google.com"><i class="fa fa-instagram"></i></a></li>
  </ul>
  <!--social_footer_ul ends here-->
  </div>
  
  </footer>

<script type="text/javascript"  src="js/js.js"></script>

<script type="text/javascript">
	
const header = $('.navbar');


$(window).on('scroll', function () {   
  if ($(window).scrollTop() > 0) { 
    header.addClass('scrolled'); 
    header.addClass('scrolled-a'); 
   
  } else { 
    header.removeClass('scrolled'); 
    header.removeClass('scrolled-a'); 
   
  
  } 
});
</script>
		
</body>
</html>