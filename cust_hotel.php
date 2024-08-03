<?php
	include_once("db.php");
	
	if(isset($_POST['Cust_Loc']))
	{
   @extract($_POST);


	}	
	
/* create view hotefood as (select `h`.`hid` AS `hid`,`h`.`hname` AS `hname`,`h`.`ph` AS `ph`,`h`.`address` AS `address`,`h`.lname AS lname,`f`.`rate` AS `rate`,`h`.`loc` AS `loc`,`h`.`status` AS `status`,`h`.`pic` AS `pic`,`f`.`fid` AS `fid`,`f`.`price` AS `price` ,`f`.`foodpic` AS `foodpic`  `f`.`reviews` AS `reviews`  from (`tasteexplorer`.`food` `f` join `tasteexplorer`.`hotels` `h`) where `f`.`hid` = `h`.`hid`) */




function  add1($n)
{
if ($n<2) 
	{
	echo "<h2><font  color='#ff0000'>*</font></h2>";
	return;
	}
else if ($n<3) 
		{
	echo "<h2><font color='#ff0000'>**</font></h2>";
	return;
	}
else if ($n<4) 
		{
	echo "<h2><font  color='#ff0000'>***</font></h2>";
		return;
	}
	else
if ($n<5) 
		{
	echo "<h2><font  color='#ff0000'>****</font></h2>";
		return;
	}
	else
if ($n<6) 
		{
	echo "<h2><font  color='#ff0000'>*****</font></h2>";
		return;
	}

}
	
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="fYpvwC9r64pptNrUjbVuAKMy6dHbWzF3rLGcMxHs">
    <title>Cust Hotel Selection</title>

    <link rel="icon" type="image/png" href="image/favicon.png">


    <link rel="stylesheet" href="css/all.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css"
        href="css/toastr.min.css">

    
    <script src="assets/jquery-3.7.0.min.js"></script>
    <link href="css/select2.min.css" rel="stylesheet" />

    
    <script src="assets/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/frontendStyle.css">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="css/fancybox.css">
    
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <style>
    .sign-up {
        text-decoration: none;
        color: white;
    }

    .sign-up:hover {
        color: #ffffff;
    }

    .sign-in {
        text-decoration: none;
        color: white;
    }

    .sign-in:hover {
        color: #ffffff;
    }

    /* .timeSlot-btn {
        background-color: transparent;
        width: 100% !important;
        height: 50px;
        margin-right: 15px;
        border-radius: 30px;
        border: 1px solid #FF8305;
        outline: none;
        margin-top:20px;
    } */


    /* .selected {
         outline: 2px solid #800000;
         border-radius: 10px;
         position: relative;
         background-color: #800000;
         top:8px;
     }

     .selected::before {
         content: "";
         height: 28px;
         width: 28px;
         background-color: #800000;
         border-radius: 50%;
         font-family: "Font Awesome 5 pro";
         font-weight: 600;
         position: absolute;
         top: -10px;
         right: -10px;
     }

     .selected::after {
         content: "\f00c";
         font-family: "Font Awesome 5 pro";
         font-weight: 600;
         position: absolute;
         top: -6px !important;
         color: #fff;
         font-size: 13px;
         right: -2px;
     } */


    .selected {
        border: 2px solid #800000;
        border-radius: 12px;
        position: relative;
    }

    /* .selected::before {
        content: "";
        height: 28px;
        width: 28px;
        background-color: #ffffff;
        border-radius: 50%;
        font-family: "Font Awesome 5 pro";
        font-weight: 600;
        position: absolute;
        top: 8px;
        right: 9px;
    }

    .selected::after {
        content: "\f00c";
        font-family: "Font Awesome 5 pro";
        font-weight: 600;
        position: absolute;
        top: 13px !important;
        color: #800000;
        font-size: 13px;
        right: 16px;
    } */

    /* date picker css */
    .ui-widget.ui-widget-content {
        width: 100%;
        font-size: 20px;
        font-weight: 300;
        background-color: #efefef !important;
    }

    .hasDatepicker {
        width: 100%;

    }

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #0066ff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #e5e5e5;

}

.dropdown:hover .dropdown-content {
  display: block;}


/* Full-width input fields   */
 input[type=text],input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 0px solid #ffffff;
  box-sizing: 0px border-box;
}

</style>
    
    <link rel="modulepreload" href="d27f3c49.js" /><script type="module" src="assets/app-d27f3c49.js"></script>
 <!-- STEP 1: If you don't have jQuery on your page then use this line or one similar -->
<script type="text/javascript" src="./js/jquery-latest.min.js"></script>

