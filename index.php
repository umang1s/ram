<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...




	
}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>E-College</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->







<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->
 





	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}

	footer-icons{
		color: #000;
	}
	</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">E-College</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
                    <li> <a href="about_us.html">About Us</a></li>
					<li> <a href="faculty1.html">Faculty</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="https://chat.whatsapp.com/LUy03f0VQPBCL2hBamGYT5">Alumni</a></li>
					<!-- <li> <a href="#myfaq">FAQs</a></li> -->
					<li> <a href="feedback.html">FeedBack</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							<div class="cta-div">
								<a href="#contact_us" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="https://www.facebook.com/?stype=lo&jlou=Afcnr1dmRwRh_9ZtlG-I8M36mMKLWNiOKE7yHDU7R-AKDQOc9z-50iTwy6T2OwhSlKRYlY2P7klsY45ZeitVYhIBm05g83SmaZXm5v-jNUvjsw&smuh=50358&lh=Ac_UbF5f-5MPmtMO2y" class="fa fa-facebook"></a>
								<a href="https://twitter.com/RameshM41508113?t=Eqr2Vo3sRZaVb9qTiUr6VA&s=09" class="fa fa-twitter"></a>
								<a href="" class="fa fa-instagram"></a>
								<a href="" class="fa fa-reddit"></a>
								<a href="https://www.linkedin.com/in/ramesh-maurya-846474213/" class="fa fa-linkedin"></a>
								<a href="" class="fa fa-cog"></a>
							</div>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

         <!---Login Ends------->

         <!---Our Services Section Start------->

         <!-- <br><br> -->
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					This is our series theses are the services provided by us <br>these are the services provided by us
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programming.html">Electronics and Communication</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to languages 
         					like DSP,Microprocessor,power Electronics etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="#">VIDEO TUTORIALS</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to languages 
         					like DSP,Microprocessor, power Electronics etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="#">EXERCISE</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your Electronic and Communication skill
         				</p>
         			</div>
         		</div>
<!-- 
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">WEB DESIGN</a></h3>
         				<p>
         					This is our series theses are the services provided by us <br>these are the services provided by us
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">COMPUTER SCIENCE</a></h3>
         				<p>
         					This is our series .These are the services provided by us. <br> You Can View according your preference.
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-user"></i>
         				</div>
         				<h3><a href="">TECH NEWS</a></h3>
         				<p>
         					This is our series these are the services provided by us <br>these are the services provided by us
         				</p>
         			</div> -->
         		</div>
         	</div>
         </div>
     </div>

			<!---Our Services Section Ends------->

			<!---Emailnotification Section Start------->



			<!---Emailnotification Section Start------->


			<!---Our Services Section Ends------->

			<section class="work" id="work"><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">OUR WORK</h2>
				<p class="text-center">Join us to improve your works join us to improve your works</p>
				<div class="container-fluid">
					<!---first row start-->
					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/machine.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" title="this is a sky image">
								<img src="img/machine.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="DigitalSystem.jpeg" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;"  title="this is a sky image">
								<img src="DigitalSystem.jpeg" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/micro.png"  style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;"title="this is a sky image">
								<img src="img/micro.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/VLSI.png"  style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" title="this is a sky image">
								<img src="img/VLSI.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>


					
					<!---first row ends-->


					<!-------second row starts  --->
					
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work5.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" title="this is a sky image">
								<img src="img/work5.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/opticalfiber.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" title="this is a sky image">
								<img src="img/opticalfiber.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work7.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" title="this is a sky image">
								<img src="img/work7.png"  style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;"class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/DSP1.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;"title="this is a sky image">
								<img src="img/DSP1.png" style="width: 800px; height: 300px; padding-left: 20%; padding-right: 20%;" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					
					
					<!---second row ends-->
					
				</div>
				


			</section>

			<!---Our Services Section Ends------->

			<!-- introduction video section starts -->

		 	<br><br><br><br>

		<section class="header7 cid-rjrjygOfd1" id="header7-3">

    
		    <div class="container">
		        <div class="media-container-row">

		            <div class="media-content align-right">
		                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
		                    Intro with Video
		                </h1>
		                <div class="mbr-section-text mbr-white pb-3">
		                    <p class="mbr-text mbr-fonts-style display-5">
		                        Intro with background color, paddings and a video on the right. Mobirise helps you cut down development time by providing you with a flexible elearning website editor with a drag and drop interface.
		                    </p>
		                </div>
		                <div class="mbr-section-btn">
		                        <a class="btn btn-md btn-primary display-4" href="http://csjmu.ac.in/uiet-kanpur/departments/electronics-and-communication-engineering/">LEARN MORE</a>
		                        <a class="btn btn-md btn-white-outline display-4" href="https://en.wikipedia.org/wiki/Electronic_engineering">LIVE DEMO</a>
		                </div>
		            </div>

		            <!-- <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/uNCr7NdOJgw?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div> -->

						<!-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/iMhLdm6xrDM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

							<iframe width="100%" height="400" src="https://www.youtube.com/embed/aSFJ1c6mAUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		        </div>
    	</div>
		</section>


  

			<!-- introduction video section ends -->








			<!---Our Team Section Start------->
			
			 <style>
			.container{
			
				
				grid-template-columns:repeat(4,1fr) ;

			}
			 
			
				</style>
			
			<br><br><br>
			<div class="container text-center" id="our-members">
				<h2><b>MEMBERS</b></h2>
				<p>
					These are our excellent member .You can contact anyone anytime <br> and all are experts and well experienced.
				</p>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img src="Ramesh1.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Ramesh Maurya</h4>
									<h4 class="team-member-designation">Web Developer</h4>
									<ul class="social-list">
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img src="shu.jpg" class="img-responsive"  style="height: 340px;">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Shubham Singh</h4>
									<h4 class="team-member-designation">Web Developer</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img src="balram1.png" class="img-responsive" style="height: 340px;">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Balram Maurya</h4>
									<h4 class="team-member-designation">Web Developer</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
                                     <div class="team-member text-center">

								<img src="vineet1.jpg" class="img-responsive" style="height: 340px;"> 
								<!-- <img src ="shubham.jpg" class="img-responive"> -->
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Vineet Kumar Jaiswal</h4>
									<h4 class="team-member-designation">Web Developer</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
   

					</div>
			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->




