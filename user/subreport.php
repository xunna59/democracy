<?php
error_reporting(0);
require_once 'inc/connect.php';
require_once 'inc/User.php';

 
 
 $registeredvoters = $_POST['registeredvoters'];
 $accrdvotes = $_POST['accrdvotes'];
 $validvotes = $_POST['validvotes'];
 $rejectedvotes = $_POST['rejectedvotes'];
 $votescast = $_POST['votescast'];
 $officialname = $_POST['officialname'];
 $election_type = $_POST['electiontype'];
 $party_votes = $_POST['partyvotes'];
 $name = $_POST['name'];
 $userid = $_POST['userid'];
 $email = $_POST['email'];
 $state = $_POST['state'];
 $lga = $_POST['lga'];
 $address = $_POST['address'];
 $datecreated = $_POST['datecreated'];
 $authcode = $_POST['authcode'];


if (isset($_POST['submit'])) {


$auth_code = $user->getUserInfo()['authcode'];

   if ($authcode == $auth_code) {
                            

$result = mysqli_query($db, "INSERT INTO reports (name, userid, email, election_type, party_votes, registeredvoters, accrdvotes, validvotes, rejectedvotes, votescast, officialname, state, lga, location, datecreated) 

                VALUES ('$name', '$userid', '$email', '$election_type', '$party_votes', '$registeredvoters', '$accrdvotes', '$validvotes', '$rejectedvotes', '$votescast', '$officialname', '$state', '$lga', '$address', '$datecreated')"); 


if ($result == true) {



    echo '<script>window.alert("Submitted");
             window.location.href="reports";
    </script>';
}else{

        echo '<div class="alert alert-success">
                                    <div class="msg">Error! Couldnt Create Account</div>
                                </div>';
}


                        }else{


                             echo '<script> alert("Invalid Auth Code");
    window.location.href = "reports";
     </script>';


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


if (isset($_POST['uploadimg'])) {
    

    if (isset($_FILES['resultimg']['tmp_name'])) {
        
        $uploadid = $_POST['uploadid'];

        $path = $_FILES['resultimg']['name'];
        $tmpName = $_FILES['resultimg']['tmp_name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $imageName = date('Y.m.d') . " - " . date("h.i.sa"). '.'.$ext;
        move_uploaded_file($tmpName, 'resultimg/' . $imageName);

        $date = date("Y/m/d") . " & " . date("h:i:sa");
        
       
$entry = "UPDATE reports SET resultimg = '$imageName' where id = '$uploadid'";
 $runit = $sonawap->query($entry) or die($sonawap->error.__LINE__);

 echo '<script type="text/javascript">
alert("Successfully Updated");
window.location.href = "reports";
</script>';
    }
}