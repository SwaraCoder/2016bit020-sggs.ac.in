<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$group = $POST["bgroup"];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
 $results = mysqli_query($conn, "SELECT * FROM blood_donar where bd_group='$group'");
   while($row = mysqli_fetch_assoc( $results )) {

echo "Connected successfully";
}
}
?>