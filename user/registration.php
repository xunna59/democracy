<?php 
error_reporting(0);
include('inc/connect.php');
  require_once('inc/User.php');
  require_once('inc/Message.php');



if (isset($_GET['email'])) {
 
 $email = $_GET['email'];

  $check_email = mysqli_query($db, "SELECT Email FROM reglink where Email = '$email' ");
if(mysqli_num_rows($check_email) == 0){

   header("Location: register-observer");
}

}else{
   header("Location: register-observer");
}







?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Observer Registration</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <style>
      
      .main{

        background-image: url(assets/img/nigeria.jpg);
         background-repeat: no-repeat;
          background-size: auto;
          background-attachment: fixed;
  background-position: center; 
        opacity: 0.9;
      }

    </style>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <div class="container">
          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
              </a>
              <div class="text-center mb-7">
                <h6 class="text-danger">Democracy</h6>
                <p class=" text-danger">Carefully Fill in all fields</p>
              </div>

              
              <form method="post" action="registration-process.php">
                <div class="mb-3 text-start"><label class="form-label" for="name">Name</label>
                  <input class="form-control" id="name" name="name" type="text" placeholder="Name" required />
                </div>
                <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                  <input class="form-control" id="email" type="email" value="<?php echo $email; ?>"  disabled/>
                  <input class="form-control" id="email" name="email" type="email" value="<?php echo $email; ?>" hidden  />

                </div>

                  <div class="mb-3 text-start">
                    <label class="form-label" for="name">Phone Number</label>
                    <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone Number" required />
                  </div>

                <div class="row g-3 mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="password">State</label>
                   <select onchange="toggleLGA(this);" name="state" id="state" class="form-select" required>
                           <option value="" selected="selected">- Select -</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="AkwaIbom">AkwaIbom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="FCT">FCT</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nasarawa">Nasarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamafara</option>


                          </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="confirm_password">L.G.A</label>
                   <select name="lga" id="lga" class="form-select select-lga" required>
            </select>
                  </div>
                </div>


 <div class="mb-3 text-start"><label class="form-label" for="name">Ward</label>
                  <input class="form-control" id="name" name="ward" type="text" placeholder="Ward" required />
                </div>
                 <div class="mb-3 text-start"><label class="form-label" for="name">Polling Unit</label>
                  <input class="form-control" id="name" name="polling" type="text" placeholder="Polling Unit" required />
                </div>


                 <div class="row g-3 mb-3">
                  <div class="col-md-6"><label class="form-label" for="password">Password</label><input class="form-control form-icon-input" type="password" placeholder="Password" name="password" required /></div>
                  <div class="col-md-6"><label class="form-label" for="confirm_password">Confirm Password</label><input class="form-control form-icon-input" type="password" name="confirm_password" placeholder="Confirm Password" required /></div>
                </div>
               

                <button class="btn btn-danger w-100 mb-3" name="registerobs">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
        <script src="js/lga.min.js"></script>

  </body>

</html>