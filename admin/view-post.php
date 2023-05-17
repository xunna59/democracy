<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    <?php 
    
    $lga = $_GET["imgposts"];
    
    ?>
    <label>Image Uploads from <strong class="text-success"><?php echo $lga?> L.G.A</strong></label>
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

                          <a class="btn btn-sm btn-phoenix-danger preview-btn ms-2">Go Back</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="row">
                  
                    

                              <?php



$qry="SELECT * FROM webcam WHERE lga = '$lga' ORDER BY lga ASC";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){

  if($result->num_rows > 0){
    
    while ($row = $result->fetch_assoc()) {
      
$image = $row["image"];
$datecrtd = $row["datecreated"];
$userid = $row["userid"];
$email = $row["email"];
$ward = $row["ward"];
$polling_unit = $row["polling_unit"];



?>



<div class="col-sm border border-dark">
<br>
<center>
                    <img src="../user/img/<?php echo $image; ?>"  width="200" height="200">
  <p class="text-danger"><?php echo $datecrtd; ?></p>
  <p>by</p>
    <p class="text-danger"><?php echo $userid; ?><br><?php echo $ward; ?><br><?php echo $polling_unit; ?></p>

 

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
    <?php include('includes/footer.php') ?>
