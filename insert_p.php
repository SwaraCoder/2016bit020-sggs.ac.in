<?php
$mysqli = new mysqli("localhost", "root", "", "project");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{



$sql1="INSERT INTO `login`( `username`, `password` , `type`) VALUES ('".$_POST["uname"]."','".$_POST["pass"]."','patient')";
if ( $mysqli->query($sql1) === TRUE ) {
    
    $sql2="SELECT id FROM `login` WHERE username= '".$_POST["uname"]."'";
    $result= $mysqli->query($sql2);
   
    while ($row = $result->fetch_assoc()) {
    $sql ="INSERT INTO `patient`( `p_name`, `p_bgroup`, `p_disease`, `u_id`) VALUES ( '".$_POST["name"]."','".$_POST["bgroup"]."','".$_POST["disease"]."','".$row['id']."')";

    $mysqli->query($sql);
    echo "in while";
}
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
$mysqli->close();
header('Location: contact.php'); 
?>