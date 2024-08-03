<?php
	   include_once("db.php");


		if(isset($_POST['feedback']))
	{
   @extract($_POST);
 

	}	
//***********************************************************************************************************************************************************************************************





	if(isset($_POST['revsave']))
	{

		   @extract($_POST);

   $rdate=(new DateTime())->format('Y-m-d');  
   
$ins=mysqli_query($con,"INSERT INTO `feedback`(`email`, `rdate`, `fid`, `hid`, `rate`, `review`) VALUES ( '$email', '$rdate', '$fid', '$hid', $rate,'$review')")  or die(mysqli_query()); 
mysqli_query($con," update food as f set f.rate=(select avg(rate) from feedback as fb where fb.fid=f.fid) ")  or die(mysqli_query()); 
mysqli_query($con," update hotels as f set f.rate=(select avg(rate) from feedback as fb where fb.hid=f.hid) ")  or die(mysqli_query()); 
mysqli_query($con," update hotels as f set f.reviews=(select count(rate) from feedback as fb where fb.hid=f.hid) ")  or die(mysqli_query()); 

     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert(' Thank You ... ');
					 window.location.href='http://localhost/tast_expo/index.html';
								</SCRIPT>");
}	

	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="fYpvwC9r64pptNrUjbVuAKMy6dHbWzF3rLGcMxHs">
    <title>Feed Back</title>

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
   
    
/* Full-width input fields   */
 input[type=text],input[type=password],input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 0px solid #ffffff;
  box-sizing: 0px border-box;
}

</style>
    


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



        <section class="packages-section-start pt-3 pb-5 overflow-hidden bg-white">
        <div class="container contact_us_page my-5">
            <div class="row">
                <div class="col-lg-12 px-lg-5 mb-4">
                    <h1 class="fw-bold"> Feedback :-</h1>
                </div>
                	<div class="col-lg-7 order-lg-1 order-2 col-md-12 px-lg-5 bg-white rounded-3">


       <form class="row mb-3" method="POST" action=""> 	<!-- http://localhost/tast_expo/cust_food.php -->

<input type="hidden"   name="hid"  value=<?php print("$hid");?>>
<?php $fid=strtolower($fid);  ?>
<input type="hidden"   name="fid"  value=<?php print("$fid");?>>

<table>
<tr>
	<td><input  type="email"  name="email"  placeholder="Enter the email id   : "required > </td>							   
</tr>
<tr>
	<td> 

	<table>
	<tr align="center">
		<td width="30%">Give  the Star Rating Here:</td>
		<td><input type="radio" name="rate" value="1"> One</td>
		<td><input type="radio" name="rate" value="2"> Two</td>
		<td><input type="radio" name="rate" value="3"> Three</td>
		<td><input type="radio" name="rate" value="4"> Four</td>
		<td><input type="radio" name="rate" value="5"> Five</td>
	</tr>
	</table>
            
          </td>
</tr>
<tr>
	<td><input required=""   placeholder="Write the Review Here (if Any)   : "  type="text"  name="review" > </td>							   
</tr>
<tr>
	<td>   <div class="col-md-6 p-3">

                           <input class="btn px-4 py-3 btn-outline-success" type="submit"   name='revsave' value="Submit" >
                 </div>
	</td>
</tr>
</table>      
                    </form>
                </div>


<!-- ************************************************************************************ -->


                <div class="col-lg-5 order-lg-2 order-1 col-md-12 aside py-lg-5">
                    <div class="d-flex flex-column px-0">
                        <ul class="m-0 p-0">
                            <li class="d-flex justify-content-start align-items-top mb-4">
                                <span class="info-icon d-flex align-items-top me-3 pt-2 fs-2">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                                <div class="info">
                                    <p class="mb-0">Call Us</p>
                                    <h6> <a href="tel:+9611362786">+91 9611362786</a> </h6>
                                </div>
                            </li>
                            <li class="d-flex justify-content-start align-items-top mb-4">
                                <span class="info-icon d-flex align-items-top me-3 fs-2">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                                <div class="info">
                                    <p class="mb-0">Whatsapp Us</p>
                                    <h6>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+919632148246&amp;text=Hi,%20I%20would%20like%20to%20discuss%20further%20on%20the%20services%20offered%20by%20your%20company.%20Kindly%20Connect%20-%20Thanks">
                                            +91 9611362786</a>

                                    </h6>
                                </div>
                            </li>
                            <li class="d-flex align-items-top r mb-4">
                                <span class="info-icon d-flex align-items-top me-3 fs-2">
                                    <i class="fas fa-envelope-open"></i>
                                </span>
                                <div class="info">
                                    <p class="mb-0">Mail Us</p>
                                    <h6> <a href="mailto:thebingecity@gmail.com">www.tasteexplorer.com</a> </h6>
                                </div>
                            </li>
                            <li class="d-flex justify-content-start align-items-top mb-4">
                                <span class="info-icon d-flex align-items-top me-3 fs-2">
                                    <i class="fas fa-map-pin"></i>
                                </span>
                                <div class="info">
                                    <p class="mb-0">Address</p>
                                    <h6> #Salgame Road,
                                        Malnad Collage of Engineering , Hassan-573201.</h6>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


    </section>




	
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