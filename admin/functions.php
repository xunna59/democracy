<?php

function getdb(){
$servername = "localhost";
$username = "huscqxzwaw";
$password = "2WWKxxxxHr";
$db = "huscqxzwaw";
try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

if(isset($_POST["Import"])){
		require('inc/connect.php');
		$filename=$_FILES["file"]["tmp_name"];		


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	           $sql = "INSERT into reglink (email) 
                   values ('".$getData[0]."')";
                   $result = mysqli_query($db, $sql);

				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"register-observer\"
						  </script>";		
				}
				else {





					$sendmessage = '<p>Click the link below to Complete registration</p>
<p><a href="https://democracy.giguild.com/user/register-observer">Click Here</a></p>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Registration Link <no-reply@giguild.com>' . "\r\n".
    'Reply-To: '.$getData[0]. "\r\n";


    if (mail($getData[0],"Registration Link",$sendmessage,$headers)) {
        

        echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"register-observer\"
					</script>";

    }else{

        echo "an error occured mail not sent";

    }






					
					
				}
	         }
			
	         fclose($file);	
		 }
	}	 


	function get_all_records(){
	$con = getdb();
    $Sql = "SELECT * FROM reglink";
    $result = mysqli_query($con, $Sql);  


    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>EMP ID</th>
                          <th>Email</th>
                          
                        </tr></thead><tbody>";


     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>" . $row['id']."</td>
                   <td>" . $row['email']."</td>
                 

                   </tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
}