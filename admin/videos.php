<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    <label>Video Uploads</label>
    <hr>
              <div class="row g-4">
              <div class="col-12 col-xl-12 order-1 order-xl-0">
                <div class="card shadow-none border border-300 mb-3" data-component-card="data-component-card">

                  <!-- card header starts here -->
                     <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="example">

                           <?php 
                          

                          if ($roles == 0) {
                            echo ' All Video Uploads ';
                          }else{

                            echo $states. ' ' .'Video Uploads';
                          }
                          ?>
                         

                          

                          <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#example" style="padding-left: 0.375em;"></a></h4>
                      </div>
                      <div class="col col-md-auto">
                      



                      </div>
                    </div>
                  </div>
                 <!--  card header ends here -->

                  <!-- card body starts here -->
                   <div class="card-body p-0">
                        <div class="p-4 code-to-copy">

<ul class="list-group list-group-flush">
   <?php

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == true)
{
if ($roles == 0) {
$qry="SELECT * FROM states";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){
    while ($row = $result->fetch_assoc()) {
      


?>
  <a href="view-video-lga?state=<?php print_r ($row['name']); ?>"><li class="list-group-item"><?php  print_r ($row['name']); ?></li></a>
  <?php 

                  }
}

}else{



$qry="SELECT DISTINCT lga FROM videos WHERE state = '$states' ORDER BY lga ASC";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){

  if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
      
$lga = $row["lga"];

$sql = "SELECT lga FROM videos WHERE lga = '$lga'";
 
$mysqliStatus = $sonawap->query($sql);
 
$rowscount_value = mysqli_num_rows($mysqliStatus);







echo '<a href="all-videos?vidposts='.$lga.'"><li class="list-group-item d-flex justify-content-between align-items-center">'.$row["lga"].'<span class="badge badge-light-primary rounded-pill">'.$rowscount_value.'</span></li></a>';





                  }
}else{


echo '<hr><p class="text-danger d-flex justify-content-center">No Uploads yet</p><hr>';


}

}






}




















}


?>


</ul>
                    </div>
                  </div>
                  <!-- card body ends here -->





 



























    </div>
  </div>
    </div>
    </div>  
    <?php include('includes/footer.php') ?>
