 

 <?php
	 /* connection to database */
	require "./includes/common.php";
        require("includes/session.php");
        $user_id=$_SESSION['user_id'];
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>New Plan | Ct&#8377;l Budget</title>
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
		?>

        <div class="row">
            <div class="container">
                <div class="col-md-offset-4 col-md-5 ">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #449d44; color: white">
                            <h3 style="margin-left: 100px;">Create New Plan</h3>
 <!-- Code to add new plan --></div>
                        <div class="panel-body">
                            <form role="form" action="create_new_plan_script.php?plan_id=<?php echo $row['plan_id'];?> " method="POST">
                                <div class="form-group">
                                    <label >Intial Budget</label>
                                    <input type="number" min="50" name="inital_budget" placeholder="Intial Budget (Ex:4000)" class="form-control" required="true">
                                </div>  
                                <div class="form-group">
                                    <label>How many people you want to add in your group ?</label>
                                    <input type="number" name="no_of_people" min="1" placeholder="No.of People" class="form-control" required="true">
                                </div>  
                                
                                <button type="submit" name="submit" id="btn" class="btn btn-block btn-default" style="border-color: #449d44; color: #449d44">Next</button>
                                    
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
                
        <!-- Footer -->
        
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
