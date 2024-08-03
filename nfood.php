
<?php
	include_once("db.php");


	//***********************************************************************************

 $dsql=mysqli_query($con,"SELECT  max(id) as 'max'  FROM items ");
        $d_arr=mysqli_fetch_assoc($dsql);
		$id1=$d_arr['max']+1;
		$fid=(500+$id1);
		//****************************************************************************************************************
if(isset($_POST['fsave']))
	{
   @extract($_POST);


$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored))
	{

    $fimage = 'food/'.$filename;
    move_uploaded_file($filetemp, $fimage);
   $ins=mysqli_query($con,"insert into items (fid,group1,fcat,fname,fimage)values('$fid','$group1','$fcat','$fname','$fimage')")  or die(mysqli_query());
			if(!$ins)
				$dmsg="<font size='' color='#ffff66'>Food Details un sucessfully</font>";
			else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('$fname Food ins Successfully Login')
					 window.location.href='http://localhost/tast_expo/nfood.php';
								</SCRIPT>");
				
		}
			
	}
else
       $ins=mysqli_query($con,"insert into items (fid,group1,fcat,fname,fimage)values('$fid','$group1','$fcat','$fname','No Image')")  or die(mysqli_query());
			if(!$ins)
				$dmsg="<font size='' color='#ffff66'>Food  Details un sucessfully</font>";
			else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('$fname ins Successfully Login')
					 window.location.href='http://localhost/tast_expo/nfood.php';
								</SCRIPT>");
		}
		$id1=$id1+1;
		       $fid=(500+$id1);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="fYpvwC9r64pptNrUjbVuAKMy6dHbWzF3rLGcMxHs">
    <title>Food Login</title>

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
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  margin: 0px;
  float: right;
  width: 100%;
  padding: 0px;
  background: #141114;
  /*background: #008489;*/
  height: 35px;
  color: white;
  text-align: center;
}
  .img {
  border-radius: 50%;
  width: 30px;
  height: 30px;
}

  .img1 {
  width: 70px;
  height: 50px;
}


.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button5 {
  background-color: #ff6666; /* Green */
  border: none;
  color: white;
  padding: 5px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
        <link href="css3/main.css" rel="stylesheet" media="all">


 <!-- STEP 1: If you don't have jQuery on your page then use this line or one similar -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>



    <link rel="modulepreload" href="d27f3c49.js" /><script type="module" src="assets/app-d27f3c49.js"></script>

</head>
<body class="bg-theme">

    <header class="page-header">
    <div class="container">
        <div class="row px-0">
            <div class="col-lg-12 px-0">
                <div class="wrapper" id="menu-bar">
                    <div class="left-area col-lg-12 col-md-12 order-lg-1 order-2">
                        <a href="http://localhost/tast_expo/hotel_details.php" >
                       	 <img src="t2.png" alt="" width="50" height="50" class='img1' class="img-fluid">
                            <img src="a1.png" alt="" width="50" height="50" class='img1' class="img-fluid">
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
                                <li class="menu-item"><a href="http://localhost/tast_expo/hotel_details.php" class="menu-link">
                                        <span>Home</span> </a></li>
                                <li class="menu-item"><a href="http://localhost/tast_expo/hotel.php" class="menu-link"> <span>New Hotel
                                            </span> </a>
                                </li>
                           
                        
                   <div class="dropdown">  <a href="index.html" class="menu-link"><span>Logout</span> </a>
             </div>                     
                            </ul>
                        </nav>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>





<div class="item">
 <div class="ermsg"><center><span><font size="" color="#339900">
 <?php if(isset($dmsg)){ echo $dmsg; } ?></font></span></center></div>
  </div>
<br><br>
<div class="page-wrapper bg-blue p-t-80 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">

				<div class="row row-space">
                 <div class="input-group">
           <center><h2><u><font size="4" color="#000000">Adding New Food  Details  </font></u></h2></center>
                        </div></div>
               <br>

			                 <div class="input-group">
 <form action="" method="POST" enctype="multipart/form-data">
 	<input type="hidden"   name="fid" style="text-align:center;font-size: 15;font-weight: bold;"; value=<?php print("f$fid");?>>
<input type="hidden"   name="id1" style="text-align:center;font-size: 15;font-weight: bold;"; value=<?php print("$id1");?>>

	<?php	

   			print("<select class='input--style-1' style='border-color: #ffffff;width: 100%';  name='group1'  style='width: 100%; text-align: center; font: 1.5em sans-serif;'>");
			print("<option  value='Veg'>Veg ");
			print("<option  value='Non Veg'>Non Veg ");
			print("<option  value='Snacks  and Bevrages'>Snacks  and Bevrages "); 
			echo"</select>  ";		
			?>
                        </div>
                      <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Enter the category " name="fcat" style='width: 100%; font: 1.0em sans-serif;' required="required">
                          </div>
						   <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Enter the Food Item Name " name="fname" style='width: 100%; font: 1.0em sans-serif;'  required="required">
                          </div>

							<div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>


                         <div class="p-t-20">
	<center><button  class='button button2' name='fsave' >Add New Items</button></center>
                 
                        </div>
        
                </div>
            </div>
        </div>
    </div>

  </form>












	
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


   
<!--footer -->
	<div class="footer" > 
		<p>© 2024  All Rights Reserved |Design by Ideal Computer Education  <font size="2" color="">Ph : :9844438331</font></p>
	 </div> 
<!--/footer -->
</body>
</html>



