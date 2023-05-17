<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
        
 <?php

if ($roles == 0) {
 $sql = "SELECT * FROM lgausers";
 
$mysqliStatus = $sonawap->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);
 
}else{


   $sql = "SELECT * FROM lgausers WHERE states = '$states'";
 
$mysqliStatus = $sonawap->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);


}

 


 ?>
        

          <div class="pb-5">
            <div class="row g-4">
              <div class="col-12 col-xxl-6">
                <div class="mb-8">
                  <h2 class="mb-2">Democracy</h2>
                  <h5 class="text-700 fw-semi-bold">
                    <?php 

                    if ($roles == 0) {
                     echo 'Overview';
                    }else{

                      echo $states. ' '. 'Overview';

                    }

                    ?>
                 

                </h5>
<?php 

if ($roles == 0) {
$result = mysqli_query($sonawap, 'SELECT SUM(party_votes) AS value_sum FROM reports'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
}

?>




                <div style="border-top: 2px solid green; border-bottom: 2px solid green;">
<marquee behavior="alternate"><marquee width="200">Total Party Votes: <?php echo number_format($sum); ?></marquee></marquee>
</div>
                </div>
                <div class="row align-items-center g-4">
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/4.png" alt="" height="46" width="46" />
                      <div class="ms-3">
                        <h4 class="mb-0"><?php echo $rows_count_value; ?></h4>
                        <p class="text-800 fs--1 mb-0">Registered Accounts</p>
                      </div>
                    </div>
                  </div>

                   <?php
if ($roles == 0) {
  $sql = "SELECT * FROM reports";
 
$mysqli_Status = $sonawap->query($sql);
 
$reports = mysqli_num_rows($mysqli_Status);
}else{

  $sql = "SELECT * FROM reports WHERE state = '$states'";
 
$mysqli_Status = $sonawap->query($sql);
 
$reports = mysqli_num_rows($mysqli_Status);



}

 
 


 ?>
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/2.png" alt="" height="46" width="46" />
                      <div class="ms-3">
                        <h4 class="mb-0"><?php echo $reports; ?></h4>
                        <p class="text-800 fs--1 mb-0">Total Reports</p>
                      </div>
                    </div>
                  </div>

                   <?php

if ($roles == 0) {

$sql = "SELECT * FROM webcam";
 
$mysqliStatus = $sonawap->query($sql);
 
$camerauploads = mysqli_num_rows($mysqliStatus);

}else{


$sql = "SELECT * FROM webcam WHERE state = '$states'";
 
$mysqliStatus = $sonawap->query($sql);
 
$camerauploads = mysqli_num_rows($mysqliStatus);


}

 
 


 ?>
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/3.png" alt="" height="46" width="46" />
                      <div class="ms-3">
                        <h4 class="mb-0"><?php echo $camerauploads; ?></h4>
                        <p class="text-800 fs--1 mb-0">Image Uploads</p>
                      </div>
                    </div>
                  </div>



   <?php

if ($roles == 0) {

$sql = "SELECT * FROM videos";
 
$mysqliStatus = $sonawap->query($sql);
 
$videouploads = mysqli_num_rows($mysqliStatus);

}else{


$sql = "SELECT * FROM videos WHERE state = '$states'";
 
$mysqliStatus = $sonawap->query($sql);
 
$videouploads = mysqli_num_rows($mysqliStatus);


}

 
 


 ?>





                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/3.png" alt="" height="46" width="46" />
                      <div class="ms-3">
                        <h4 class="mb-0"><?php echo $videouploads; ?></h4>
                        <p class="text-800 fs--1 mb-0">Video Uploads</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="bg-200 mb-6 mt-4" />
                


          <h4 class="mb-5">Recent Messages</h4>
          <h5 class="text-black mb-3"></h5>

  <div class="mx-n4 mx-lg-n6">
            <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top bg-soft">
              <div class="d-flex">
                <div class="avatar avatar-xl  mb-5 me-3">
                  <img class="rounded-circle" src="assets/img/icons/logo.png" alt="" />
                </div>
                <div class="me-3 flex-1 mt-2">
                  <h4 class="fs--1 text-black">Jessie Samson</h4>
                   <small class="fs--1 text-black">Jessie@gmail.com</small>
                  <p class="fs--1 text-1000"><span class='me-1'>💬</span>I am having issues <span class="fw-bold"> &quot;with my account &quot; </span></p>
                  <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>Dec 7,2022</p>
                </div>
              </div>
              <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
              </div>
            </div>


          </div>


                <?php
// function RandStr($length, $encrypt = 10){
//     $reg_id = '';
//     for($i=0;$i<$encrypt;$i++){
//         $reg_id = base64_encode(md5(microtime(true)));}
//     return substr($reg_id, 0, $length);
// }

// echo "REG_ID= ". RandStr(10);
?>

              </div>
             
            </div>
          </div>



         <!-- 
          <div class="row gx-6">
            <div class="col-12 col-xl-6">
             
            





              <div class="d-flex align-items-center justify-content-between py-2 fs--1 mb-1">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="">1 to 5 <span class="text-600"> Items of </span> 15</p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-2" data-fa-transform="down-1"></span></a>
              </div>
            </div>
            <div class="col-12 col-xl-6">
              <div class="mx-n4 mx-lg-n6 ms-xl-0 h-100">
                <div class="h-100 w-100">
                  <div class="h-100 bg-white" id="map" style="min-height: 300px;"></div>
                </div>
              </div>
            </div>
          </div> -->
          
         <?php include('includes/footer.php') ?>
