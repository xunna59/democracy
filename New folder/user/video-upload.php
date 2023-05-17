<?php 
 error_reporting(0);
  require_once('./inc/User.php');
  require_once('./inc/Message.php');
    require_once('./inc/connect.php');

if (!isset($_SESSION['user_id']))
{
    header("Location: login");
    die();
}

                   $date=strtotime("today");
                   date_default_timezone_set("Africa/Lagos");


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
    <title>Labour Party</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
  </head>

  <body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    <label>Upload Video</label>
    <hr>
               

                  <!-- card header starts here -->
                  
                 <!--  card header ends here -->

                  <!-- card body starts here -->

   <center>                     
<div class="col-12" id="my_camera">
      

    </div> 
    <div class="col-12" id="results" style=" visibility: hidden; position: absolute;">
      

    </div> 
    <br>

<div class="d-flex justify-content-center">
  
        <video autoplay="" id="video" controls width="380" height="720">
          <source src="" type="">
        </video>


</div>
    <div class="d-flex justify-content-center">

    <div class="p-2" id="start">
    <button class="btn btn-success p-2" type="button" onclick="startFunction()">Start Recording</button>
  </div>
  <div class="p-2" id="stop" style="display: none;">
        <button class="btn btn-danger p-2" type="button" id="stop-media" onclick="download()" >Stop Recording</button>
      </div>

    <br>
    </div>  


    </center>        

















                  <!-- card body ends here -->





 



























   
    
    </div>  
    <?php include('includes/footer.php') ?>
