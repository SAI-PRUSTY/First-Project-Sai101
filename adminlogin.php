<?php
session_start();
if(isset($_SESSION['aid']))
{
  header('location:admin.php');
}
?>

<?php
include 'header.php';
?>
<table>
  <tr><h1 align="center" style="background-color: red">WELCOME TO ADMIN PAGE</h1></tr>
<tr><h3 align="right" style="background-color: lightpink"><a href="home.php">Home</a></h3></tr>
</table>
 <style type="text/css">
    h2{
      background-color: blueviolet;
      
      color: lightgoldenrodyellow;
      font-size: 40;
    }
    .hbd{
      width: 100%;
      height:100vh;
      background-image: url('image/loan16.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
    </style>
  <div class="style" >
  

  
<section class="hbd" style="background-color:gray ">
<form action="adminlogin.php" method="post">
 <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" >
            <div class="card-body p-5">
    <h2 align="center" style="background-color: skyblue">Admin login</h2>
  <div class="container">
    <center><label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br><br></center>

    <center><label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br></center>

    <center><button type="submit" name="login">Login</button></center>
  </div></div></div></div></div></div></div>
</form>
</section>
</div>
<?php
include 'footer.php';
?>

<?php
 include 'dbcon.php';
  if (isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry= "SELECT * FROM `admin` WHERE `username`='$username' AND `apw`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if ($row<1) 
    {
      ?>
      <script > 
      alert('username or password mismatched');
      window.open('admin.php','_self');
    </script>
    <?php 
  }
  else
  {
    $data=mysqli_fetch_assoc($run);
    $id=$data['aid'];
    //echo "aid=".$id;
    session_start();
    $_SESSION['aid']=$id;
    header('location:admin.php');
  }
}
?>