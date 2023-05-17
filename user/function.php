<?php 
 include('includes/header.php');

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];
    $query = mysqli_query($db, "SELECT * FROM lgausers WHERE id = '$user_id'");
    $row = mysqli_fetch_assoc($query);


    //Getting all users form input details..........
    $fullname = $row["name"];
    $email = $row["email"];
    $state = $row["states"];
    $lga = $row["lga"];
    $ward = $row["ward"];
    $polling_unit = $row["polling_unit"];

    

    

}else{
    $firstname = "uhasdhuwsnhju";
}




    if (isset($_FILES['webcam']['tmp_name'])) {
    	
    
    	$tmpName = $_FILES['webcam']['tmp_name'];
    	$imageName = date('Y.m.d') . " - " . date("h.i.sa") . '.jpeg';
    	move_uploaded_file($tmpName, 'img/' . $imageName);

    	$date = date("Y/m/d") . " & " . date("h:i:sa");
        
    	$result = mysqli_query($db, "INSERT INTO webcam (userid, email, state, lga, ward, polling_unit, image, datecreated) 

          VALUES ('$fullname', '$email', '$state', '$lga', '$ward', '$polling_unit', '$imageName', '$date')");



    }
