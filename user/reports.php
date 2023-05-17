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
    <title>Reports - Democracy</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
  
  <!--   <link rel="icon" type="image/png" sizes="32x32" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg"> -->
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAnhpjfqZHaTicZ1LWM29mJc6peuSdawWg"></script> 
<script type="text/javascript"> 
      //   var addr = document.getElementById("address").innerHTML;

  var geocoder;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

function errorFunction(){
    alert("Geocoder failed");
}

  function initialize() {
    geocoder = new google.maps.Geocoder();



  }

  function codeLatLng(lat, lng) {

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      console.log(results)
        if (results[1]) {
         //formatted address
     //    alert(results[0].formatted_address)
          var address = (results[0].formatted_address);
       //   console.log(address);
          document.getElementById('address').value = address;
       //  addr = results[0].formatted_address
        //find country name
             for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {

            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                    //this is the object you are looking for
                    city= results[0].address_components[i];
                    break;
                }
            }
        }
        //city data
      //  alert(city.short_name + " " + city.long_name)


        } else {
          alert("No results found");
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }

</script> 
  </head>

  <body onload="initialize()">
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
   
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
                                      $electiontype = $row["election_type"];
                                      $party_votes = $row["party_votes"];
                                      $registeredvoters = $row["registeredvoters"];
                                      $accrdvotes = $row["accrdvotes"];
                                      $location = $row["location"];
                                      $validvotes = $row["validvotes"];
                                      $rejectedvotes = $row["rejectedvotes"];
                                      $votescast = $row["votescast"];
                                      $officialname = $row["officialname"];
                                      $resultimg = $row["resultimg"];
                                      $datecreated = $row["datecreated"];

                                      

                                   echo '
                                    <strong class="text-succcess">Result Summary</strong><hr>

                                   <div class="col-md-6">
                                  
                                          <p>Election Type: <span style="color: green;">'.$electiontype.'</span> </p>
                                          <p>Labour Party Votes: <span style="color: green;">'.$party_votes.'</span> </p>
                                          <p>Number of Registered Voters: <span style="color: red;">'.$registeredvoters.'</span> </p>
                                          <p>Accredited Votes: <span style="color: red;">'.$accrdvotes.'</span> </p>
                                          <p>Valid Votes: <span style="color: red;">'.$validvotes.'</span> </p>
                                          <p>Rejected Votes: <span style="color: red;">'.$rejectedvotes.'</span> </p>
                                          <p>Votes Cast: <span style="color: red;">'.$votescast.'</span> </p>
                                          <p>Name of Collation Officer: <span style="color: green;">'.$officialname.'</span> </p>
                                          <p>Location: <span style="color: red;">'.$location.'</span> </p>
                                          </div>
                                          <br>

                                        


                                  ';

                                  if ($resultimg == null) {
                                           echo '
                                          <center><small><span style="color: red;">Upload a Clear Captured Image Of Result Summary</span> </small>

                                          <br>

                                            <form method="post" action="subreport" enctype="multipart/form-data">
                                            <input type="file" class="form-control" name="resultimg" accept="image/png, image/jpg, image/jpeg" required/>
                                            <input type="text" value="'.$id.'" name="uploadid" hidden />
                                            <button class="btn btn-danger p-2 m-2" name="uploadimg">Upload</button>
                                            </form>
                                          </center>';
                                          } else{
                                            echo '<hr/><span class="text-danger text-center">Uploaded Result</span><hr/>
                                            <center><img src="resultimg/'.$resultimg.'" width="300px"; height="300px";></center>


                                            ';
                                          }
                                 } else {
                                     echo '
                                     <h6 class="text-danger"><strong>Warning:</strong> Ensure all fields are correct before clicking on Next as there would be no changes after report has been sent.</h6>
                                     <br>
                                     <form method="post" action="subreport.php">
                                      <div class="input-group input-group-sm mb-3">
                              <span class="input-group-text" id="inputGroup-sizing-sm">Location</span>
                            <input type="text" name="address" class="form-control" id="address" readonly="readonly" required />
                            </div>
                            
                            
                           
                            <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Election Type</span>
                              <select class="form-control" name="electiontype">
                              <option disabled>Select One</option>
                              <option value="Presidential">Presidential</option>
                              <option value="Senatorial" disabled>Senatorial</option>
                              <option value="Representative" disabled>Representative</option>
                              <option value="Governorship" disabled>Governorship</option>
                              <option value="House of Assembly" disabled>House of Assembly</option>
                              <option value="Local Government" disabled>Local Government</option>
                              <option value="Counselor" disabled>Counselor</option>
                              </select>
                            </div>
                           
                            


                             <div class="row">
                              
                              <div class="col">
                                <small class="text-success text-bold">Registered Voters</small>
                                <input class="form-control"  type="number" name="registeredvoters" placeholder="Number of Registered Voters" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                             </div>
                             <div class="col">
                                 <small class="text-success text-bold">Labour Party Votes</small>
                                <input class="form-control" type="number" name="partyvotes" placeholder="Valid votes" aria-label="" required />
                              </div>
                            </div>


























                              <div class="row">
                              
                              <div class="col">
                                <small class="text-success text-bold">Accredited Voters</small>
                                <input class="form-control" type="number" name="accrdvotes" placeholder="Number of Accredited Voters" aria-label="Last name" required />
                             </div>
                             <div class="col">
                                 <small class="text-success text-bold">Total No of Valid Votes</small>
                                <input class="form-control" type="number" name="validvotes" placeholder="Valid votes" aria-label="" required />
                              </div>
                            </div>
                            <div class="row">
                              
                              <div class="col">
                                <small class="text-success text-bold">Rejected Votes</small>
                                <input class="form-control" type="number" name="rejectedvotes" placeholder="Number of Rejected Voters" aria-label="Last name" required />
                             </div>
                             <div class="col">
                                 <small class="text-success text-bold">Total Votes Cast</small>
                                <input class="form-control" type="number" name="votescast" placeholder="Total Votes Cast" aria-label="" required />
                              </div>
                            </div>
                            <br>
                            <div class="input-group mb-3">
                             <span class="input-group-text" id="inputGroup-sizing-default">Name of Collation Officer</span>
                             <input class="form-control" type="text" name="officialname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required />
                            </div>

                             <div class="input-group mb-3">
                             <span class="input-group-text" id="inputGroup-sizing-default">Authorization Code</span>
                             <input class="form-control" type="text" name="authcode" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required />
                            </div>

                            <input type="hidden" name="name" value="'.$user->getUserInfo()['name'].'" >
                            <input type="hidden" name="userid" value="'.$loggedid.'">
                             <input type="hidden" name="email" value="'.$user->getUserInfo()['email'].'" >
                             <input type="hidden" name="state" value="'.$user->getUserInfo()['states'].'" >
                             <input type="hidden" name="lga" value="'.$user->getUserInfo()['lga'].'" >
                             <input type="hidden" name="datecreated" value="'.$dateset.'" >

                            <div class="d-flex justify-content-center">
                              <button class="btn btn-success" type="submit" name="submit">Next</button>
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
   




 <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900"><span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022 &copy; <a href="https://giguild.com/">G.I.Guide</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.2.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


<script src="<?php echo dirname($_SERVER['PHP_SELF']) . '/script.js' ?>"></script>
<!--   <div class="hidden" id="data"><?php echo htmlspecialchars(json_encode($user), ENT_QUOTES); ?></div>
 -->  <!-- <script>
    var user = JSON.parse(document.getElementById('data').textContent);
  </script> -->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/chart/chart.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/leaflet/leaflet.js"></script>
    <script src="vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
  


  </body>



</html>