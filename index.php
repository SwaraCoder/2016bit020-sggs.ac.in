	<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Blood Helpline</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<style type="text/css">
				 .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
			</style>
		</head>
		<body>	
		  <header id="header">
	  		
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			        	<li>
			        		<?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
			        	</li>
			          <li><a href="index2.php">Home</a></li>
			          <li><a href="about.php">About</a></li>          					          		          
			          <li><a href="contact.php">Register</a></li>
			          <li class="menu-has-children"><a href="">Login</a>
			            <ul>
			              <li><a href="login.php">User login</a></li>
			              <li><a href="login_b.php">Bank Login</a></li>
			              <li><a href="login_d.php">Donar Login</a></li>
			            </ul>
			          </li>	
			          	
			          	<li><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></li>									
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8 col-md-12">
							<h1>BE A HERO 
							SAVE A LIFE		
							</h1>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
			<br>

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    

<br><br><br>
			<!-- Start appointment Area -->
			<section class="appointment-area">			
				<div class="container">
					<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
						<div class="col-lg-5 col-md-6 appointment-left">
							<h1>
								Service Hours
							</h1>
							
							<ul class="time-list">
								<li class="d-flex justify-content-between">
									<span>Monday-Friday</span>
									<span>08.00 am - 10.00 pm</span>
								</li>
								<li class="d-flex justify-content-between">
									<span>Saturday</span>
									<span>08.00 am - 6.00 pm</span>
								</li>
								<li class="d-flex justify-content-between">
									<span>Sunday</span>
									<span>08.00 am - 2.00 pm</span>
								</li>																
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
							<form class="form-wrap" action="search.php" method="post">
								<h3 class="pb-20 text-center mb-30">Search For Blood</h3>		
								
								<div class="form-control" id="bgroup" name="bgroup" >
									<select name="bgroup">
										<option data-display="">Enter Blood Group</option>
										<option value="a+">A+</option>
										<option value="a-">A-</option>
										<option value="b+">B+</option>
										<option value="b-">B-</option>
										<option value="ab+">AB+</option>
										<option value="ab-">AB-</option>
										<option value="o+">O+</option>
										<option value="o-">O-</option>
										
									</select>
								</div>	
								    
								
								<button class="primary-btn text-uppercase">Search</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End appointment Area -->

		
						
			<!-- Start feedback Area -->
			<section class="feedback-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-60 header-text text-center">
							<h1 class="mb-10 text-white">Enjoy our Client’s Feedback</h1>
							<p class="text-white">
								Who are in extremely love with eco friendly system..
							</p>
						</div>
					</div>			
					<div class="row feedback-contents justify-content-center align-items-center">
						<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
														
						</div>
						<div class="col-lg-6 feedback-right">
							<div class="active-review-carusel">
								<div class="single-feedback-carusel">
									
									<div class="title d-flex flex-row">
										<h4 class="text-white pb-10">Pallavi Dahibhate</h4>
																		
									</div>
									<p class="text-white">
										it is very useful website.I got help from the contacts provided by the website in emergency condition thanks a lot!!! Its a nice idea.
									</p>
								</div>
								<div class="single-feedback-carusel">
									<div class="title d-flex flex-row">
										<h4 class="text-white pb-10">Vaishali Deshpande</h4>
																		
									</div>
									<p class="text-white">
										Its is really very nice idea. I am owner of one blood bank so i got many contacts from this website ,so i can manage blood for emergency,as I am having many contacts of donars.
									</p>
								</div>
								<div class="single-feedback-carusel">
									
									<div class="title d-flex flex-row">
										<h4 class="text-white pb-10">Rajesh Tamboli</h4>
																		
									</div>
									<p class="text-white">
										It is very good website .It gives us contacts in emergency conditions so we can manage blood for needy one.
									</p>
								</div>																
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End feedback Area -->	

	

			<!-- End footer Area -->


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>