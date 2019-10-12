<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="images/acm_ditu_favicon.png">
        <title>ACM DITU Student Chapter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="Common/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="Common/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="Common/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="Common/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="Common/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="Common/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="Common/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="Common/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="Common/css/util.css">
	<link rel="stylesheet" type="text/css" href="Common/css/main.css">
	</head>
    <body>
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="images/acmditulogo.png" alt="" height="57px" width="129px">
                        </a>
                    </div>
    
                </div>

                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Service</a></li>
                             <li><a href="Events.html">Events</a></li>
                            <li><a href="blog-fullwidth.html">Blog</a></li>
                            <li><a href="membership.html">Membership</a></li>
                            <li><a href="ContactUs.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>

            </div>
        </header>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="POST">
				<span class="contact100-form-title">
					Fill the Recruitment form
				</span>
				<?php
echo "Sorry can't connect to server";
?>
				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="fname" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="lname" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="mobile" placeholder="Eg. 9999999999" required>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="phone">Enter your College Id</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="roll" placeholder="Eg. 170102082" required>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="phone">Branch & Year</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="branch" placeholder="Eg. CSE/2nd" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Skills & Area of Interest *</label>
				<div class="wrap-input100 validate-input" data-validate = "Skills & Interest is required">
					<textarea type="text" id="message" class="input100" name="interest" placeholder="Write here."></textarea>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="message">Why you want to join us *</label>
				<div class="wrap-input100 validate-input" data-validate = "This is required">
					<textarea type="text" id="message" class="input100" name="why" placeholder="Write here."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="send">
						Submit
					</button>
				</div>
				<?php

?>
			</form>



			<div class="contact100-more flex-col-c-m" style="background-color:white;">
				<h2><font color="white">GET US ON</font></h2>
				</br></br></br>
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">

						<span class="txt1 p-b-20">
							Visit Us
						</span>

						<span class="txt2">
							 <font color="58B717">DIT UNIVERSITY, Diversion Road, Dehradun, Uttarakhand 248009, India</font>
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Call Us
						</span>

						<span class="txt3">
							<a href="tel:8057662489"><font color="58B717">+91 8057662489</font></a>
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Email Us
						</span>

						<span class="txt3">
							<a href="mailto:info@ditu.acm.org"><font color="#58B717">info@ditu.acm.org</font></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>


	<script src="Common/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="Common/vendor/animsition/js/animsition.min.js"></script>

	<script src="Common/vendor/bootstrap/js/popper.js"></script>
	<script src="Common/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="Common/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="Common/vendor/daterangepicker/moment.min.js"></script>
	<script src="Common/vendor/daterangepicker/daterangepicker.js"></script>

	<script src="Common/vendor/countdowntime/countdowntime.js"></script>

	<script src="Common/js/main.js"></script>


	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
