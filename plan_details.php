<?php
        require("includes/common.php");
          require("includes/session.php");
$budget=$_GET['budget']; 
$nop=$_GET['nop'];
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plan Details | Ct&#8377;l Budget</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <style>
 

        </style>
    </head>
     <body style="padding-top: 50px;">
        <!-- Header -->
       <?php
			require './includes/header.php';
                       
        ?>
        
        <div class="row">
            <div class="container">
                <div class="col-md-offset-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="plan_details_script.php  " method="POST">
                                <div class="form-group">
                                    <label class="">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Ex: Trip to Goa" name="title" required="true"> 
                                </div>   
                                <div class="row" >
                                             <div class=" col-md-6 form-group" >
                                             <label class="">From</label>
                                             <input type="date" class="form-control" name="start_date" min="2019-04-01" max="2021-12-12" placeholder="dd/mm/yyyy" name="start_date" required="true"> 
                                             </div>  
                                    
                                             <div class="col-md-6 form-group">
                                             <label class="">To</label>
                                             <input type="date" class="form-control" name="end_date" min="2019-04-01" max="2021-12-12" placeholder="dd/mm/yyyy" name="end_date" required="true"> 
                                             </div>  
                                </div>
                                <div class="row">
                                    
                                                <div class="col-md-9 form-group">
                                                    <label class="">Intial Budget</label>
                                                    <input type="number" class="form-control"  value="<?php echo $budget; ?>"   name="intial_budget" required="true" readonly="true"> 
                                               </div>
                                               
                                                <div class="col-md-3 form-group">
                                                    <label>No.of people</label>
                                                    <input type="number" class="form-control" value="<?php echo $nop; ?>"   name="no_of_people" required="true" readonly="true"> 
                                                </div>  
                                </div>
                                <?php for( $x=1;$x<=$nop;$x++){ ?>
                                    
                                
                                <div class="form-group">
                                    <label>Person <?php echo $x; ?></label>
                                    <input type="text" class="form-control" name="person<?php echo $x; ?>" placeholder="<?php echo "Person".$x; ?>" required="true">
                                    
                                </div>
                                 
                                <?php } ?>
                                <button type="submit" class="btn btn-block btn-default" style="border-color: #449d44; color: #449d44">Submit</button>
                                    
                            </form> 
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <footer style="position: absolute;bottom: 0px;">
            <div class="container" >
                <center>
                    <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Control Budget.
		All Rights Reserved | Contact Us: +91 8448444853</p>
                </center>
            </div>
        </footer>
     </body>
 </html>