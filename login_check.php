<?php


include_once("db.php");

///*************************************************************************************************************************************************************************************************	
	//admin form Submission
	if(isset($_POST['teste_login']))
	{
		print("<h1><p>fsdfsdfsd</p></h1>");
		@extract($_POST);			//retriev ur information from form

		$asql=mysqli_query($con,"select *  from login where usn='$usn' and psw='$psw'") or die(mysqli_error());

		if(mysqli_num_rows($asql)==1)
		{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Login Succesfull..')
					window.location.href='http://localhost/tast_expo/hotel_details.php';
								</SCRIPT>");
		}
		else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid Admin details.')
					window.location.href='http://localhost/tast_expo/adminlog.php';
								</SCRIPT>");
			//$amsg="Login info is not Correct";
		}	
	}

///*************************************************************************************************************************************************************************************************

	
	if(isset($_POST['sub_userlog']))
	{
		@extract($_POST);
		
		echo $usn;
		echo $psw;
print"<br>";
		$usq1=mysqli_query($con,"select * from user where email='$usn' and psw='$psw' and status='InActive' ") or  die(mysqli_error());

		echo "gfdgdfgdfgdf dfdf ".mysqli_num_rows($usq1);

      if(mysqli_num_rows($usq1)==1)
		{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Aprovel is in Pending .. Waiting list..')
					 window.location.href='userlog.php';
								</SCRIPT>");

		}
else{
$usql=mysqli_query($con,"select * from user where email='$usn' and psw='$psw' and status='Active'") or  die(mysqli_error());
      session_start();
		if(mysqli_num_rows($usql)==1)
		{

			$_SESSION['email']=$usn;
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('User Login Succesfull';
								</SCRIPT>");
			header("location:user/");
		}
		else
		{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('User details invalid')
					window.location.href='userlog.php';
								</SCRIPT>");
			//$umsg="Login info is not Correct";window.location.href='./login1.html';
		}
}
	}
///*************************************************************************************************************************************************************************************************
		if(isset($_POST['	rev_save']))
	{

		print"<h2>dfgdfgdfgdfgdf</h2>";
		   @extract($_POST);
		
	}	

///*************************************************************************************************************************************************************************************************	
	//admin form Submission
	if(isset($_POST['doc_log']))
	{
		@extract($_POST);			//retriev ur information from form
		
		echo $uname;
		echo $psw;
		$asql=mysqli_query($con,"select * from doctor where email='$uname' and did='$psw'") or die(mysqli_error());
		echo mysqli_num_rows($asql);
		session_start();
		if(mysqli_num_rows($asql)==1)
		{
			echo $uname;
			$_SESSION['doc_email']=$uname;
			header("location:doctor/");		
		}
		else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid Admin details.')
					window.location.href='doctorlog.php';
								</SCRIPT>");

			//$amsg="Login info is not Correct";
		}	
	}

///*************************************************************************************************************************************************************************************************
	if(isset($_POST['regsave']))
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

    $filename1 = 'image/'.$filename;
    move_uploaded_file($filetemp, $filename1);
}
else
$filename='no.png';

 $ins=mysqli_query($con,"insert into user(pname,adate,fname,email,phone,psw,pic,note) values('$pname','$adate','$fname','$email','$phone','$psw','$filename','$note')")  or die(mysqli_query());
			if(!$ins)
			{
				
				
			}
			else
		{
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Net Pet Succesfully inserted')
                window.location.href='userlog.php';
						</SCRIPT>");

		}
			  
	}
	///*************************************************************************************************************************************************************************************************

	
	?>





