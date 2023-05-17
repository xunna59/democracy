<?php include('includes/header.php') ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
      
     <?php include('includes/nav-bar.php') ?>
      <?php include('includes/top-bar.php') ?>
    
    <label>Search Result</label>
    <hr>
             
 <div class="card-body p-0">
                    <div class="row">
<?php 

if (isset($_POST['search'])) {
 


$search = $_POST['search'];

$qry="SELECT * FROM webcam WHERE ward = '$search' ORDER BY lga ASC";

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
    <p class="text-dark"><?php echo $userid; ?><br><span class="text-danger">Ward: </span><?php echo $ward; ?><br><span class="text-danger">Polling Unit: </span><?php echo $polling_unit; ?></p>

 

  </center>
</div>



<?php

}
}
else{


echo '<hr><p class="text-danger d-flex justify-content-center">No Record Found</p><hr>';


}
}



}







?>

</div>
</div>














    </div>  
    <?php include('includes/footer.php') ?>
