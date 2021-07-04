<!DOCTYPE html>
<?php
	 
	require "./includes/common.php";
       
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ct&#8377;l Budget</title>
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
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We help you control your budget</h1>
                            
                            <br/>
                            <a  href="home.php" class="btn btn-success btn-lg active">Start Today</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
            <!--Main banner image end-->

          

        <!--Footer-->
       <footer style="position: relative;bottom: 0px;">
            <div class="container" >
                <center>
                   
                    <p>Copyright © Control Budget. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
        <!--Footer end-->

    </body> 
</html>