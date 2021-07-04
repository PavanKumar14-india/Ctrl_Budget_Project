<?php

require("includes/common.php");
 

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);
// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
 
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.

if ($num ==0) {
     echo "<script>alert('There is no user with such Email_id or the Password is wrong')</script>";
     echo ("<script>location.href='login_page.php'</script>");
} else {  
    session_start();
  $row = mysqli_fetch_array($result);
  $_SESSION['email_id'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: home.php');
}


