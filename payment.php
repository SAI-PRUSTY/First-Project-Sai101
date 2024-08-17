<?php
  include 'header.php';
  include 'navbar.php';
  ?>
  
  <!--<style type="text/css">
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
-->
<style type="text/css">
    .ppage{
        width: 100vw;
        height: 100vh;
        background-color: grey;
        
    }
    .heee{
        color:#fff;
        width: 60%;
        height: 50%;
        background-color: green;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%);

    }
</style>
  <!--
  <div class="style" >
<section class="hbd">
   <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" >
            <div class="card-body p-5">
  <h2><center>Payment</center></h2><br><br>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <img src="image/loan3.jpg" width="250" height="300">
    </div>
</div>
    <div class="col">
        <center><label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br><br></center>

    <center><label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br></center>

    <center><button type="submit">Login</button></center>
  </div>
    <center><span class="psw">Forgot <a href="#">password?</a></span>  </center>

  </div>
    <center><span class="psw">Forgot <a href="#">password?</a></span>  </center>
  </div></div></div></div></div></div>
</section>
</div>
<
-->
<div class=" container-fluid ppage">
    <div class="row heee p-1">
        <div class="col col-md-6" style="background-image: url('image/loan3.jpg');">
            
        </div>
           
        <div class="col col-md-6">

            <form>
  <div class="mb-3">
    <label for="cardnumber" class="form-label">Enter Card number</label>
    <input type="email" class="form-control" id="cardnumber" aria-describedby="emailHelp">
   
  </div>
  
   
   <div class="row">
    <div class="col col-md-6">
       <label for="cardnumber" class="form-label">Expire Date</label>
        <input type="text" class="form-control" placeholder="Expire Date" aria-label="Expire date">
    </div>
    <div class="col col=md-6">
       <label for="cardnumber" class="form-label">CVV</label>
        <input type="text" class="form-control" placeholder="CVV" aria-label="CVV">
    </div>
       
   </div>

    <div class="mb-3">
    <label for="cardnumber" class="form-label">Name on Card</label>
    <input type="email" class="form-control" id="cardnumber" aria-describedby="emailHelp">
   
  </div>



  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 <center> <button type="submit" class="btn btn-primary">Pay Now</button></center>
</form>
            
        </div>
    </div>
</div>
