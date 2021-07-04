<?php

require("includes/common.php");
  require("includes/session.php");
  
$budget = $_POST['inital_budget'];
$budget = mysqli_real_escape_string($con, $budget);
$no_of_people= $_POST['no_of_people'];
$no_of_people = mysqli_real_escape_string($con, $no_of_people);
  
header('location: plan_details.php?budget='.$budget.'&nop='.$no_of_people);

?>
