<?php 
// error_reporting(0);
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
  <title>Democracy</title>

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
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
  </head>

  <body onload="configure();">
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">