<?php

require("includes/common.php");
require("includes/session.php");

 $plan_id=$_GET['plan_id'];
 $user_id=$_SESSION['user_id'];

$title = $_POST['title'];
$start_date= $_POST['start_date'];
$end_date= $_POST['end_date'];
$intial_budget=$_POST['intial_budget']; 
$no_of_people=$_POST['no_of_people'];
$remaining_amount=$_POST['intial_budget'];

$query = "INSERT INTO plan_details (title, start_date, end_date,intial_budget,no_of_people,user_id,remaining_amount ) VALUES ('$title', '$start_date', '$end_date', '$intial_budget','$no_of_people','$user_id','$remaining_amount')";
mysqli_query($con, $query) or die(mysqli_error($con));
$plan_id= mysqli_insert_id($con);

for($x=1;$x<=$no_of_people;$x++){
    $person_name=$_POST['person'.$x];
    
    $query1="INSERT INTO plans_users (plan_id,name) VALUES ('$plan_id','$person_name')";
    mysqli_query($con, $query1) or die(mysqli_errno($con));
}
header('location:home.php');

?>