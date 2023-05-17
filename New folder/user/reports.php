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

                 $dateset = date("Y/m/d") . " - " . date("h:i:sa");



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
    <title>Reports - Labour Party</title>

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
    
    <label>Submit Report</label>
    <hr>
              <div class="row g-4">
              <div class="col-12 col-xl-12 order-1 order-xl-0">
                <div class="card shadow-none border border-300 mb-3" data-component-card="data-component-card">


                  <!-- card header starts here -->
                     <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="example">Submit Report<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#example" style="padding-left: 0.375em;"></a></h4>
                      </div>
                      <div class="col col-md-auto">
                      



                      </div>
                    </div>
                  </div>
                 <!--  card header ends here -->

                  <!-- card body starts here -->
                   <div class="card-body p-0">
                        <div class="p-4 code-to-copy">

                          <?php 

                          $loggedid = $_SESSION['user_id'];

                          $sql = "SELECT * FROM reports WHERE userid='{$loggedid}'";
                           $result = mysqli_query($db,$sql) or die("Query unsuccessful") ;
                                 if (mysqli_num_rows($result) > 0) {

                                     $row = mysqli_fetch_assoc($result);
                                      $id = $row["id"];
                                      $wardno = $row["wardno"];
                                      $accrdvotes = $row["accrdvotes"];
                                      $validvotes = $row["validvotes"];
                                      $officialname = $row["officialname"];
                                      $datecreated = $row["datecreated"];

                                   echo '<strong class="text-succcess">Report Summary</strong><hr>

                                          <p>Ward Address / Number: <span style="color: green;">'.$wardno.'</span> </p>
                                          <p>Accredited Votes: <span style="color: red;">'.$accrdvotes.'</span> </p>
                                          <p>Valid Votes: <span style="color: red;">'.$validvotes.'</span> </p>
                                          <p>INEC Official Name: <span style="color: green;">'.$officialname.'</span> </p><br>
                                          <center><small>Last Updated: <span style="color: red;">'.$datecreated.'</span> </small>

                                          <br>
                                            <a href="update-report?entryid='.$id.'"><button class=" btn btn-sm btn-danger"> Update Report</button></a>
                                          </center>


                                  ';
                                 } else {
                                     echo '<form method="post" action="subreport.php">
                            
                            <div class="input-group input-group-sm mb-3">
                              <span class="input-group-text" id="inputGroup-sizing-sm">Ward Number</span>
                             <input class="form-control" type="text" name="wardno" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                            </div>
                              <div class="row">
                              
                              <div class="col">
                                <small class="text-success text-bold">Accredited Votes</small>
                                <input class="form-control" type="number" name="accrdvotes" placeholder="Accredited Votes" aria-label="Last name" required />
                             </div>
                             <div class="col">
                                 <small class="text-success text-bold">No of Valid Votes</small>
                                <input class="form-control" type="number" name="validvotes" placeholder="Valid votes" aria-label="" required />
                              </div>
                            </div>
                            <br>
                            <div class="input-group mb-3">
                             <span class="input-group-text" id="inputGroup-sizing-default">Name of INEC Official</span>
                             <input class="form-control" type="text" name="officialname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required />
                            </div>

                            <input type="hidden" name="name" value="'.$user->getUserInfo()['name'].'" >
                            <input type="hidden" name="userid" value="'.$user->getUserInfo()['id'].'" >
                             <input type="hidden" name="email" value="'.$user->getUserInfo()['email'].'" >
                             <input type="hidden" name="state" value="'.$user->getUserInfo()['states'].'" >
                             <input type="hidden" name="lga" value="'.$user->getUserInfo()['lga'].'" >
                             <input type="hidden" name="datecreated" value="'.$dateset.'" >

                            <div class="d-flex justify-content-center">
                              <button class="btn btn-success" type="submit" name="submit">Submit</button>
                            </div>
                          </form>'; 
                                 }




                          ?>

                          



                    </div>
                  </div>
                  <!-- card body ends here -->





 



























    </div>
    </div>
    </div>
    </div>  
    <?php include('includes/footer.php') ?>
