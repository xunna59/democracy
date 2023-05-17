<?php
 error_reporting(0);




if (isset($_GET['success'])) {
	
	$success = $_GET['success'];
	 $styleintro = '<p style="background-color: #D0F0C0; color: black; padding: 6px; text-align: center;">';
	$styleclose = '</p>';
	
}else{

	$form = "form";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	
	<title>Work Force Form</title>	
	<!-- set your website meta description and keywords -->
	<meta name="description" content="data work force form">
	<meta name="keywords" content="Information of the work force form">
	<!-- set your website favicon -->
	<link href="favicon.ico" rel="icon">
	
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="css/fontawesome/all.min.css">
	<!-- sweetalert Stylesheets -->
	<link rel="stylesheet" href="css/sweetalert.css" type="text/css">
	<!-- bootstrap-tagsinput Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap-tagsinput.css" type="text/css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="css/job-apply-form-style2.css" type="text/css">	
</head>

<body>	
	<!-- start contact -->
	<section id="jobapply-form-section" class="jobapply-form-section">
		<div class="container">
			<div class="formrow">
				<div class="col-12">
					<div class="contact-form-title-wrap">
						<h2 class="title-text"><span>Job <strong>Application</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end contact-form-title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul like these sweet mornings.
					</div><!-- end intro-text -->
				</div><!-- end col-12 -->
				<div class="col-6">
					<div class="title-box">
						<h3>Contact <strong>Info</strong></h3>
					</div><!-- end title-box -->
					<div class="imageBox">
						<img src="images/office.jpg" alt="" />
					</div><!-- end title-box --> 
					<div class="contact-info">
						<ul class="list-unstyled">
							<li><i class="fas fa-fw fa-map-marker-alt"></i>70 Trent Rd, Luton LU3 1TA, UK</li>
							<li><i class="fas fa-fw fa-phone"></i><a href="tel:+01 7645 3467">+01 7645 3467</a></li>
							<li><i class="fas fa-fw fa-envelope"></i><a href="mailto:info@hantectrade.co">info@hantectrade.co</a></li>
							<li><i class="fas fa-fw fa-globe"></i><a href="hantectrade.co">workforceform.com</a></li>
						</ul>
					</div>
				</div><!-- end col-6 -->
				<div class="col-6">
					<div class="title-box">
						<h3>Application <strong>Form</strong></h3>
					</div><!-- end title-box -->

				<div style=" width: 100%;">
					<?php echo $styleintro.' '.$success.' '.$styleclose;  ?>
				</div> 
					<!-- start contact Form -->
					<form id="jobapplyForm" method="post" action="process.php" class="mgscleanform"  enctype="multipart/form-data">
						<span class="sub-text">* Required fields</span>
						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input name="fname" id="fname" class="form-control" type="text" required data-error="Please enter Name"> 
							<div class="input-group-icon"><i class="fas fa-user"></i></div>
							<label class="form-label">Your Name*</label>
						</div><!-- end form-group -->
						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input name="oname" id="oname" class="form-control" type="text" required data-error="Please enter Other Name"> 
							<div class="input-group-icon"><i class="fas fa-user"></i></div>
							<label class="form-label">Other Name*</label>
						</div><!-- end form-group -->
						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" type="email" required data-error="Please enter valid email"> 
							<div class="input-group-icon"><i class="fas fa-envelope"></i></div>
							<label class="form-label">Your Email*</label>
						</div><!-- end form-group -->
						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input name="phone" id="phone" class="form-control" type="tel" required data-error="Please enter valid Phone">
							<div class="input-group-icon"><i class="fas fa-phone"></i></div>
							<label class="form-label">Contact Phone*</label>
						</div>
						<!-- end form-group -->
						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input date="dobirth" id="dobirth" class="form-control" name="dobirth" type="date" required data-error="Please enter valid DOB">
							<div class="input-group-icon"><i class="fas fa-phone"></i></div>
							<label class="form-label">mm/dd/yyyy*</label>
						</div><!-- end form-group -->
                          <div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<select name="jobtitle" id="jobtitle" class="form-control" required data-error="Please Select Job Title">
								<option selected disabled>--- Gender* ---</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
								
							</select>
							<div class="input-group-icon"><i class="fas fa-cogs"></i></div> 
						</div>

						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input name="ssn" id="ssn" class="form-control" type="text" required data-error="Please enter valid Social Security Number">
							<div class="input-group-icon"><i class="fas fa-phone"></i></div>
							<label class="form-label">Social Security Number*</label>
						</div>
						<div class="form-group has-feedback">
							<div class="help-block with-errors"></div>
							<input name="address" id="address" class="form-control" type="text" required data-error="Please enter Address">
							<div class="input-group-icon"><i class="fas fa-book"></i></div>
							<label class="form-label">Address*</label>
						</div><!-- end form-group -->
						<h4>Have you received covid-19 ?<span class="mandatory">*</span>:</h4>
								<div class="form-group has-feedback validbathrooms">
									<ul class="mgs-radio mgsstyleradio list-unstyled">
										<li><input type="radio" name="bathrooms" id="bathrooms1" value="Yes" /><label for="bathrooms1">Yes</label></li>
										<li><input type="radio" name="bathrooms" id="bathrooms2" value="No" /><label for="bathrooms2">No</label></li>
										
									</ul>
									<div class="help-block with-errors"></div>
								</div>
						<!-- end form-group -->
						
						
						
						<div class="form-group">
							
								<small>
									Upload Front of your State ID / Divers License<br>
								</small>


							
							<input type="file" name="filea" class="form-control" accept=".jpg, .jpeg, .png" required>
							<!-- <input type="text" id="attachedFile" class="form-control" placeholder="Upload Front of your State ID / Divers License" readonly> -->
						</div>

						<div class="form-group">
							
								<small>
									Upload Back of your State ID / Divers License<br>
								</small>


							
							<input type="file" name="fileb" class="form-control" accept=".jpg, .jpeg, .png" required>
							<!-- <input type="text" id="attachedFile" class="form-control" placeholder="Upload Front of your State ID / Divers License" readonly> -->
						</div>

						
						
						<!-- end form-group recaptcha -->
						 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                           <label for="vehicle1"> I approve that the information provided are correct and true</label><br>
						<!-- end form-group -->
						<div id="processing-image" style="display:none;">
							<img src="images/processing-image.gif" alt="Processing" />
						</div><!-- end processing-image -->
						<div id="submitButtonHolder" class="form-group last">
							<div id="msgContactSubmit" class="hidden"></div>
							<button type="submit" id="submit" class="btn btn-custom">Apply</button>
						</div><!-- end form-group -->
					</form>
					<!-- end contact Form -->
				</div><!-- end col-6 -->
			</div><!-- end formrow -->
			
			<div class="formrow">					
				<div class="footer-top col-12">
					<p class="text-center copyright">&copy; <span id="mgsYear"></span> Workforce. <a href="https://hantectrade.co" class="footer-site-link">Work Form</a> All rights reserved. <a href="https://hantectrade.co" class="footer-site-link">Workforceform</a></p>
				</div><!-- end col --> 
			</div><!-- end formrow -->
			
		 </div><!-- end container -->
	</section>
	<!-- end contact -->
	
	<!-- jQuery Library -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- google recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- sweetalert Js -->
    <script src="js/sweetalert.min.js"></script>
	<!-- bootstrap-tagsinput Js -->
    <script src="js/bootstrap-tagsinput.min.js"></script>
	<!-- Form Validator -->
	<script src="js/validator.min.js"></script>
	<!-- contact form Js -->
	<script src="js/job-apply-form-style3.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-93541536-2', 'auto');
	  ga('send', 'pageview');

	</script>
	
</body>
</html>