<!-- STEP 2: Add this to your page or preferably to an external javascript file -->
<script type="text/javascript">

	//initialize the 3 popup css class names - create more if needed
	var matchClass=['popup1','popup2','popup3'];
	//Set your 3 basic sizes and other options for the class names above - create more if needed
	var popup1 = 'width=400,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup2 = 'width=800,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=50,top=50';
	var popup3 = 'width=1000,height=750,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';

	//The pop-up function
	function tfpop(){
			var x = 0;
			var popClass;
			//Cycle through the class names
			while(x < matchClass.length){
					popClass = "'."+matchClass[x]+"'";
					//Attach the clicks to the popup classes
					$(eval(popClass)).click(function() {
							//Get the destination URL and the class popup specs
							var popurl = $(this).attr('href');
							var popupSpecs = $(this).attr('class');
							//Create a "unique" name for the window using a random number
							var popupName = Math.floor(Math.random()*10000001);
							//Opens the pop-up window according to the specified specs
							newwindow=window.open(popurl,popupName,eval(popupSpecs));
							return false;
					});							
			x++;
			} 
	}
	
	//Wait until the page loads to call the function
	$(function() {
		tfpop();
	});
</script>


    <link rel="modulepreload" href="d27f3c49.js" /><script type="module" src="assets/app-d27f3c49.js"></script>
</head>

<body class="bg-theme">

    <header class="page-header">
    <div class="container">
        <div class="row px-0">
            <div class="col-lg-12 px-0">
                <div class="wrapper" id="menu-bar">
                    <div class="left-area col-lg-12 col-md-12 order-lg-1 order-2">
                        <a href="index.html" >
						 <img src="t2.png" alt="" width="50" height="50" class="img-fluid">
                            <img src="a1.png" alt="" width="100" height="100" class="img-fluid">
                             </a>
                        <div class="burger" id="burger">
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                        </div>
                        <span class="overlay">
                            <div class="close">
                                <i class="fas fa-times text-white"></i>
                            </div>
                        </span>
                        <nav class="navbar" id="navbar">
                          
                            <ul class="menu" id="menu">
                                <li class="menu-item"><a href="index.html" class="menu-link">
                                        <span>Home</span> </a></li>
                                   <li class="menu-item"><a href="aboutus.html" class="menu-link"> <span>About Us</span> </a>
                                </li>
     

                                <li class="menu-item"><a href="gallary.html" class="menu-link">
                                        <span>Gallery</span> </a>
                                </li>
  <!-- <li class="menu-item"><a href='' data-toggle='modal' data-target='#myModal21' class="menu-link">
                                        <span>About Us</span> </a>
                                </li>
 -->

                                <!-- <li class="menu-item"><a href="dreamlight.html/blogs" class="menu-link"> <span>Blog</span> -->
                                    </a></li>
             
                   <div class="dropdown">  <a href="http://localhost/tast_expo/cust_loc.php" class="menu-link"><span>User</span> </a>
	         
  </div>
                       
                            </ul>
                        </nav>
                                          
                             </a>
                        <input type="hidden" value="" name="" id="location_idd">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



     

                   
					
