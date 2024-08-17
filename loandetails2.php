<?php
  include 'header.php';
  include 'navbar.php';
 ?>

  <body>
  <div class="container-fluid ">
    <div class="row">
      <div class=" col col-md-2 " style="text-align: justify;">
        <h1>Car loan</h1><br>
        <nav>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Loan Details</a>
  </li><br>
  <li class="nav-item">
    <a class="nav-link" href="incomedetails.php">Income Details</a>
  </li><br>
  <li class="nav-item">
    <a class="nav-link" href="#">Property Details</a>
  </li><br>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact Details</a>
  </li><br>
  <li class="nav-item">
    <a class="nav-link" href="#">Loan Offer</a>
  </li>
</ul>
</nav>
            </div>
            <div class=" col col-md-10">
          <center>
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 15px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1"><table><tr>
                 <td><img src="image/logo1.jpeg" width="55px" height="55px"></td>
                <td><p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Hi, I am sai come to the Gome loan management</p></td>
               </tr> </table>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" placeholder="Name" />
                      <label class="form-label" for="form3Example1c">Full Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="No" id="form3Example3c" class="form-control" placeholder="Mobileno" />
                      <label class="form-label" for="form3Example3c">Mobile No</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
<select name="cars" id="cars" style="width: 100%" "height: 30px">
  <option value="volvo">--Select--</option>
  <option value="volvo">Salaried</option>
  <option value="saab">Self Employed</option>
</select><br>
<label class="form-label" for="form3Example4c">Select Your Proffession</label>
                    </div>
                  </div>

                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
<select name="cars" id="cars" style="width: 100%; height:30px;">
  <option value="volvo">--Select--</option>
  <option value="volvo">New car</option>
  <option value="saab">car Loan Balance Transfer</option>
  <option value="mercedes">Loan Against car</option>
  <option value="audi">Old car</option>
</select>
<label class="form-label" for="form3Example4c">Select Your Requirement</label>
                    </div>
                  </div>

                  <div>
                    <input type="date" name="birthday" style="width: 95%">
                     <label class="form-label" for="form3Example4cd">Date of Birth</label>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                   <a href="incomedetails2.php"> <button type="button" class="btn btn-primary btn-lg" style="background-color:lightpink">NEXT</button></a>
                   
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="image/carloan1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

          </center>
            </div>
        
     </div>
 </div>
 </body>
 <?php
  include 'footer.php';
  ?>

