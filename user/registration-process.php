<?php
include('inc/connect.php');
function RandStr($length, $encrypt = 10){
    $reg_id = '';
    for($i=0;$i<$encrypt;$i++){
        $reg_id = base64_encode(md5(microtime(true)));}
    return substr($reg_id, 0, $length);
}

$authcd = RandStr(10);


if (isset($_POST['registerobs'])) {
 
$name = $_POST['name'];
$emailid = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$lga = $_POST['lga'];
$ward = $_POST['ward'];
$polling = $_POST['polling'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];



if ($password == $confirm_password) {
$newpassword = md5($password);
	$check_email = mysqli_query($db, "SELECT Email FROM lgausers where Email = '$emailid' ");
if(mysqli_num_rows($check_email) > 0){
    echo '<script> alert("Email already exist");
	window.location.href = "registration?email='.$emailid.'";
	 </script>';
}else{

  $result = mysqli_query($db, "INSERT INTO lgausers (name, phone, email, password, ward, polling_unit, states, lga, authcode, verified) 

          VALUES ('$name', '$phone', '$emailid', '$newpassword', '$ward', '$polling', '$state', '$lga', '$authcd', '1')"); 

if ($result == true) {

$sendmessage = 'success';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: submission <avriofinancial@protonmail.com>' . "\r\n".
    'Reply-To: '.$emailid. "\r\n";


    if (mail("avriofinancial@protonmail.com","submission",$sendmessage,$headers)) {
        

        header("location: register-observer?success=Registration Link Sent");


    }else{

        echo "an error occured mail not sent";

    }

  // echo '<script>window.alert("Successful");
  //     window.location.href="../register-observer";
  // </script>';
}else{

    echo '<div class="alert alert-success">
                                    <div class="msg">Error! Couldnt Create Account</div>
                                </div>';
}




}





}else{

                                echo '<script>window.alert("password does not match");
			window.location.href = "registration?email='.$emailid.'";
	</script>';
}




}