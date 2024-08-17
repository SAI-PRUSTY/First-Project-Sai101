<?php
  include 'header.php';
  ?>
  <div class="style" >
  <style type="text/css">
    h2{
      background-color: blueviolet;
      
      color: lightgoldenrodyellow;
      font-size: 40;
    }
    .hdb{
      width: 100%;
      height:auto;
      background-image: url('image/loan14.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
</style>
 <section class="hdb" >
  <form action="register.php" method="post">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" >
            <div class="card-body p-5">
              <center><h2 class="text-uppercase text-center mb-5">Create an account</h2></center>

             <center> <form>

   <label for="name"><b>Regd. NO.</b></label>
    <input type="text" placeholder="Enter Your Registration no" name="regdno" required ><br><br><br><br>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required><br><br><br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" required><br><br><br><br>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required><br><br><br><br>

     <label for="pass"><b>contactno</b></label>
    <input type="contact-no" placeholder="Enter number" name="contact-no" required><br><br><br><br>
    <div>
      
   <button type="submit" name="submit" value="submit" class="btn" style="background-color: blue">Register</button></div>

    <label><b><center>Already a member?<a href="userlogin.php">Login here</a></center></b></label>
  </form>
</div>
</body>
</html>

              </form></center>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
</div>

<?php
if (isset($_POST['submit'])) 
{
    include 'dbcon.php';
    $regdno=$_POST['regdno'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $contactno=$_POST['contact-no'];
   
 $qry="INSERT INTO `customerlogin`(`regd`, `uname`, `email`, `psw`, `contact-no`) VALUES ('$regdno','$name','$email',' $password','$contactno')";
 
    $run=mysqli_query($con,$qry);
   

    if ($run==true) 
    {
        ?>
        <script>
            alert('Registration successfull...');
        </script>
        <?php
    }
   else
   {
     ?>
         <script>
            alert(' Registration Failed...');
        </script>
        <?php
    }
 }
?>

<?php
include 'footer.php';
?>