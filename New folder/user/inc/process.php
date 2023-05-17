<?php
require_once 'connect.php';

$name = $_POST['lgacord'];
	$phone = $_POST['phone'];
	$userid = $_POST['userid'];
	$password = md5($_POST['password']);
	$states = $_POST['state'];
	$lga = $_POST['lga'];



if (isset($_POST['submit'])) {

	$result = mysqli_query($db, "INSERT INTO lgausers (name, phone, email, password, states, lga, verified) 

          VALUES ('$name', '$phone', '$userid', '$password', '$states', '$lga', '1')"); 

if ($result == true) {


// header('Location: users?success=<div class="alert alert-outline-success d-flex align-items-center" role="alert">
//   <span class="fas fa-check-circle text-success fs-3 me-3"></span>
//   <p class="mb-0 flex-1">A simple primary alert—check it out!</p>
//   <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>');

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