<?php
echo $_POST['name'];
echo $_POST['bname'];
$mysqli = new mysqli("localhost", "root", "", "project");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{

    
    $sql2="INSERT INTO `blood`( `bb_id`, `bd_id`, `bgroup`, `count`) VALUES ('".$_POST["bname"]."','".$_POST["name"]."','".$_POST["bgroup"]."','".$_POST["count"]."')";
    $result= $mysqli->query($sql2);
   
    
    echo "New record created successfully";
} 


$mysqli->close();
header('Location: bank.php'); 
?>
   
}