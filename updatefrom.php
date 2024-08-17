<?php
include 'header.php';
?>
<?php
include 'dbcon.php';
$aid=$_GET['aid'];
//echo $sid;
$sql="SELECT * FROM `customer` WHERE `aid`='$aid'";
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);
//echo $data['id'];
?>
<div class="dashboard">
   <form action="updatedata.php" method="post" enctype="multipart/form-data">
   	<table style="width: 70%; margin-top: 40px" align="center" border="1" bgcolor="blue">
    <tr><th colspan="2"><h2>Loan Management of DESU finance</h2></th></tr>
    <tr><th>ACCOUNT NUMBER</th><td><input type="text" name="account-no" value=<?php echo $data['account-no'];?> required=""></td></tr>
    <tr><th>CNAME</th><td><input type="text" name="cname" value=<?php echo $data['c-name'];?> required=""></td></tr>
    <tr><th>ADDRESS</th><td><input type="text" name="address" value=<?php echo $data['address'];?> required=""></td></tr>
    <tr><th>CONTACT NUMBER</th><td><input type="text" name="contact-no" value=<?php echo $data['contact-no'];?> required=""></td></tr>
    <tr><th>LOAN</th><td><input type="text" name="loan" value=<?php echo $data['loan'];?> required=""></td></tr>
    <tr><th>AADHAR NUMBER</th><td><input type="text" name="Aadhar-no" value=<?php echo $data['Aadhar-no'];?> required=""></td></tr>
    <tr><th colspan="2"><input type="hidden" name="sid" value="<?php echo $data['aid'];?>" /><input type="submit" name="submit" value="submit"></th></tr>
   	</table>
   	
   </form>
	
</div> 