<table  width="100%">

	  <thead  style ='background-color: #04AA6D;'>
        <th ><font color="ffffff">#</font></th>
		 <th ><font color="ffffff">Photo</font></th>
		 <th ><font color="ffffff">Hotel Name</font></th>
		 <th><font color="ffffff">Address</font></th>
		  <th ><font color="ffffff">Rating</font></th>
			 <th ><font color="ffffff">Reviews</font></th>
			<th ><font color="ffffff">Loc</font></th>	
			
        <th><font color="ffffff">Status</font></th>
		 <th align="center"><font color="ffffff">#</font></th>
      </thead>


    <?php 
	$i=1;

	//print("<h1>$fid : dfdfgdfgdfgd</h1>");
	//	print("<h1>$loc : dfdfgdfgdfgd</h1>");
	$fsql1=mysqli_query($con,"SELECT  * FROM  food  where fid='$fid' ");

	 	while($h_arr1=mysqli_fetch_assoc($fsql1))	
		{
	//print("<h1>$h_arr1[hid] : dfdfgdfgdfgd</h1>");
	$fsql=mysqli_query($con,"SELECT  * FROM  hotels  where  hid='$h_arr1[hid]' and lname='$loc' ");
	while($h_arr=mysqli_fetch_assoc($fsql))	
			{  		

				?>

<tr>
 

<td>		<div class="col-md-6 p-3">
                           <?php  print" $i ";?> 
                          </div></td>

						  <td>		<div class="col-md-6 p-3">
                           <?php  print" <img src='$h_arr[pic]' width='150' height='150' border='0' alt=''>  ";?> 
                          </div></td>

						  <td>		<div class="col-md-6 p-3">
                           <?php  print" $h_arr[hname]  ";?> 
                          </div></td>
  
			<td><div class="col-md-6 p-3">
                      <?php  print" $h_arr[address]  ";?> 
                      </div></td>

					 <td><div class="col-md-6 p-3">
                      <?php
						 echo $h_arr['rate'] ;
					   echo "<br>";
					         add1($h_arr['rate']);
								//print" $h_arr[rate] ";
                        ?>
                      </div></td> 
					  
					  
					   <td ><div class="col-md-6 p-3"><?php echo "<a href=reviews.php?hid=$h_arr1[hid]  class='popup2'><font  color='#00000'>$h_arr[reviews] </font></a>"?></div></td>
					   
					   
                      
					    <td><div class="col-md-6 p-3">
					<?php echo "<a href=$h_arr[loc]  class='popup2'><font  color='#00000'>Loc Map</font></a>"  ?>
                      </div></td>

					    <td><div class="col-md-6 p-3">
                      <?php  print" $h_arr[status]  ";?> 
                      </div></td>
	
	                         <td>   
		<form class="row mb-3" method="POST" action="http://localhost/tast_expo/feedback.php">     					 
							 <?php

		print" <input type='hidden'   name='fid' value='$fid'>";
		print" <input type='hidden'   name='hid' value='$h_arr[hid]'>";
							print" <div class='col-md-6 p-3'>";
                             print"<input class='btn px-4 py-3 btn-outline-success' type='submit' name='feedback' value= 'Feed Back'>";
                           print" </div>";
						  ?> 
						  
		</form>				  
						  </td>

    
</tr>
<?php
		$i=$i+1;
	
			}
		}?>

</table>
	
	 <footer class="footer">
    <div class="container">
        <div class="row">



            <div class="col-lg-12 text-center my-1">
 	 <img src="t2.png" alt="" width="50" height="50" class="img-fluid">
                            <img src="a5.png" alt="" width="100" height="100" class="img-fluid">
            </div>

            <div class="row my-4">
                <div class="col-lg-4 footer-item">
                    <h4><i class="fas fa-map-pin"></i> Taste Explorer</h4>
                    <p>
                   #1st Floor, G.G.Building,Opp.Canara Bank, Near Malnad Collage of Engineering , Hassan-573201.
                    </p>
                </div>
                <div class="col-lg-4 footer-item">
                    <h4><i class="far fa-phone-volume"></i> Contact Us</h4>
                    <p>
                        Call Us : <a href="tel:7026368879"> +91 9844438331</a>
                    </p>
                    <p>
                        Whatsapp Us : <a target="_blank" href="https://api.whatsapp.com/send?phone=+919632148246&amp;text=Hi, I would like to discuss further on the services offered by your company. Kindly Connect - Thanks"> +91 9844438331</a>
                    </p>

                    
                </div>
                <div class="col-lg-4 footer-item">
                    <h4>
                    <i class="fal fa-clock"></i>    
                    Working Hours</h4>
                    <p>
                        Mon-Fri: 09:00 AM to 10:00PM
                    </p>
                    <p>
                        Sat-Sun: 09:00 AM to 10:00PM
                    </p>

                </div>
            </div>


        </div>

        <div class="col-lg-12 quick-link">
            <ul>
                <li><a href="dreamlight.html">Home</a></li>
                <li><a href="dreamlight.html/book-now">Book Now</a></li>
                <li><a href="#gallaries">Gallery</a></li>
                <li><a href="http://localhost/tast_expo/cust_loc.php">User</a></li>

            </ul>
        </div>

    </div>
        <div class="container ">
        <div class="row">
            <div class="col-lg-6  pt-4">
                <p class="text-light-gray">© 2024  Ideal Computer Education  | All rights reserved</p>
            </div>
            <div class="col-lg-6 my-auto">
                <div class="social-media">
                    <a href="https://instagram.com/thebingecity?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

