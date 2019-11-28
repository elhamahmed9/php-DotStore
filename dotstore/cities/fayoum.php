<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
     , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fayoum</title>
	<link href="css/animate.css" rel="stylesheet" type="text/css" />
	<link href="css/hover.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
   
   </head>
 

<script>	
	function changing(x) {
		
		  var z = document.getElementById("image2");
		z.src = x.src;
		}
	
	function readmore(){
		
		var dots = document.getElementById("dots");
		var moretext = document.getElementById("more");
		var btntext = document.getElementById("btnmore");
		
		if(btntext.value == 'Show More'){
			
			btntext.value = "Show Less";
			dots.style.display = "none";
			moretext.style.display = "inline";
			}
		
		else{
			
			
			btntext.value = "Show More";
			dots.style.display = "inline";
			moretext.style.display = "none";
			
			
			}
		
		}
		
		//third fun
		 
		function popupfun(){
			var x = document.getElementById("popid");
			if(x.style.border!==none){
				x.style.bordr=none;
				
				}
			



        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    
			}

</script>



<body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#"> <img src="../images/logo.png"  style="  width: 128px;  margin-left: 130px;"></a>
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
          <a class="dropdown-item" href="../cities/aswan.php">cairo</a>
          <a class="dropdown-item" href="../cities/cairo.php">aswan</a>
          <a class="dropdown-item" href="../cities/fayoum.php">marsa matroh</a>
          <a class="dropdown-item" href="../cities/marsamtro7.php">fayoum</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact.php">CONTACT US</a>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link " href="../my_account.php" >
        MY ACCOUNT
        </a>
        </li>
      <li><a href="../cart.php"><i class="fa fa-search icon" style="color:#fff; padding-right:20px; padding-top:15px; padding-left:20px;"></i></a></li>
        <li><a href="#"><i class="fa fa-opencart icon " style="color:#fff;  padding-top:15px;"></i></a></li>
    </ul>
  </div>
</nav>

      <div class="container-fluid">

        <div class="row">
        

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id="imgfa">
        
       
        </div>
        
        </div>
        </div>
        <!--end img-->
    

<div class="container">
  
    <div class="row cairo align-items-center justify-content-start">
        <div class="offset-md-1 col-md-11">
          <br>
        <h2 class="glow">
         Fayoum
          </h2>
          </div>
          


    </div>
    <div class="row justify-content-center align-items-start" style="padding-top:100px;">
        <div class="col-md-4 col-md-offset-2 col-xs-12  " id="animate1" style="clear-both">
          <div class="row justify-content-end align-items-center ">
        <p>Located 90 km from the capital city of Cairo, only an hour and 15 minutes drive, with a year round moderate weather, is one of Egypt’s 7 oases. Home to several attractions from different eras from Pharaonic, Greco-Roman, Coptic and Islamic, to sand dunes, palm trees, lakes and valleys, wild animals, bird species. It’s a land of unspoiled nature & rich history, a place worth discovering!
           
             <span id="dots">.................. .</span>   <span id="more">Most Popular Attractions
Wadi El-7itan (Valley of Whales) Protected Area
is a UNESCO World Heritage site, a valley that was more than a million years ago a sea with a wide variety of marine life. It now contains fossils & skeletons of now extinct whales, along with rock formations that are best enjoyed at break of dawn. There is a Wadi El-7itan museum located near Garet Gohannam north-west of Wadi El-Rayan that has hundreds of skeletons of now extinct whales as well.
            </span>
            <br /> 


             </p>

<div class="flex-container">

           



            <div class="container" >

              <input type="button" value="Show More" id="btnmore" onClick="readmore()" />

             <div class="row justify-content-end align-items-start marginmodal">
              <!-- Trigger the modal with a button -->
              <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"><i class="fa fa-map-marker map" style="font-size:30px; "> <span >location</span> </i>
              
              </button>
            
              <!-- Modal -->

              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button id="mybutton" type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Fayoum</h4>
                    </div>
                    <div class="modal-body">
                     <iframe   style="max-width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27832.202573197595!2d30.82477685592035!3d29.310932879442287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1459792fa8bf0013%3A0xa698b3d528236f63!2sFaiyum%2C%20Qesm%20Al%20Fayoum%2C%20Faiyum%2C%20Faiyum%20Governorate!5e0!3m2!1sen!2seg!4v1570195528527!5m2!1sen!2seg" width="600" height="450" frameborder="0" " allowfullscreen=""></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
             </p>
            </div>
            



             


            </div>


             

          
        
        
           


          </div>
        </div><!--end of first p col-6 -->



        <div class="col-md-6 col-xs-12">
         <div class="lead"></div>
          <div class="row justify-content-end align-items-start">
<div class="col-md-offset-1 col-md-11 align-self fle " id="animate2">
           
  



  <img class="medium img-responsive" src="img/fayoum/Al-Fayoum-City.jpg" id="image2" style="display:inline-block"   value="img0"/>
           
        
  
  
  

  
  
  
  
  
  <section style="display:inline-block;">
            
            
            <img class="min1" src="img/fayoum/Al-Fayoum-City.jpg"     id="id1"      value="img1"    onclick="changing(this);"/>
            <img class="min1" src="img/fayoum/fayom2.jpg"   id="id2"   	  value="img2"	onclick="changing(this);"/>
            <img class="min1" src="img/fayoum/oasis-fayoum.jpg"   		id="id3"      value="img3"	onclick="changing(this);"/>
            
            </section>
          </div>
          </div>
            </div><!-- end of second medium pic col-6-->
        </div>
   

</div>
<br>
	 <script>
      (function() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('#animate1');
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('animate1');
        
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  init();
  checkPosition();
})();
      








(function() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('#animate2');
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('animate2');
        
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  init();
  checkPosition();
})();
      

      </script>






    <script src="js/jquery-3.4.1.min (1).js" ></script>

      <script src="js/popper.min.js" ></script>
      <script src="js/bootstrap.bundle.js" ></script>
      <footer class="footer" style="width: 100%;">
  <div class="container-fluid bottom_border">
  <div class="row">
  <div class=" col-sm-4 col-md col-sm-4  col-12 col">

  <img src="../images/logo.png"  style="  width: 128px; margin-top: 20px;">
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

</body>
</html>