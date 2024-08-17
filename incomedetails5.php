<?php
include 'header.php';
include 'navbar.php';
?>
  <body>
  <div class="container-fluid ">
    <div class="row">
      <div class=" col col-md-2 " style="text-align: justify;">
        <h1>Home loan</h1><br>
        <nav>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Loan Details</a>
  </li><br>
  <li class="nav-item">
    <a class="nav-link" href="#">Income Details</a>
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
                <td><p class="text-center h5 fw-bold mb-5 mx-1 mx-md-4 mt-4">We want to know you better so that we can customizeour home loan for you</p></td>
               </tr> </table>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" placeholder="Pincode*" />
                      <label class="form-label" for="form3Example1c">Please Enter Pincode of your area</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" placeholder="Company name" />
                      <label class="form-label" for="form3Example3c">Currently working in</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="No" id="form3Example3c" class="form-control" placeholder="Monthly income" />
                      <label class="form-label" for="form3Example3c">Total net monthly income</label>
                    </div>
                  </div>

                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="No" id="form3Example3c" class="form-control" placeholder="Work Experience*" />
                      <label class="form-label" for="form3Example3c">No. of years in your current company </label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="No" id="form3Example3c" class="form-control" placeholder="current EMIs" />
                      <label class="form-label" for="form3Example3c">Total amount of ongoing EMIs</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                   <a href="propertydetails.php"> <button type="button" class="btn btn-primary btn-lg" style="background-color: lightpink">NEXT</button></a>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="image/loan22.jpg " class="img-fluid" alt="Sample image" width="100%">

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

