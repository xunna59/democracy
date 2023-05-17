<?php 

 include('includes/header.php');

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];
    $query = mysqli_query($db, "SELECT * FROM lgausers WHERE id = '$user_id'");
    $row = mysqli_fetch_assoc($query);


    //Getting all users form input details..........
    $fullname = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
 

    

    

}else{
    $firstname = "uhasdhuwsnhju";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<p><?php echo $fullname; ?></p>
</body>
</html>