</footer>

    <script src="assets/jquery.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/owl.carousel.min.js"></script>
    <script src="assets/toastr.min.js"></script>
    <script src="assets/select2.min.js"></script>

    
    <script src="assets/1.12.1/jquery-ui.min.js"></script>

    <script src="assets/wow.min.js" crossorigin="anonymous"></script>

    
    <script src="assets/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {});
    </script>



    <script>
        new WOW().init(

        );
    </script>

    <script>
        const navbarMenu = document.getElementById("navbar");
        const burgerMenu = document.getElementById("burger");
        const overlayMenu = document.querySelector(".overlay");

        // Show and Hide Navbar Function
        const toggleMenu = () => {
            navbarMenu.classList.toggle("active");
            overlayMenu.classList.toggle("active");
        };

        // Collapsible Mobile Submenu Function
        const collapseSubMenu = () => {
            navbarMenu
                .querySelector(".menu-dropdown.active .submenu")
                .removeAttribute("style");
            navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
        };

        // Toggle Mobile Submenu Function
        const toggleSubMenu = (e) => {
            if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 992) {
                e.preventDefault();
                const menuDropdown = e.target.parentElement;

                // If Dropdown is Expanded, then Collapse It
                if (menuDropdown.classList.contains("active")) {
                    collapseSubMenu();
                } else {
                    // Collapse Existing Expanded Dropdown
                    if (navbarMenu.querySelector(".menu-dropdown.active")) {
                        collapseSubMenu();
                    }

                    // Expanded the New Dropdown
                    menuDropdown.classList.add("active");
                    const subMenu = menuDropdown.querySelector(".submenu");
                    subMenu.style.maxHeight = subMenu.scrollHeight + "px";
                }
            }
        };

        // Fixed Resize Window Function
        const resizeWindow = () => {
            if (window.innerWidth > 992) {
                if (navbarMenu.classList.contains("active")) {
                    toggleMenu();
                }
                if (navbarMenu.querySelector(".menu-dropdown.active")) {
                    collapseSubMenu();
                }
            }
        };

        // Initialize Event Listeners
        burgerMenu.addEventListener("click", toggleMenu);
        overlayMenu.addEventListener("click", toggleMenu);
        navbarMenu.addEventListener("click", toggleSubMenu);
        window.addEventListener("resize", resizeWindow);
    </script>

    <script>
        const header = document.querySelector(".page-header");
        const toggleClass = "is-sticky";

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 100) {
                header.classList.add(toggleClass);
            } else {
                header.classList.remove(toggleClass);
            }
        });
    </script>


    <script>
        $('#banner')
            .owlCarousel({
                loop: true,
                margin: 50,
                nav: true,
                dots: false,
                autoplay: 3000,
                smartSpeed: 700,
                navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>",
                    "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
    </script>

    <script>
        $('.testimonial-slide')

            .owlCarousel({
                loop: false,
                margin: 50,
                nav: true,
                dots: false,
                autoplay: 3000,
                smartSpeed: 700,
                navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>",
                    "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"
                ],
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    768: {
                        items: 4
                    },
                    1000: {
                        items: 6
                    }
                }
            });
    </script>

    
    <script>
        
        
        
            </script>

    <script>
        $("#cities").on('change', function() {
            console.log('city', this.value);
            var city_id = this.value;
            window.location.href = "dreamlight.html" + '/book-now/' +
                "?city_id=" + city_id;

            localStorage.setItem('city_id', city_id);
        });
    </script>

    <script>
        $('.testimonial-slide-1')
            .owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: 3000,
                smartSpeed: 700,
                navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>",
                    "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
    </script>

<!-------- About Us --------------------->
	<div class="modal fade" id="myModal21" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" ></button> 


<table border="0" width="100%">
							        <tr>	
									<td  align ="center"><font size="5" ><span class='label label-primary'>Welcome to [Taste Explorer] /span></font></td>			
							</tr>
							
				</table>
		      </div>
	<div class="modal-body">		
	<center>
	<img src="asset_image/image1.jpg" width="500" height="190" border="0" alt="">
	<!-- <center><img src="avk.png" width="180" height="180" border="0" alt="logo"></center> -->
	<center><div id='myDIV1'><strong>-Welcome to [Taste Explorer] –</strong></div></center>
<p align="justify" style text-indent: 12px; margin: 0%; margin-top: 0%; margin-bottom: 0%';>
		 your ultimate guide to discovering the best dining experiences around!           this is the project done by Vishal Miranda , Shreelakshmi M.P , Yogeesh M , Srinath Gowda S.M.                                      Our Mission
 we are passionate about food and believe that dining is more than just a meal; it’s an experience. Our mission is to connect food lovers with the finest restaurants, hidden gems, and culinary delights in every city.                                             
Why Choose Us?
User-Friendly Interface : Our website is designed with you in mind. Navigate easily and find what you need with just a few clicks.
Community-Driven : Join our community of food lovers! Share your dining experiences, write reviews, and connect with fellow enthusiasts.

Thank you for choosing Taste Explorer as your go-to restaurant finder. Bon appétit!</p>

 <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>


						</div>				  							  
					    </div>
					  </div>
					</div>
<!-------- About Us ends --------------------->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js1/jquery.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/jquery.prettyPhoto.js"></script>
    <script src="js1/jquery.isotope.min.js"></script>   
    <script src="js1/wow.min.js"></script>
	<script src="js1/main.js"></script>
    </body>

</html>