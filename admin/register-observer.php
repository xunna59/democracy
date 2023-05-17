<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    
              <div class="row g-4">
              <div class="col-12 col-xl-12 order-1 order-xl-0">
                <div class="card shadow-none border border-300 mb-3" data-component-card="data-component-card">
<center>
<?php 

if (isset($_GET['success'])) {
 echo '<div class="bg-success text-light p-2">Registration Link Sent</div>';
}

?>
 
</center>
                   <?php 
                          

                          if ($roles == 0) {
                            
                            echo '   <!-- card header starts here -->
                     <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h6 class="text-900 mb-0" data-anchor="data-anchor" id="example">Email Registration Link to Observers<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#example" style="padding-left: 0.375em;"></a></h6>
                      </div>
                      <div class="col col-md-auto">
                      



                      </div>
                    </div>
                  </div>
                 <!--  card header ends here -->

                  <!-- card body starts here -->
                   <div class="card-body p-0">
                        <div class="p-4 code-to-copy">





                      <ul class="nav nav-underline" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true"> Mail Registration Link</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false" tabindex="-1">Bulk Mail Registration Link </a></li> 
                        
                      </ul>
                      <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade active show" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                          


                      <form class="row row-cols-lg-12 g-3 align-items-center" action="inc/mail-observer.php" method="post">
                        <div class="col-12">
                          <br>
                          <center>
                          <label  for="inlineFormInputName">Email<span class="text-danger">*</span></label>
                        </center>
                          <input class="form-control" id="inlineFormInputName" name="email" type="email" placeholder="Enter Observer Email" required>
                        </div>
                       
                        
                        
                        <div class="col-12">
                          <center>
                          <button class="btn btn-success" name="submit" type="submit">Submit</button>
                        </center>
                        </div>
                      </form>
                    


                        </div>



                        <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
                          
                         <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                       
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="filebutton">Upload CSV file format</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" accept=".csv, .xls" class="form-control">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                           <br>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Bulk Mail</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <?php
               get_all_records();
            ?>
                        </div>
                       
                      </div>
                    






                    </div>
                  </div>
                  <!-- card body ends here --> ';
                          }else{

                            echo '<center><hr><p class="text-danger">You are not authorised to view this page</p><hr></center>';
                          }
                          ?>







 



























    </div>
    </div>
    </div>
    </div>  
    <?php include('includes/footer.php') ?>
