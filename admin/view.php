<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    <label>Image Uploads by L.G.A</label>
    <hr>
              <div class="row g-4">
              <div class="col-12 col-xl-12 order-1 order-xl-0">
                <div class="card shadow-none border border-300 mb-3" data-component-card="data-component-card">


                  <!-- card header starts here -->
                     <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="example">Image Uploads by L.G.A <a href="uploads"><small class="text-danger float-end">Go Back</small></a></h4>
                      </div>
                      <div class="col col-md-auto">
                      



                      </div>
                    </div>
                  </div>
                 <!--  card header ends here -->

                  <!-- card body starts here -->
                   <div class="card-body p-0">
                        <div class="p-4 code-to-copy">

<!-- count number of posts from same lga -->


<ul class="list-group list-group-flush">

   <?php

$state = $_GET["state"];

$qry="SELECT DISTINCT lga FROM webcam WHERE state = '$state' ORDER BY lga ASC";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){

  if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
      
$lga = $row["lga"];

$sql = "SELECT lga FROM webcam WHERE lga = '$lga'";
 
$mysqliStatus = $sonawap->query($sql);
 
$rowscount_value = mysqli_num_rows($mysqliStatus);


?>




<a href="view-post?imgposts=<?php echo $lga; ?>"><li class="list-group-item d-flex justify-content-between align-items-center"><?php print_r($row["lga"]); ?><span class="badge badge-light-primary rounded-pill"><?php echo $rowscount_value; ?></span></li></a>



<?php 

                  }
}else{


echo '<hr><p class="text-danger d-flex justify-content-center">No Uploads yet</p><hr>';


}

}


?>   


<!-- <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $lga ?><span class="badge badge-light-primary rounded-pill"><?php echo $rows_count_value; ?></span></li> -->
 
</ul>







                    </div>
                  </div>
                  <!-- card body ends here -->





 



























    </div>
    </div>
    </div>
    </div>  
    <?php include('includes/footer.php') ?>
