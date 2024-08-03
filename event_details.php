<?php
	//include_once("phead.php");
	include_once("db.php");
?>

<style>
#division4{
	height: 100px;
	width:  100px;
	border: 2px solid black;
	border-radius: 20px;
	background-color:#ffffff;
	margin: 30px;
	padding: 10px 30px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #ff0000;
  color: white;
  padding: 8px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 5%;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 5px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
input[type="text"]
{
    background: transparent;
    border: none;
   height: 20px;
  width: 100%;
  position: relative;
}

.btn {
  border: 1px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #04AA6D;
  color: #330000;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}
.img1 {
  border-radius: 50%;
  width: 60px;
  height: 60px;
}
.my-custom-scrollbar {
position: relative;
height: 480px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

</style>
<body background="images/backadmin.jpg">

<?php
	
$fname = (isset($_GET['fname']) ? $_GET['fname'] : '');


$docc=mysqli_query($con,"select * from decoration where fname='$fname' ");
$row1 = $docc->fetch_assoc();


 ?>
<br>
<center><h4><u><font size="" color="#000000">Event  Details of  <?php print $row1['fname'] ;?></font></u></h4></center>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
		<table width="100%" align="center">
			<tr>
				<th align = "center">#</th>
   
				<th align = "center">Catager</th>
				<th align = "center">Item</th>
			    <th align = "center">Price</th>		
			</tr>


			<?php
			$docc1=mysqli_query($con,"select * from decoration where fname='$fname' ");
				while ($row = $docc1->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['fname']."</td>";
			
                    echo "<td>".$row['cat']."</td>";
					echo "<td>".$row['item']."</td>";
					echo "<td>".$row['price']."</td>";
 echo "</tr>";
             ?>
 </form>
		<?php	}

			?>
		</table>
		
	</div>
     

		<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>
	
</body>
</html>