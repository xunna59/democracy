<?php 
error_reporting(0);
  require_once('inc/User.php');
  require_once('inc/Message.php');

 if(isset($_POST['login'])){
    $login = $user->login($_POST['email'], $_POST['password']);
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
    <title>Democracy-User</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
     <link rel="apple-touch-icon" sizes="180x180" href="https://www.pngitem.com/pimgs/m/538-5381998_transparent-nigeria-coat-of-arm-png-png-download.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.pngitem.com/pimgs/m/538-5381998_transparent-nigeria-coat-of-arm-png-png-download.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.pngitem.com/pimgs/m/538-5381998_transparent-nigeria-coat-of-arm-png-png-download.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/538-5381998_transparent-nigeria-coat-of-arm-png-png-download.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="https://www.pngitem.com/pimgs/m/538-5381998_transparent-nigeria-coat-of-arm-png-png-download.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <div class="container">
          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="index">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
              </a>
              <div class="text-center mb-7">
               <h6 class="text-danger">Democracy</h6>
              <br>
                <h3>Sign In</h3>
                <p class="text-700">Get access to Upload</p>
              </div>

              <!-- <div class="position-relative mt-4">
                <hr class="bg-200" />
                <div class="divider-content-center">or use email</div>
              </div> -->
              <form id="loginForm" method="post" action="">
                
                 <div class="alert-danger"><?php echo $message->message();?></div>

              <div class="mb-3 text-start ">
                <label class="form-label text-success" for="email">Email address</label>
                <div class="form-icon-container inputblock">

                  <input class="form-control form-icon-input " id="email" name="email" type="email" autocomplete="email" required placeholder="Enter your email" />
                  <span class="fas fa-user text-900 fs--1 form-icon"></span>
                </div>
              </div>



              <div class="mb-3 text-start">
                <label class="form-label text-success" for="password">Password</label>
                <div class="form-icon-container inputblock">
                  <input class="form-control form-icon-input " id="password" name="password" type="password" autocomplete="current-password" required placeholder="Enter your password"  />
                  <span class="fas fa-user text-900 fs--1 form-icon"></span></div>
              </div>

              <div class="row flex-between-center mb-7">
                
               
              </div>
              <button class="btn btn-danger w-100 mb-3" type="submit" name="login">Sign in</button>
            </form>

<!--               <div class="text-center"><a class="fs--1 fw-bold" href="sign-up.html">Create an account</a></div>
 -->            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

  <script src="<?php echo dirname($_SERVER['PHP_SELF']) . '/script.js' ?>"></script>


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