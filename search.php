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
		<title>Medical</title>

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
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Search For Blood Group				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Search For Blood Group</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Blood Group</th>
        <th>Donars Medical Condition</th>
        <th>Donar Address</th>
        <th>Donar Phone No</th>
      </tr>
    </thead>
    <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
 $results = mysqli_query($conn, "SELECT * FROM blood_donar where bd_group='".$_POST["bgroup"]."'");
   while($row = mysqli_fetch_assoc( $results )) {  
?>
    <tr>
        <td><?php echo $row['bd_name']; ?></td>
        <td><?php echo $row['bd_group']; ?></td>
        <td><?php echo $row['bd_medical']; ?></td>
        <td><?php echo $row['bd_add']; ?></td>
        <td><?php echo $row['bd_no']; ?></td>
      </tr>
           <?php
  }
}

?>
    </tbody>
 
  </table>

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