<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									You can ask the regarding the issues.we will <br>solve that together for sure.
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>


				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'uniquedeveloper');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
												Connect Learning is an online E-learning website <br>
												here you can learn Electronic and Communication languages,Tech News and improve your Electronics and Communication skill	
											</p>
										</div>
									</div>
								</div>
<div class="panel panel-default">
									<div class="panel-heading" id="headingThree">
										<h4 class="panel-title">
											<a href="#collapseThree" class="collapsed" data-toggle="collapse" data-parent="#accordian">How To Complain about issues in website ?</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree">
										<div class="panel-body">
											<p>
												By going to Contact Us section You can write a message to us informing issues.Connect Learning Always ready to help there users atmost.<br>
												
											</p>
										</div>
									</div>
								</div>
<div class="panel panel-default">
									<div class="panel-heading" id="headingFour">
										<h4 class="panel-title">
											<a href="#collapseFour" class="collapsed" data-toggle="collapse" data-parent="#accordian">Is this a free learning website ?</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" aria-labelledby="headingFour">
										<div class="panel-body">
											<p>
												Connect Learning is an Free online E-learning website and we always try to add more content to it for seamless experience. <br>
												Here you can learn languages,Tech News and improve your Electronic and Communication skill
											</p>
										</div>
									</div>
								</div>






								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>

					</div>
				</div>
				

			</section>


			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->

<div class="row text-center" id="contact_us">
	<h2><b>CONTACT US</b></h2><br><br>
	<center>
	<div class="card" style="width: 30rem;">
  <div class="card-body border-info">
   
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">message</label>
    <input type="password" class="form-control"  placeholder="enter your message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div></center>
</div>
<footer class="footer-distributed">

<div class="footer-left">

	<h3>E-<span>College</span></h3>

	<p class="footer-links">
		<a href="#" class="link-1">Home</a>

		<a href="#">Blog</a>

		

		<a href="#">About</a>

		<a href="#">Faq</a>

		<a href="#">Contact</a>
	</p>

	<p class="footer-company-name" style="color: white;">Company © 2022</p>
</div>

<div class="footer-center">

	<div>
		<i class="fa fa-map-marker"></i>
		<p><span>UIET CSJM University</span> Kalyanpur, Kanpur</p>
	</div>

	<div>
		<i class="fa fa-phone"></i>
		<p>+919999999999</p>
	</div>

	<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:support@company.com">support@company.com</a></p>
	</div>

</div>

<div class="footer-right">

	<p class="footer-company-about">
		<span>About the company</span>
		Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
		vehicula sit amet.
	</p>

	<div class="footer-icons">

		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>

	</div>

</div>

</footer>
    



			<!---Contact us Section Ends------->




 			<!---footer Section Start	----->



 			<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>






<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>
</html>