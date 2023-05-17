<?php
require_once 'connect.php';

$name = $_POST['lgacord'];
	$phone = $_POST['phone'];
	$userid = $_POST['userid'];
	$password = md5($_POST['password']);
	$states = $_POST['state'];
	$lga = $_POST['lga'];

$check_email = mysqli_query($db, "SELECT Email FROM lgausers where Email = '$userid' ");
if(mysqli_num_rows($check_email) > 0){
    echo '<script> alert("Email already exist");
	window.location.href = "../users";
	 </script>';
}else{


if (isset($_POST['submit'])) {
	

	$result = mysqli_query($db, "INSERT INTO lgausers (name, phone, email, password, states, lga, verified) 

          VALUES ('$name', '$phone', '$userid', '$password', '$states', '$lga', '1')"); 

if ($result == true) {


	echo '<script>window.alert("Successful");
			 window.location.href="../users.php";
	</script>';
}else{

		echo '<div class="alert alert-success">
                                    <div class="msg">Error! Couldnt Create Account</div>
                                </div>';
}


}

else{

  echo '<div class="alert alert-danger">
                                    <div class="msg">An error occured please try again.</div>
                                </div>';
}

}

