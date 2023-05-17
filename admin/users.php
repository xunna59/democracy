<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    <label>User Management</label>
    <hr>
    <div class="mt-4">
            <div class="row g-4">
              <div class="col-12 col-xl-12 order-1 order-xl-0">
                <div class="card shadow-none border border-300 mb-3" data-component-card="data-component-card">


                     <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="example">

                          <?php 
                          

                          if ($roles == 0) {
                            echo ' All Registered Observers ';
                          }else{

                            echo 'All Registered Observers in'. ' '. $states;
                          }
                          ?>
                          

                          <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#example" style="padding-left: 0.375em;"></a></h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist">
                            
                            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add user</button> -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Create Account</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <div class="modal-body">
                             <form class="row g-3" method="post" action="inc/process.php">

                         <div class="col-md-6">
                          <label class="form-label" for="inputEmail4">Name of L.G.A Cordinator</label>
                          <input class="form-control" name="lgacord" id="inputEmail4" type="text" required>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="inputPassword4">Phone Number</label>
                          <input class="form-control" name="phone" id="inputPassword4" type="number" required>
                        </div>

                        <div class="col-md-6">
                          <label class="form-label" for="inputEmail4">Email</label>
                          <input class="form-control" name="userid" id="inputEmail4" type="email" required>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="inputPassword4">Password</label>
                          <input class="form-control" name="password" id="inputPassword4" type="password" required>
                        </div>
                        
                       



                        <div class="col-md-6">
                          <label class="form-label" for="inputState">State</label>
                          <select onchange="toggleLGA(this);" name="state" id="state" class="form-select">
                           <option value="" selected="selected">- Select -</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="AkwaIbom">AkwaIbom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="FCT">FCT</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nasarawa">Nasarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamafara</option>


                          </select>
                        </div>
                   
                        
                         <div class="col-md-6">
                          <label class="form-label" for="inputState">Local Government</label>
                         <select name="lga" id="lga" class="form-select select-lga" required>
            </select>
                        </div>
                       
                       
                        <div class="col-12">
                          <button class="btn btn-primary" name="submit" type="submit">Sign in</button>
                        </div>
                      </form>

                            </div>
                           <!--  <div class="modal-footer"><button class="btn btn-primary" type="button">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div> -->
                          </div>
                        </div>
                      </div>
                    


                        </nav>
                      </div>
                    </div>
                  </div>



                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                      <div id="tableExample" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="table-responsive scrollbar">
                          <?php

                          if (isset($_GET['success'])) {

                             $success = $_GET['success'];
                            
                          }else{

                            $success = "";

                          }
                         


                           ?>
                           <?php echo $success; ?>
                          <table class="table table-sm fs--1 mb-0">
                            <thead>
                              <tr>
                                <th class="sort border-top ps-3" data-sort="name">Name of L.G.A Cordinator</th>
                                <th class="sort border-top" data-sort="age">Phone</th>
                                <th class="sort border-top" data-sort="email">Email</th>                                
                                <th class="sort border-top" data-sort="age">State</th>
                                <th class="sort border-top" data-sort="age">L.G.A</th>
                                <th class="sort border-top" data-sort="age">Status</th>

                               <!--  <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th> -->
                              </tr>
                            </thead>



 <?php

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == true)
{
if ($roles == 0) {
$qry="SELECT * FROM lgausers";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){
    while ($row = $result->fetch_assoc()) {
      


?>




                            <tbody class="list">
                                <tr>
                               <td class="align-middle ps-3 name"><?php  print_r ($row['name']); ?></td>
                                <td class="align-middle email"><?php  print_r ($row['phone']); ?></td>
                                <td class="align-middle age"><?php  print_r ($row['email']); ?></td>
                                 <td class="align-middle age"><?php  print_r ($row['states']); ?></td>
                                  <td class="align-middle age"><?php  print_r ($row['lga']); ?></td>
                                   <td class="align-middle age"><?php  

                                 $status = $row['status']; 

                                 if ($status == 'Active') {
                                  echo '<h5><span class="badge badge-success" style="color:green;">Online</span></h5>';
                                 }else{

                                     echo '<h5><span class="badge badge-success" style="color:red;">Offline</span></h5>';

                                 }


                                 ?></td>

<!-- 
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                  <div class="font-sans-serif btn-reveal-trigger">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                      <svg class="svg-inline--fa fa-ellipsis fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path>

                                      </svg></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a>
                                      <a class="dropdown-item" href="#!">Export</a>
                                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                  </div>
                                </td> -->
                              </tr>
                             
                          </tbody>


<?php 

                  }
}

}else{


$qry="SELECT * FROM lgausers WHERE states = '$states'";

// proceed only if a query is executed
if($result = $sonawap->query($qry)){
    while ($row = $result->fetch_assoc()) {
      






echo '
                            <tbody class="list">
                                <tr>
                               <td class="align-middle ps-3 name">'.$row['name'].'</td>
                                <td class="align-middle email">'.$row['phone'].'</td>
                                <td class="align-middle age">'.$row['email'].'</td>
                                 <td class="align-middle age">'.$row['states'].'</td>
                                  <td class="align-middle age">'.$row['lga'].'</td>
                                    <td class="align-middle age">'.  

                                 $status = $row['status']; 

                                 if ($status == 'Active') {
                                  echo '<h5><span class="badge badge-success" style="color:green;">Online</span></h5>';
                                 }else{

                                     echo '<h5><span class="badge badge-success" style="color:red;">Offline</span></h5>';

                                 }'</td>

                              </tr>
                             
                          </tbody> ';




                  }
}



}













}


?>

                          </table>
                        </div>
                      <!--   <div class="d-flex flex-between-center pt-3">
                          <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li></div>
                          <p class="mb-0 fs--1">
                            <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span class="text-600"> Items of </span>15</span>
                            <span class="d-none d-sm-inline-block"> — </span>
                            <a class="fw-semi-bold" href="#!" data-list-view="*">
                              View all
                              <svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg>
                            </a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">
                              View Less
                              <svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg>
                            </a>
                          </p>
                          <div class="d-flex">
                            <button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button>
                            <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                          </div>
                        </div> -->
                      </div>
                  </div>
                  </div>
                    
































    </div>
    </div>
    </div>
    </div>  
    <?php include('includes/footer.php') ?>
