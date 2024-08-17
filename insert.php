<?php
include 'header.php';
?>
<div><h3><b><a href="admin.php">Go To Dashboard</a></b></h3></div>
<div class="admintitle">
	<br><br><br>
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<table style="width:70%;margin-top:70" align="center" border="1" bgcolor="darkpink">
			<tr><th colspan="2"><h2>Loan Management Of DESU</h2></th></tr>
			<tr><th>A_id</th><td><input type="text" name="aid" placeholder="Enter id Number" required=""> </td></tr>
			<tr><th>ACCOUNT NUMBER</th><td><input type="text" name="accountno" placeholder="Enter Account Number" required=""> </td></tr>
			<tr><th>CNAME</th><td><input type="text" name="name" placeholder="Enter Name of the Customer" required=""> </td></tr>
			<tr><th>ADDRESS</th><td><input type="text" name="address" placeholder="Enter Address of the Customer" required=""> </td></tr>
			<tr><th>CONTACT</th><td><input type="text" name="contact" placeholder="Enter Contact Number" required=""></td></tr>
			<tr><th>LOAN</th><td><input type="text" name="loan" placeholder="Enter Loan" required=""> </td></tr>
			<tr><th>AADHARNO</th><td><input type="text" name="adharno" placeholder="Enter Aadhar Number" required=""></td></tr>
			<tr><th colspan="2"><input type="submit"  name="submit" value="submit"></th></tr>
		</table>
	</form>
</div>

<?php 
if (isset($_POST['submit'])){
	 include 'dbcon.php';
 	$aid=$_POST['aid'];
	$accountno=$_POST['accountno'];
	$cname=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$loan=$_POST['loan'];
	$aadharno=$_POST['adharno'];

	$qry="INSERT INTO `customer`(`aid`, `account-no`, `c-name`, `address`, `contact-no`, `loan`, `Aadhar-no`) VALUES ('$aid','$accountno','$cname','$address','$contact','$loan','$aadharno')";
	
	$run=mysqli_query($con,$qry);
	if ($run==true) {
		{
			?>
			<script>
				alert('Data Inserted Successfully.');
			</script>
			<?php 
		}
	}
}
?>