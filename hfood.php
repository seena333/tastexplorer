
<?php
	include_once("db.php");


		//****************************************************************************************************************
if(isset($_POST['esave']))
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

    $destinationfile = 'food/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);
   $ins=mysqli_query($con,"insert into food (hid,fid,price,foodpic)values('$hid','$fid','$price','$destinationfile')")  or die(mysqli_query());
			if(!$ins)
				$dmsg="<font size='' color='#ffff66'>Food Details un sucessfully</font>";
			else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('$fname Food ins Successfully Login')
					 window.location.href='hfood.php';
								</SCRIPT>");
				
		}
			
	}
else
       $ins=mysqli_query($con,"insert into food (hid,price,foodpic)values('$hid','$fid','$price','no.jpg')")  or die(mysqli_query());
			if(!$ins)
				$dmsg="<font size='' color='#ffff66'>Food  Details un sucessfully</font>";
			else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('$fname ins Successfully Login')
					 window.location.href='hfood.php';
								</SCRIPT>");
		}

	$docc=mysqli_query($con,"select * from hotels where hid='$hid' ");
$row1 = $docc->fetch_assoc();
	}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Admin||Event </title>
      <!-- Title Page-->
    <title>Add New Food Items</title>
 
    <!-- Main CSS-->
    <link href="css3/main.css" rel="stylesheet" media="all">
	<script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/arial.js"></script>
   <script type="text/javascript" src="js/cuf_run.js"></script>
<style>
body {
  background-color: #e0effe;
}
</style>
</head>









<?php $admin=(new DateTime())->format('Y-m-d');


if(isset($_POST['additem']))
	{
   @extract($_POST);

$docc=mysqli_query($con,"select * from hotels where hid='$hid' ");
$row1 = $docc->fetch_assoc();
	}
?>


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
           <center><h2><u><font size="4" color="#000000">Adding New Food  Details of  <?php print $row1['hname'] ;?></font></u></h2></center>
                        </div></div>
               <br>

			                 <div class="input-group">
 <form action=" " method="POST" enctype="multipart/form-data">
	<?php	
   print"<input type='hidden' name='hid' value='$hid'>";
			 $dos=mysqli_query($con,"select * from items ")  or die(mysqli_query());	
 			print("<select class='input--style-1' style='border-color: #ffffff;width: 100%';  name='fid' style='width: 100%; text-align: left; font: 0.95em sans-serif;'>");
            while($d_arr=mysqli_fetch_assoc($dos))	
			{
	$foodcheck=mysqli_query($con,"select * from food  where fid='$d_arr[fid]' and hid='$hid'");
	if(mysqli_num_rows($foodcheck)==0)
			print("<option  value='$d_arr[fid]'>$d_arr[fcat] / $d_arr[fname]&nbsp; ($d_arr[group1]) ");
			}
			echo"</select>  ";		
			?>


                        </div>


                      <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Enter the Price " name="price" required="required">
                          </div>


							<div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>


                         <div class="p-t-20">
	
                            <input type="submit" class="btn btn--radius btn--green" name='esave' >
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



</body>
</html>



