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
			<style>
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
								Register				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Register</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register As Donar</button><br><br>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="insert_d.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to register as a Donar.</p>
      <hr>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" id="name" name="name" required>

    
      
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


      <label for="medical_status"><b>Medical Status</b></label>
      <input type="text" placeholder="Enter Medical Status" id="medical_status" name="medical_status" required>
      
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" id="address" name="address" required>
      
      <label for="pno"><b>Phone No</b></label>
      <input type="text" placeholder="Enter Phone Number" id="pno" name="pno" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

      <label for="pass"><b>PassWord</b></label>
      <input type="text" placeholder="Enter PassWord" id="pass" name="pass" required>
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
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

				  
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register As Blood Bank</button><br><br>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="insert_b.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to register as a Blood Bank.</p>
      <hr>
      <label for="Name"><b>Blood Bank Name</b></label>
      <input type="text" placeholder="Enter Blood Bank Name" id="bname" name="bname" required>
      
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" id="address" name="address" required>
      
      <label for="pno"><b>Phone No</b></label>
      <input type="text" placeholder="Enter Phone Number" id="pno" name="pno" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

      <label for="pass"><b>PassWord</b></label>
      <input type="text" placeholder="Enter PassWord" id="pass" name="pass" required>
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Register As Patient</button><br><br>

<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="insert_p.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to register as a Patient.</p>
      <hr>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" id="name" name="name" required>

    
      
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


      <label for="medical_status"><b>Disease</b></label>
      <input type="text" placeholder="Enter Disease" id="disease" name="disease" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

      <label for="pass"><b>PassWord</b></label>
      <input type="text" placeholder="Enter PassWord" id="pass" name="pass" required>
      
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


	
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





