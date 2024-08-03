
<?php
	include_once("db.php");
if(isset($_POST['restatus'])){

@extract($_POST);
if($test=="Active")
 $array = $con->query("update hotels  set status='InActive'  where hid='$hid'");
else  
	 $array = $con->query("update hotels  set status='Active'  where hid='$hid'");



     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert(' $test changed Successfull  ');

								</SCRIPT>");

								//window.location.href='dreamlight.html';


}
  $array = $con->query("select * from hotels  order by id desc");


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
    <title>Admin Login</title>

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
  padding: 15px 20px;
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
                       	 <img src="t2.png" alt="" width="50" height="80" class='img1' class="img-fluid">
                            <img src="a1.png" alt="" width="200" height="150" class='img1' class="img-fluid">
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
                                <li class="menu-item"><a href="hotel.php" class="menu-link"> <span>New Hotel
                                            </span> </a>
                                </li>
                                <li class="menu-item"><a href="nfood.php" class="menu-link">
                                        <span>Food Catagary</span> </a>
                                </li>
                                <!-- <li class="menu-item"><a href="dreamlight.html/blogs" class="menu-link"> <span>Blog</span> -->
                                    </a></li>
             
                   <div class="dropdown">  <a href="http://localhost/tast_expo/index.html" class="menu-link"><span>Logout</span> </a>
	         
					 
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




<body >
 
	  <center><h5>Hotel Details are as follows </h5>
    <table   align="center" >   
	  <thead  style ='background-color: #04AA6D;'>
        <th ><font color="ffffff">#</font></th>
        <th ><font color="ffffff">Hid</font></th>
		 <th ><font color="ffffff">Photo</font></th>
		 <th ><font color="ffffff">Hname</font></th>
		  <th ><font color="ffffff">phone</font></th>
		    <th ><font color="ffffff">Address</font></th>
			<th ><font color="ffffff">Rate</font></th>
			<th ><font color="ffffff">Reviews</font></th>
			<th ><font color="ffffff">Loc</font></th>
		<th ><font color="ffffff">Food Details</font></th>
        <th><font color="ffffff">Status</font></th>
		 <th align="center"><font color="ffffff">#</font></th>
      </thead>
     <tbody>
	  <?php $i=0;
	    if(mysqli_num_rows($array)!=0)
		{
        while ($row = $array->fetch_assoc()) 
        {   

$foodcheck=mysqli_query($con,"select * from food  where hid='$row[hid]' and status='Active' ");
$c=mysqli_num_rows($foodcheck);
          $i=$i+1;   
		  ?>
     
          <tr align="center">
             <td><?php echo $i; ?></td>
             <td><?php echo $row['hid']; ?></td>
<?php print"<td><img src='$row[pic]'; class='img'></td>";   ?>
             <td ><?php echo $row['hname']; ?></td>
			 <td ><?php echo $row['ph']; ?></td>
			  <td ><?php echo $row['address']; ?></td>
             <td><?php echo $row['rate']."<br>"; add1($row['rate'])?></td>
			 <td ><?php echo "<a href=reviews.php?hid=$row[hid]  class='popup2'><font  color='#00000'>$row[reviews] </font></a>"?></td>
			  <td ><?php echo "<a href=$row[loc]  class='popup2'><font  color='#000000'>Loc Map</font></a>"  ?></td>
			 <td > <?php print "<a href='food.php?hid=$row[hid]'  class='popup2'><font size='' color='#000000'>$c Items</font></a>";  ?></td>

<td><?php echo $row['status']; ?></td>
			<form method="post" class="mt-4" action="">
<?php print"<input type='hidden' name='hid' value='$row[hid]'>";
			print"<input type='hidden' name='test' value='$row[status]'>";
		
				if ($row['status']=="Active") 
print"<td ><button  class='button button2' name='restatus' >Avaliable</button></td>";
else
print"<td ><button  class='button5 button2' name='restatus' >Not Avaliable</button></td>";

?>
	
</form> 

         </tr>
		<?php } 
		}
		else
		echo "<center><font size='3' color='#ff0000'>No Data Found....</font></center>";?>
			</tbody>
	
    </table>
   </center> 
</div>

   
<!--footer -->
	<div class="footer" > 
		<p>© 2024  All Rights Reserved |Design by vmsy  <font size="2" color="">Ph : :9844438331</font></p>
	 </div> 
<!--/footer -->

    </body>

</html>






















