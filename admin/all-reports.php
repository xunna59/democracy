<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    <label>Reports</label>
    <hr>
               <div class="mx-lg-n4 mt-3">


                   <div class="col-12 col-xl-12 col-xxl-12">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="card-title mb-1">
                      <h3 class="text-1100">Activity</h3>
                    </div><p class="text-700 mb-4">
<?php 
                          

                          if ($roles == 0) {
                            echo 'Reports by States</p>';
                          }else{

                            echo $states. ' State ' .'Reports by L.G.A</p>';
                          }
                          ?>
                    
                    <div class="timeline-vertical">
          <?php

if ($roles == 0) {

$qry="SELECT DISTINCT state FROM reports ORDER BY state ASC";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){

  if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
      


?>
<hr>
 <div class="timeline-item position-relative">

                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                           
                            <div class="timeline-icon-item position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-200"><span class="text-primary fas fa-chess"></span></div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="timeline-content-item ps-7 ps-md-3">
                              <h5 class="fs--1"><?php  print_r($row['state']); ?></h5>
                              <a href="view-report?report=<?php print_r($row['state']);  ?>"><p class="fs--1"><span class="fw-semi-bold text-primary">View Report</span></p></a>
                              
                            </div>
                          </div>
                        </div>
                      </div>
 



 <?php 

                  }
}else{


echo '<hr><p class="text-danger d-flex justify-content-center">No Record Found</p><hr>';


}

}
}

if ($roles == 1) {





$qry="SELECT * FROM reports WHERE state = '$states' ORDER BY lga ASC";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){

  if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
      
$resultsimg = $row["resultimg"];

?>
<div class="row">
  <hr>
 <div class="col-md-6">
            <div class="d-flex align-items-center justify-content-between py-6 border-300 px-lg-6 px-4 notification-card  bg-soft">
              <div class="d-flex">
                <div class="avatar avatar-xl  mb-5 me-3">
                  <img class="rounded-circle" src="assets/img/icons/logo.png" alt="" />
                </div>
                <div class="me-3 flex-1 mt-2">
                  <h4 class="fs--1 text-black"><?php print_r($row['lga']); ?> L.G.A</h4>
                  <p class="fs--1 text-1000">Ward: <?php print_r($row['wardno']); ?></p>
                   <p class="fs--1 text-1000">Polling Unit: <?php print_r($row['pollingunit']); ?></p>
                   <p class="fs--1 text-1000">Registered Voters: <span class="text-danger"> <?php print_r($row['registeredvoters']); ?></span></p>
                   <p class="fs--1 text-1000">Accredited Votes: <span class="text-danger"> <?php print_r($row['accrdvotes']); ?></span></p>
                     <p class="fs--1 text-1000">Valid Votes: <span class="text-danger"> <?php print_r($row['validvotes']); ?></span></p>
                     <p class="fs--1 text-1000">Rejected Votes: <span class="text-danger"> <?php print_r($row['rejectedvotes']); ?></span></p>
                     <p class="fs--1 text-1000">Votes Cast: <span class="text-danger"> <?php print_r($row['votescast']); ?></span></p>
                       <p class="fs--1 text-1000">Name of Collation Officer: <span class="text-primary"><?php print_r($row['officialname']); ?></span></p>
                  
                </div>
              </div>
           
            </div>


          </div>
          <div class="col-md-6" style="border-left: 3px solid darkred; ">
            <div class="d-flex align-items-center justify-content-center py-6 border-300 px-lg-6 px-4 notification-card  bg-soft">
              <div class="d-flex justify-content-center">
               <center>
                <?php 
                 if ($resultsimg == null) {
                  echo '<p class="text-danger">Result Image Upload Pending</p>';
                 }else{

                  echo '<img src="../user/resultimg/'.$row['resultimg'].'" width="250px" height="250px">';
                 }
                ?>
              
              </center>

              </div>
           
            </div>

           
          </div>
           <center> <br><p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><?php print_r($row['datecreated']); ?></p> </center>
          <hr>

</div>




 <?php 

                  }
}else{


echo '<hr><p class="text-danger d-flex justify-content-center">No Record Found</p><hr>';


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
    </div>
    </div>  
    <?php include('includes/footer.php') ?>
