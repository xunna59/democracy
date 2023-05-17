<?php 
 include('includes/header.php');

 var_dump($_FILES);

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];
    $query = mysqli_query($db, "SELECT * FROM lgausers WHERE id = '$user_id'");
    $row = mysqli_fetch_assoc($query);


    //Getting all users form input details..........
    $fullname = $row["name"];
    $email = $row["email"];
    $state = $row["states"];
    $lga = $row["lga"];
 

    

    

}else{
    $firstname = "uhasdhuwsnhju";
}




    if (isset($_FILES['blobFile']['tmp_name'])) {
    	
    
    	
$tmpName = $_FILES['blobFile']['tmp_name'];
$videoName = $lga. " LGA - " . date('Y.m.d') . " - " . date("h.i.sa") . '.mp4';
 move_uploaded_file($tmpName, 'videos/' . $videoName);

    	$date = date("Y/m/d") . " & " . date("h:i:sa");

    	$result = mysqli_query($db, "INSERT INTO videos (userid, email, state, lga, videolink, datecreated) 

          VALUES ('$fullname', '$email', '$state', '$lga', '$videoName', '$date')");



    }