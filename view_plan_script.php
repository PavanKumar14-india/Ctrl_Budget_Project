<?php

require("includes/common.php");
require("includes/session.php");

$plan_id=$_GET['plan_id'];
$title = $_POST['title'];
$title = mysqli_real_escape_string($con, $title);
$amount_spent = $_POST['amount_spent'];
$date = $_POST['date'];
$paid_by = $_POST['paid_by'];  
$date = $_POST['date'];
$uploadedimage = $_POST['uploadedimage']; 
 
          
                
 
 $query10="select start_date,end_date from plan_details where plan_id=$plan_id";
 $result10= mysqli_query($con, $query10);
 $row10= mysqli_fetch_array($result10);
 if ($date>=$row10['start_date'] AND $date<=$row10['end_date']) 
 {
     
 
 $query = "INSERT INTO expense (title_exp, amount_spent, payment, plan_id,date,bill ) VALUES ('$title', '$amount_spent', '$paid_by', '$plan_id','$date','$uploadedimage')";
//    echo $query;
    mysqli_query($con, $query) or die(mysqli_error($con));
    $query2="select remaining_amount from plan_details where plan_id=$plan_id";
 $result2= mysqli_query($con, $query2);
 $row2= mysqli_fetch_array($result2);
 $amount2=$row2['remaining_amount']-$amount_spent;
 
 $query3 = "UPDATE plan_details SET remaining_amount = '$amount2' WHERE  plan_id = '$plan_id'";
       mysqli_query($con, $query3) or die(mysqli_errno($con));
       
 $query4="select amount_spent from expense where plan_id=$plan_id and payment='$paid_by'";
 $result5= mysqli_query($con, $query4);
 $total_expense= 0;
 
 while($row4 = mysqli_fetch_array($result5)){
    $total_expense= $total_expense + $row4['amount_spent'];
     
     
 }
 
 $query5 = "UPDATE plans_users SET total_expense = '$total_expense' WHERE  plan_id = '$plan_id' and name='$paid_by'";
       mysqli_query($con, $query5) or die(mysqli_errno($con));
  
       
  header('location: view_plan.php?plan_id='.$plan_id);

 
 }  
 else
 {
    header('location: view_plan.php?plan_id='.$plan_id.'&nodate=1'); 
 }
 

?>
