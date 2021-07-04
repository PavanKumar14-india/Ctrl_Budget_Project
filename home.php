 <?php
	
	require "./includes/common.php";
       
       require("includes/session.php");
       
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Ct&#8377;l Budget</title>
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
		$query= "select * from plan_details where user_id=$id_session";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if($num==0){
                       
                        ?>
        
        
             <div class='container'>
                    <h3>You don't have any active plans</h3>
              </div>
              
                    <div class='col-sm-offset-4 col-sm-2 panel panel-default' style='position: relative; top:80px; height: 180px;'>
                        <div class='panel-body'>
                            <a href="create_new_plan.php" style='position: relative; top:65px; left:30px;'> <span style="background-color:green; color: white; padding: 2px 2px; " class="glyphicon glyphicon-plus-sign"></span> Create a New Plan</a>
                        </div>
                    </div>
                <?php }
 else {   ?>
             <h2 style="margin-left: 110px;">Your Plans <?php  echo $num; ?></h2>
             <div class="content">
              <div class="container-fluid">
                  <div class="row">
                  <?php while($row = mysqli_fetch_array($result)){?>
                          
                    <div class=" col-md-offset-1 col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #449d44; color: white">
                                <h3><?php echo $row['title']; ?>&nbsp;<span class="glyphicon glyphicon-user" style="float:right">&nbsp; <?php echo $row['no_of_people']; ?></span></h3>
                            </div>
                            
                                         <div class="panel-body">
                                             <label>Budget</label> <span  style="float:right">&nbsp; &#8377;<?php echo $row['intial_budget']; ?></span> <br><br>
                                             <label>Date</label>  <span  style="float:right">&nbsp;<?php echo $row['start_date']; ?></span> <br><br>
                                              
                                             <a class="btn btn-block btn-default" style="border-color: #449d44; color: #449d44" href="view_plan.php?plan_id=<?php echo $row['plan_id']; ?>">View</a>
                                             
                                        </div>
                            
                            </div>
                        </div>
                           
                    
          <?php  } ?>
                  </div> 
              </div>  
        </div>
             <div class="row" style="position: relative; top: 100px;">
                                    <div class="col-md-offset-11 col-md-1">
                                        <a href="create_new_plan.php" style="color: green">  <span class="glyphicon glyphicon-plus-sign" style="font-size: 50px"></span></a>
                                    </div>   
          </div>
<?php }?>
               
      <?php
			require './includes/footer.php';
		?>
 
    </body>
</html>

