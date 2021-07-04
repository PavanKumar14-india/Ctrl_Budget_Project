<?php
require("includes/common.php");
require("includes/session.php");
$plan_id=$_GET['plan_id'];
if($_GET['nodate']){
    $nodate=$_GET['nodate'];
}
?> 

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Plans | Ct&#8377;l Budget</title>
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
         <div>
        <!-- Header -->
       <?php
			require './includes/header.php';
                        $query= "select * from plan_details where plan_id=$plan_id";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $row = mysqli_fetch_array($result);
        ?>
        
        <div class="container-fluid" style="margin-top: 20px;">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-5">
                    <div class="panel panel-default">
                          <?php if($_GET['nodate']){ ?>
                              <div class="panel-heading" style="background-color: #449d44; color: white">
                                <h5 style="  background-color: red; font-size: 50px;">Give Proper Date</h5>
                                </div>
                           <?php }?>
                        
                        <div class="panel-heading" style="background-color: #449d44; color: white">
                            <h3 style="padding-left: 150px;"><?php echo $row['title']; ?>&nbsp;<span class="glyphicon glyphicon-user" style="float:right">&nbsp<?php echo $row['no_of_people']; ?></span></h3>
                        </div>
                        
                         <div class="panel-body">
                                            <label>Budget</label> <span  style="float:right">&nbsp; &#8377;<?php echo $row['intial_budget'];  ?></span> <br><br>
                                            <label>Remaining Amount</label> <?php if($row['remaining_amount']==0){?><span  style="float:right;color: black;"  >&nbsp; &#8377;<?php echo $row['remaining_amount'] ;  ?></span> <?php }
                                            else if($row['remaining_amount']>0) {?><span  style="float:right;color: green;"  >&nbsp; &#8377;<?php echo $row['remaining_amount'] ;  ?></span>
                                            <?php } else{ ?>
                                                <span  style="float:right;color: red;"  >&nbsp; &#8377;<?php echo $row['remaining_amount'] ;  ?></span>
                                                
                                            <?php } 
                                                ?><br><br>
                                             <label>Date</label>  <span  style="float:right">&nbsp;<?php echo $row['start_date'] ; ?></span> <br><br>
                                             
                         </div>
                            
                        
                    </div>
                    
                </div>
                
                <div class="  col-lg-2" style="position: relative; top: 110px; left:65px; ">
                    <a href="expense_distribution.php?plan_id=<?php echo $row['plan_id'];?> "class="btn btn-block btn-default" style="padding: 10px 10px; border-color: #449d44; color: #449d44">Expense Distribution</a>
                       
                </div>
                
            </div>
      </div>

            
            <div class="row">
              <?php    $query2= "select * from expense where plan_id=$plan_id";
                          $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
                           $num2= mysqli_num_rows($result2);
                           if($num2>0){
                 ?>         
                    <div class="col-lg-6">
                        <div class="row">
                            <?php while($row2 = mysqli_fetch_array($result2)){?>
                        <div class="col-sm-5">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #449d44; color: white">
                                <h5><?php echo $row2['title_exp']; ?></h5>
                            </div>
                             <div class="panel-body">
                                            <label>Amount</label> <span  style="float:right">&nbsp; &#8377;<?php echo $row2['amount_spent']; ?></span> <br><br>
                                             <label>Paid By</label> <span  style="float:right">&nbsp;<?php echo $row2['payment']; ?></span> <br><br>
                                             <label>Paid on</label>  <span  style="float:right">&nbsp;<?php echo $row2['date']; ?></span> <br><br>
                                             <div style="color: #286090"><center>You Don't have Bill</center></div>
                             </div>                   
                         </div>
                        </div>
                            <?php } ?> 
                            
                                 
                        </div>
                    </div>
                           <?php }else { ?>    
                                 <div class="col-lg-6"></div>
                            
                           <?php } ?>
                
                
             <!--    !-->
                <div class="col-lg-6">
                    <div class="col-lg-offset-1 col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #449d44; color: white">
                            <p style="padding-left: 150px;"> Add New Expense</p>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="view_plan_script.php?plan_id=<?php echo $plan_id; ?>" method="POST">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Expense Name" name="title" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Amount Spent</label>
                                    <input type="number" class="form-control" min="0" placeholder="Amount Spent" name="amount_spent" required="true">
                                </div>
                 
                                <div class="form-group">
                                    <select class="form-select btn-block" style="padding: 5px 5px;" name="paid_by" required="true">
                                            <option value="0" selected>Choose</option>
                                            <?php   $query1= "select * from plan_details,plans_users where plan_details.plan_id=$plan_id and plans_users.plan_id=$plan_id";
                                                    $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                                                    while($dropone= mysqli_fetch_array($result1)){
                                                        echo '<option value="'.$dropone['name'].'">'.$dropone['name'].'</option>';
                                    } ?> 
                                             
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="file" class="form-control" name="uploadedimage" >
                                </div>
                                
                                <button type="submit" class="btn btn-block btn-default" style="border-color: #449d44; color: ">Add</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
               </div> 
            </div>
        </div>
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