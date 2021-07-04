<?php
    require "./includes/common.php";
    // get details
    
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    
    // hash password
    
    
   $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
   $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
   
  $num= mysqli_num_rows($result);
    
  if ($num>0){
    
    echo "<script>alert('Email already exists')</script>";
      echo ("<script>location.href='signup_page.php'</script>");
  } else if (!preg_match($regex_email, $email)) {
    echo '<script>alert("Not a Valid email id")</script>';
   header("location: signup_page.php");
  
  } else if (!preg_match($regex_num, $phone)) {
    echo '<script>alert("Not a Valid phone number")</script>';
    echo ("<script>location.href='signup_page.php'</script>");
  } else {
    
    $hashed_password = md5($password);
    $query = "INSERT INTO user (name, email, password, phone ) VALUES ('$name', '$email', '$hashed_password', '$phone')";
//    echo $query;
    mysqli_query($con, $query) or die(mysqli_error($con));
        $user_id= mysqli_insert_id($con);
        $_SESSION["email_id"] = $email;
        $_SESSION["user_id"] = $user_id;

        header("location:login_page.php ");
       
    }
  
   
?>