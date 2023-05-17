<?php
require_once 'connect.php';

$email = "";

$email = $_POST['email'];

$check_email = mysqli_query($db, "SELECT email FROM reglink where email = '$email' ");
if(mysqli_num_rows($check_email) > 0){
    echo '<script> alert("Registration Link Already sent");
	window.location.href = "../register-observer";
	 </script>';
}else{


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$result = mysqli_query($db, "INSERT INTO reglink (email) 

          VALUES ('$email')"); 

if ($result == true) {

$sendmessage = '<p>Click the link below to Complete registration</p>
<p><a href="https://democracy.giguild.com/user/register-observer">Click Here</a></p>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Registration Link <no-reply@giguild.com>' . "\r\n".
    'Reply-To: '.$email. "\r\n";


    if (mail($email,"Registration Link",$sendmessage,$headers)) {
        

        header("location: register-observer?success=Registration Link Sent");


    }else{

        echo "an error occured mail not sent";

    }

	// echo '<script>window.alert("Successful");
	// 		 window.location.href="../register-observer";
	// </script>';
}else{

		echo '<div class="alert alert-success">
                                    <div class="msg">Error! Couldnt Create Account</div>
                                </div>';
}


}else{

  echo '<div class="alert alert-danger">
                                    <div class="msg">An error occured please try again.</div>
                                </div>';
}

}