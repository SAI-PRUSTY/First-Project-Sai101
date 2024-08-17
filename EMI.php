<?php
include 'header.php';
// include 'admin/dashboardhead.php';
?>
<div><h3><b><a href="userdash.php">Go To Dashboard</a></b></h3></div>
<div class="userlogin/dashboard">
	<br>
   <form action="EMI.php" method="post" enctype="maltipart/form-data">
	    <table style="width:70%; margin-top:50px" align="center" border="3" bgcolor="skyblue" >

            <tr><th colspan="2"><h2>DESU loan</h2></th></tr>
             <tr><th>REGD NUMBER</th><td><input type="text" name="regdno" placeholder="Enter RegdNo." required=""></td></tr>
             <tr><th>price</th><td><input type="text" name="price" placeholder="Enter price" required=""></td></tr>
  	         <tr><th>rate of intrest</th><td><input type="text" name="sub2" placeholder="Enter ROI" required=""></td></tr>
             <tr><th>no of year</th><td><input type="text" name="sub3" placeholder="Enter NOY" required=""></td></tr>
            <tr><th colspan="2"><input style="background-color: darkseagreen;" type="submit" name="submit" value="submit"></th></tr>
  		
	   </table>	
	</form>
</div>
<br><br><br><br>
<?php
include 'footer.php';
?>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
	include ('dbcon.php');
	$regdno=$_POST['regdno'];
	$price=$_POST['price'];
	$roi=$_POST['sub2'];
	$noy=$_POST['sub3'];
	$roi= $roi / (12 * 100);    
    $noy = $noy * 12;
	$EMI= ($price * $roi * pow(1 + $roi, $noy))/(pow(1 + $roi, $noy) - 1); 
	$qry="INSERT INTO `emi`(`regdno`, `price`, `roi`, `noy`, `emi`) VALUES ('$regdno','$price','$roi','$noy','$EMI')";
$run=mysqli_query($con,$qry);
if($run == true)
{
	?>
	<script>
		alert('Data Inserted Successfully...');
	</script>
	<?php
}
else
{
	?>
	<script>
		alert(' Sorry! Data  Not Inserted ...');
	</script>
	<?php
}
}
?>