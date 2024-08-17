<?php
include 'dbcon.php';
$account_no=$_POST['accountno'];
$cname=$_POST['name'];
$Address=$_POST['address'];
$Contact_no=$_POST['contactno'];
$Loan=$_POST['loan'];
$aid=$_POST['aid'];
$Aadhar_no=$_POST['aadharno'];
echo $aid;

$qry="UPDATE `customer` SET `aid`='$aid', `account-no`='$account_no',`c-name`='$cname',`address`='$Address',`contact-no`='$Contact_no',`loan`='$Loan',`Aadhar-no`='$Aadhar_no' WHERE 'aid'='$aid' ";
$run=mysqli_query($con,$qry);

if($run==true)
{
	?>
	<script>
		alert('Data updated Successfully..');
		window.open('update.php ','_self');
		
	</script>
	<?php
}
else
{
	?>
	<script>
		alert('Data not updated ..');
		window.open('update.php','_self');
	</script>
	<?php
}
?>