		<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_b.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_b.php");
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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
			          		
			          	<li><p> <a href="index2.php?logout='1'" style="color: red;">logout</a> </p></li>									
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
								Bank Login				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Bank Login</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
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
<br><br><br>

<div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Donate Blood</button><br><br>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="insert_blood.php" method="post">
    <div class="container">
      <h1>Donate Blood</h1>
      <p>Please fill in details</p>
      <hr>
      
	 <div class="form-select" id="name" name="name" >
									<select name="name">
										<option data-display="">Enter Blood Donar Name</option>
										<?php
$mysqli = new mysqli("localhost", "root", "", "project");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
	 $results = mysqli_query($mysqli, "select * from blood_donar ");
   while($row = mysqli_fetch_assoc( $results )) { 
$id=$row['bd_id'];
	?>

										<option value= "<?php echo $row['bd_id']; ?>"><?php echo $row['bd_name']; ?></option>		

										<?php
							}
						}
						?>				
									</select>
								</div>	

 <div class="form-select" id="bname" name="bname" >
									<select name="bname">
										<option data-display="">Enter Blood Bank Name</option>
										<?php
$mysqli = new mysqli("localhost", "root", "", "project");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
	 $results = mysqli_query($mysqli, "select bb_name , id from blood_bank where  u_id='{$_SESSION['id']}'  ");
   while($row = mysqli_fetch_assoc( $results )) { 
   	$id2=$row['id'];

	?>

										<option value="<?php echo $row['id']; ?>"><?php echo $row['bb_name']; ?></option>		

										<?php
							}
						}
						?>				
									</select>
								</div>
      
      <div class="form-select" id="bgroup" name="bgroup" >
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

    <div class="form-select" id="count" name="count" >
									<select name="count">
										<option data-display="">Enter Count</option>
										<option value="1">1</option>
										<option value="2">2</option>										
									</select>
								</div>	
      

      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Donate</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>

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
 $results1 = mysqli_query($conn, "SELECT * FROM  blood_bank  Where u_id='{$_SESSION['id']}' ");
   while($row1 = mysqli_fetch_assoc( $results1 )) { 
   	?>
   	<h4>Name Of Blood Bank : </h4><h4><?php echo $row1['bb_name']; ?></h4><br>
   	<h4>Address Of Blood Bank : </h4><h4><?php echo $row1['bb_add']; ?></h4><br>
   	<h4>Contact No. Of Blood Bank : </h4><h4><?php echo $row1['bb_contactno']; ?></h4><br>
<?php 
}
}
?>

<table class="table">
    <thead>
      <tr>
      
      
        
        <th>Blood Group</th>
        <th>Count</th>
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
 $results1 = mysqli_query($conn, "SELECT * FROM  blood_bank  Where u_id='{$_SESSION['id']}' ");
   while($row1 = mysqli_fetch_assoc( $results1 )) {  
   	$id=$row1['id'];
   	$_SESSION['bb_id'] = $id;
   
   	$results = mysqli_query($conn, "SELECT * FROM  blood_bank,blood  Where  bb_id=$id and u_id='{$_SESSION['id']}' ");
   while($row = mysqli_fetch_assoc( $results )){
?>
    <tr>
        <td><?php echo $row['bgroup']; ?></td>
        <td><?php echo $row['count']; ?></td>
      </tr>
           <?php
  }
}
}

?>
    </tbody>
 
  </table>	

 
</div>

			

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