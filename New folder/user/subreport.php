<?php
error_reporting(0);
require_once 'inc/connect.php';

 
 $wardno = $_POST['wardno'];
 $accrdvotes = $_POST['accrdvotes'];
 $validvotes = $_POST['validvotes'];
 $officialname = $_POST['officialname'];
 $name = $_POST['name'];
 $userid = $_POST['userid'];
 $email = $_POST['email'];
 $state = $_POST['state'];
 $lga = $_POST['lga'];
 $datecreated = $_POST['datecreated'];


if (isset($_POST['submit'])) {

	$result = mysqli_query($db, "INSERT INTO reports (name, userid, email, wardno, accrdvotes, validvotes, officialname, state, lga, datecreated) 

          VALUES ('$name', '$userid', '$email', '$wardno', '$accrdvotes', '$validvotes', '$officialname', '$state', '$lga', '$datecreated')"); 

if ($result == true) {



	echo '<script>window.alert("Successful");
			 window.location.href="reports";
	</script>';
}else{

		echo '<div class="alert alert-success">
                                    <div class="msg">Error! Couldnt Create Account</div>
                                </div>';
}


}

// else{

//   echo '<div class="alert alert-danger">
//                                     <div class="msg">An error occured please try again.</div>
//                                 </div>';
// }


if (isset($_POST['update'])) {

	$uwardno = $_POST['uwardno'];
 $uaccrdvotes = $_POST['uaccrdvotes'];
 $uvalidvotes = $_POST['uvalidvotes'];
 $uofficialname = $_POST['uofficialname'];
  $udatecreated = $_POST['udatecreated'];

   
   $entryid = $_POST['entryid'];

 $query1 = "UPDATE reports SET wardno = '$uwardno', accrdvotes = '$uaccrdvotes', validvotes = '$uvalidvotes', officialname = '$uofficialname', datecreated = '$udatecreated' where id = $entryid ";
 $run = $sonawap->query($query1) or die($sonawap->error.__LINE__);

  // header('location:../index.php');

 echo '<script type="text/javascript">
alert("Successfully Updated");
window.location.href = "reports";
</script>';
}