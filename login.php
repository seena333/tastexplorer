

<?php

@include 'db.php';

if(isset($_POST['alogin']))
	{
@extract($_POST);

if ($usn=="admin" and $psw=="1234") {

    session_start();
	 $_SESSION['email'] = $usn;
         header('location:admin/');
}
else{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid username and password details.')
						window.location.href=adminlog.php';
								</SCRIPT>");
   }
}
/*----------------------------------------------*/


if(isset($_POST['login1']))
	{
@extract($_POST);

$select = " SELECT * FROM booking WHERE email = '$email' and psw = '$pass' ";

   $result = mysqli_query($con, $select);
session_start();
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

         $_SESSION['email'] = $row['email'];
 
         header('location:user/');
}
else{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid username and password details.')
						window.location.href='login_form.php';
								</SCRIPT>");
   }
}
/*----------------------------------------------*/
if(isset($_POST['reg'])){
@extract($_POST);
   $cname = mysqli_real_escape_string($con, $_POST['cname']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = ($_POST['pass']);
   $cpass = ($_POST['cpass']);
      $event = ($_POST['event']);

    //$ph = ($_POST['ph']);
	 $address = ($_POST['address']);
	  $bdate = ($_POST['bdate']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';
   }
else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO booking(bdate,cname, email, psw, event,address) VALUES('$bdate','$cname','$email','$pass','$event','$address')";
         mysqli_query($con, $insert);
     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Registration Successfull')
						window.location.href='login_form.php';
								</SCRIPT>");
         /*header('location:login_form.php');*/
      }
   }

}


/*----------------------------------------------*/
if(isset($_POST['book1'])){
@extract($_POST);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

  $insert = "INSERT INTO booking(fname, lname, email,phone, message) VALUES('$fname','$lname','$email','$phone','$message')";
         mysqli_query($con, $insert);
     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Booking Successfull')
						window.location.href='loc.php';
								</SCRIPT>");
}

/*----------------------------------------------*/
if(isset($_POST['book2'])){
@extract($_POST);
    $event_sel = mysqli_real_escape_string($con, $_POST['event_sel']);
	//$amt = mysqli_real_escape_string($con, $_POST['amt']);
  $insert = "update booking(edate,event_sel, amt) VALUES('$edate','$event_sel', $amt')";
         mysqli_query($con, $insert);
     echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Booking Successfull')
						window.location.href='login.php';
								</SCRIPT>");
}











?>