<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root','', 'project');


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    if (mysqli_num_rows($results) >= 1 && $row['type']=="patient" ) {
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $row['id'];
        $_SESSION['type'] = "patient
        ";
      $_SESSION['success'] = "You are now logged in as patient";
      header("location:index.php");
    }else if (mysqli_num_rows($results) >= 1 && $row['type']=="bank" ) {
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $row['id'];
      $_SESSION['type'] = "bank";
      $_SESSION['success'] = "You are now logged in as bank";
      header("location:bank.php");
    }
      else 
      if (mysqli_num_rows($results) >= 1 && $row['type']=="donar" ) {
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $row['id'];
        $_SESSION['type'] = "donar";
      $_SESSION['success'] = "You are now logged in as donar";
      header("location:donar.php");
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


?>