<?php
 /* connection to database */
require("includes/common.php");
require("includes/session.php");
$plan_id=$_GET['plan_id'];
?> 
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expense dist | Ct&#8377;l Budget</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
      </head>
      
     <body style="padding-top: 50px;">
        <!-- Header -->
       <?php
			require './includes/header.php';
                        $query="select * from plan_details where plan_id=$plan_id  ";
                        $query1="select * from expense where plan_id=$plan_id  ";
                        
                        $result= mysqli_query($con, $query);
                        $row= mysqli_fetch_array($result);
                        
                        $result1= mysqli_query($con, $query1);
                        $row1= mysqli_fetch_array($result1);
                        
        ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #449d44; color: white">
                            <h4 style="padding-left: 250px;"><?php echo $row['title'] ; ?>&nbsp;<span class="glyphicon glyphicon-user" style="float:right">&nbsp<?php echo $row['no_of_people'] ; ?></span></h4>
                            
                        </div>
                        
                        <div class="panel-body">
                                             <label>Intial Budget</label> <span  style="float:right">&nbsp; &#8377;<?php echo $row['intial_budget']; ?></span> <br><br>
                                             <?php 
                                                $query3= "select * from plans_users where plan_id=$plan_id";
                                                $result3 = mysqli_query($con, $query3)or die($mysqli_error($con));
                                                
                                             while($row3 = mysqli_fetch_array($result3))
                                            {?>
                                             <label><?php echo $row3['name']; ?></label>  <span  style="float:right">&nbsp; &#8377;<?php echo $row3['total_expense']; ?></span> <br><br>
                                             <?php } ?>
                                             
                                            
                                              <label>Total Amount spent</label>  <span  style="float:right">&nbsp; &#8377;<?php echo $row['intial_budget']-$row['remaining_amount']; ?></span> <br><br>
                                              <label>Remaining Amount</label><?php if($row['remaining_amount']==0){?><span  style="float:right;color: black;"  >&nbsp; &#8377;<?php echo $row['remaining_amount'] ;  ?></span> <?php }
                                            else if($row['remaining_amount']>0) {?><span  style="float:right;color: green;"  >&nbsp; &#8377;<?php echo $row['remaining_amount'] ;  ?></span>
                                            <?php } else{ ?>
                                                <span  style="float:right;color: red;"  >&nbsp; &#8377;<?php echo $row['remaining_amount'] ;  ?></span>
                                                
                                            <?php } 
                                                ?>  
                                                
                                             <br><br>
                                                
                                                
                                             <label>Individual share</label>  <span  style="float:right">&nbsp; &#8377;<?php echo number_format(($row['intial_budget']-$row['remaining_amount'])/$row[no_of_people],2); ?></span> <br><br>
                                              <?php 
                                              $sharing=($row['intial_budget']-$row['remaining_amount'])/$row[no_of_people];
                                             $query3= "select * from plans_users where plan_id=$plan_id";
                                                $result3 = mysqli_query($con, $query3)or die($mysqli_error($con));
                                                
                                             while($row3 = mysqli_fetch_array($result3))
                                            { $ind_sharing=$row3['total_expense']-$sharing;
                                                 if($ind_sharing==0){ ?>
                                             <label><?php echo $row3['name']; ?></label>  <span  style="float:right;color:black">&nbsp; &#8377;<?php echo number_format($ind_sharing,2); ?></span> <br><br>
                                            <?php } else if($ind_sharing>0) {?>
                                            <?php echo $row3['name']; ?></label>  <span  style="float:right;color:green">&nbsp;Gets Back &#8377;<?php echo number_format($ind_sharing,2); ?></span> <br><br><?php } else {?>
                                            <?php echo $row3['name']; ?></label>  <span  style="float:right;color:red">&nbsp; Owes &#8377;<?php echo number_format($ind_sharing,2); ?></span> <br><br><?php }} ?>
                                              <a class="btn  btn-default" style="border-color: #449d44;color: #449d44; margin-left:270px; " href="view_plan.php?plan_id=<?php echo $plan_id; ?>"><span class="glyphicon glyphicon-arrow-left"></span>Go back</a>                
                                                                                                                                          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer -->  
       <footer style="position: relative;bottom: 0px;">
            <div class="container" >
                <center>
                    <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Control Budget.
		All Rights Reserved | Contact Us: +91 8448444853</p>
                </center>
            </div>
        </footer>
     </body>
 </html>
