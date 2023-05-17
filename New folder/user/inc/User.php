<?php
session_start();
class User{

	public function register($email, $name, $password){
		require('connect.php');
		$newPassword = md5($password);
		$query = "INSERT INTO lgausers (email,name,password,verified) value ('$email','$name','$newPassword','0')";
		$run = $sonawap->query($query) or die($sonawap->error.__LINE__);

		if ($run) {
			return true;
		}
	}

	public function update($email, $name){
		require('connect.php');
		$id = $this->getUserInfo()['id'];
		$query = "UPDATE lgausers set email='$email', name='$name' where id= '$id'";
		$run = $sonawap->query($query) or die($sonawap->error.__LINE__);

		if ($run) {
			return true;
		}
	}

	public function changePassword($oldPassword, $newPassword){
	    require 'connect.php';
	    $user_id = $_SESSION['user_id'];
	    $query = "SELECT * FROM lgausers where id = '$user_id' and password = '$oldPassword'  ";
	    $result = $sonawap->query($query) or die($sonawap->error.__LINE__);
	    $countpassword = $result->num_rows;
	    if ($countpassword > 0) {
	      	$query1 = "UPDATE lgausers SET password = '$newPassword' where id = $user_id ";
	      	$sendMessage = $sonawap->query($query1) or die($sonawap->error.__LINE__);
	      	if ($sendMessage) {
	        	   echo '<div class="alert alert-success dark alert-dismissible fade show" role="alert"> Password Updated Successfully
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
	      	}else{
		        header("Location: change-password.php?error=Sorry an error occur, try again");
	      	}
	    }else{
	       echo '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Sorry, </strong> Incorrect Old Passowrd
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
	    }
    }





	public function changepin($oldpin, $newpin){
	    require 'connect.php';
	    $user_id = $_SESSION['user_id'];
	    $query = "SELECT * FROM lgausers where id = '$user_id' and pin = '$oldpin'  ";
	    $result = $sonawap->query($query) or die($sonawap->error.__LINE__);
	    $countpin = $result->num_rows;
	    if ($countpin > 0) {
	      	$query1 = "UPDATE lgausers SET pin = '$newpin' where id = $user_id ";
	      	$sendMessage = $sonawap->query($query1) or die($sonawap->error.__LINE__);
	      	if ($sendMessage) {
	         echo '<div class="alert alert-success dark alert-dismissible fade show" role="alert"> Pin Updated Successfully
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
	      	}else{
		        header("Location: account-settings?error=Sorry an error occur, try again");
	      	}
	    }else{
	      echo '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Sorry, </strong> Incorrect Old Pin
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
	    }
    }


	public function login($email, $password){
		require('connect.php');
		$password = md5($password);

		$query = "SELECT * FROM lgausers where email='$email' and password='$password'";
		$run = $sonawap->query($query) or die($sonawap->error.__LINE__);
		$getUser = $run->num_rows;

		if($getUser > 0){
			if($row=mysqli_fetch_array($run)){
		$accountstatus = $row["verified"];
				if ($accountstatus == '0') {
					
				
				 header("Location: inactive.html");
				
	        }

	        else{
	$_SESSION['user_id']=$row["id"];
	          header("Location: index");
	        

	        }		

				}
	          
	        
		}

		else{
	         header("Location: login?error=Incorrect Username or Password");
	          // echo '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
           //            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
           //          </div>';
	        } 

	}

 	public function checkAuth(){
    	if ($_SESSION['user_id']) {
	      	return true;
	    }else{
	      	return false;
	    }
  	}

  	public function logout(){
		session_destroy();
		header("Location: login");
		exit();
  	}

  	public function getUserInfo(){
  		require 'connect.php';

  		$id = $_SESSION['user_id'];

  		$query = "SELECT * FROM lgausers where id = '$id'";
		$run = $sonawap->query($query) or die($sonawap->error.__LINE__);
		$rows = mysqli_fetch_array($run);

		return $rows;

  	}

}

$user = new User();