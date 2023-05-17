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
    <title>Register Observer</title>

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
    <link rel="stylesheeunicons.iconscout.com/release/v4.0.0/css/line.css">
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
            <div class="col-sm-10 col-md-8 col-lg-5 col-xxl-4">
               <center ><img src="assets/img/icons/logo.png" alt="phoenix" width="58" />
                <h6 class="text-danger">Democracy</h6>
               </center>
               <br>
              
              <div class="px-xxl-7">
                <div class="text-center mb-6">
                  <h4 class="text-800">Observer Registration</h4>

                 
                  <p class="text-700 mb-5 text-danger">Enter your email below to proceed</p>
                  <form class="d-flex align-items-center mb-5" method="post" action="" id="form">
                    <input class="form-control flex-1" id="email" name="email" type="email" placeholder="Email" />
                    <button class="btn btn-success ms-2" name="proceed" type="submit">Proceed<span class="fas fa-chevron-right ms-2"></span></button>

                  </form>

    <?php

include('inc/connect.php');

if (isset($_POST['proceed'])) {

$email = $_POST['email'];
$qryy="SELECT * FROM reglink WHERE email = '$email'";

if($resultt = $sonawap->query($qryy)){

  if($resultt->num_rows > 0){
    while ($row = $resultt->fetch_assoc()) {
   
echo '<script>window.location.replace("registration?email='.$email.'");</script>';

// header("Location: registration?email=$email");

// echo '
// <a href="registration?email='.$email.'"><button class="btn btn-danger">Next Step <span class="text-1000 fs-4 text-light" data-feather="arrow-right-circle"></span></button></a>';


                  }
}else{


echo '<hr><p class="text-danger d-flex justify-content-center">Email not Registered</p><hr>';


}

}
}

?> 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
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
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
  </body>

</html>