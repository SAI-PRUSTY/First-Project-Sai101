<?php
include 'header.php';
$aid=$_REQUEST['aid'];

echo $id;
include ('dbcon.php');
$qry="DELETE FROM `customer` WHERE `aid`='$aid'";
$run=mysqli_query($con,$qry);

if($run==true)
{
   ?>
  <script>
 alert('Data Deleted Successfully...');
 window.open('update.php','_self');
  </script>
<?php
}
?>