<?php
include 'header.php';
?>
<div><h3><b><a href="admin.php">Go To Dashboard</a></b></h3></div>
<div class="dashboard">
  <form method="post" action="update.php" enctype="multipart/form-data">
    <table style="width:30%;margin-top:40px" align="center" border="1" bgcolor="lightgreen">
      <tr><th colspen="2" align="center"><h2>Loan Update</h2></th></tr>
      <tr><th>cname</th><td><input type="text" name="name" placeholder="Enter Name of the Loanee" required=""></td></tr>
      <tr><th>Address</th><td><input type="text" name="address" placeholder="Enter address" required=""></td></tr>
      <tr><th colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"> </th></tr>
    </table>
  </form>
</div>
<table align="center" width=80% border="2" style="margin-top: 10px">
  <tr style="background-color: lightgreen; color: red">
    <th>aid</th>
    <th>account-no</th>
    <th>cname</th>
    <th>Address</th>
    <th>Contact-no</th>
    <th>Loan</th>
    <th>Aadhar-no</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  if(isset($_POST['submit']))
  {
    include('dbcon.php');
    $cname=$_POST['name'];
    $Address=$_POST['address'];
    $sql="SELECT * FROM `customer` WHERE `c-name`='$cname' AND `address`='$Address' ";
    $run =mysqli_query($con,$sql);

     if(mysqli_num_rows($run)<1)
     {
    echo "<tr><td colspan='6'>No Records Found</td></tr>";
     }
     else
  {
    $count=0;
    while($data=mysqli_fetch_assoc($run))
        {
          $count++;

        ?>
        <tr style="background-color: lightgreen;">
          
          <td><?php echo $data['aid']?></td>
          <td><?php echo $data['account-no']?></td>
          <td><?php echo $data['c-name']?></td>
          <td><?php echo $data['address']?></td>
          <td><?php echo $data['contact-no']?></td>
          <td><?php echo $data['loan']?></td>
           <td><?php echo $data['Aadhar-no']?></td>
          

          <td><a href="updatefrom.php? aid=<?php echo $data['aid'];?>">Edit</a></td>
          <td><a href="deletefrom.php? aid=<?php echo $data['aid'];?>">Delete</a></td>
        </tr>
        <?php 
        }
          
}
}
         ?>
</table>

</body>
</html>