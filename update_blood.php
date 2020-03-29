<?php
echo $_POST['name'];
echo $_POST['bname'];
$new=0;
$mysqli = new mysqli("localhost", "root", "", "project");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
		$results = mysqli_query($conn, "select * from blood  where bb_id='{$_SESSION['bb_id']}'");
   while($row = mysqli_fetch_assoc( $results )){

    $new=$row['count']-$_POST["count"];
}
    $sql2="UPDATE `blood` SET `count`=$new  WHERE bb_id='{$_SESSION['bb_id']}' and bgroup='".$_POST["bgroup"]."' ";
    $result= $mysqli->query($sql2);
   
    
    echo "New record created successfully";
} 


$mysqli->close();
header('Location: bank.php'); 
?>
   
}