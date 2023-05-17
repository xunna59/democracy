<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>

      <?php 
      
      $lga = $_GET["vidposts"];
      
       ?>
    
    <label>Videos from <strong class="text-success"><?php echo $lga; ?> L.G.A</strong></label>
    <hr>
             



 <div class="content">
          
          <div class="mt-4">
            <div class="row g-4">
              <div class="col-12 col-xl-12 order-1 order-xl-0">


              <div class="card shadow-none  mb-3" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      
                      <div class="col col-md-auto">
                    <nav class="nav nav-underline justify-content-center border-0 doc-tab-nav align-items-center" role="tablist">

                          <a href="videos" class="btn btn-sm btn-phoenix-danger preview-btn ms-2">Go Back</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                  
                    <div class="row">
                      

                              <?php




$qry="SELECT * FROM videos WHERE lga = '$lga' ORDER BY lga ASC";


// proceed only if a query is executed
if($result = $sonawap->query($qry)){

  if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
      
$video = $row["videolink"];
$datecr = $row["datecreated"];


// $sql = "SELECT lga FROM webcam WHERE lga = '$lga'";
 
// $mysqliStatus = $sonawap->query($sql);
 
// $rowscount_value = mysqli_num_rows($mysqliStatus);


?>


<div class="col-sm border border-dark">
<br>
<center>
                    <video width="auto" height="240" controls poster="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg">
  <source src="../user/videos/<?php echo $video; ?>" type="video/mp4" >
  
</video>
  <p class="text-danger"><?php echo $datecr; ?></p>
  <small class="text-info">Click to Play Video</small>

  </center>
</div>


                          <?php 

                  }
}else{


echo '<hr><p class="text-danger d-flex justify-content-center">No Uploads yet</p><hr>';


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
    <?php include('includes/footer.php') ?>
