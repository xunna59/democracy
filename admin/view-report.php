<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
   <div class="content">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="all-reports">State</a></li>
              <li class="breadcrumb-item active"><?php echo $_GET['report']; ?></li>
            </ol>
          </nav>
          <h2 class="mb-5"><?php echo $_GET['report']; ?> State</h2>
         
          <?php

$getstate = $_GET['report'];

$qry="SELECT * FROM reports WHERE state = '$getstate' ORDER BY lga ASC";

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
                  <?php

                  $usrid = $row['userid'];

                  $qrry = "SELECT * FROM lgausers WHERE id = '$usrid'";

                  if($resultt = $sonawap->query($qrry)){

  if($resultt->num_rows > 0){
    while ($roww = $resultt->fetch_assoc()) {

      $ward = $roww["ward"];

      $polling_unit = $roww["polling_unit"];


                   ?>

                  <p class="fs--1 text-1000">Ward: <?php echo $ward ?></p>
                   <p class="fs--1 text-1000">Polling Unit: <?php echo $polling_unit ?></p>
<?php }}} ?>



                    <p class="fs--1 text-1000">Location: <?php print_r($row['location']); ?></p>
                   <p class="fs--1 text-1000">Election Type: <span class="text-danger"> <?php print_r($row['election_type']); ?></span></p>
                   <p class="fs--1 text-1000">Registered Voters: <span class="text-danger"> <?php print_r($row['registeredvoters']); ?></span></p>
                   
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


?>                   




                    </div>



    <?php include('includes/footer.php') ?>
