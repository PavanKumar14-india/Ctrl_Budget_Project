 
 <?php
	if(isset($_SESSION["id"])){
		header("location: home.php");
	}
	require "./includes/common.php";
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Ct&#8377;l Budget</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
			require "./includes/header.php";
		?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center>
                                <p>Sign Up</p>
                                </center>
                            </div>
                            <div class="panel-body">
                                <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="Name" name="name"  required>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" minlength="6" placeholder="Password" name="password" required="true">
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="text" class="form-control"  placeholder="Phone Number" maxlength="10" size="10" name="phone" required>
                            </div>
                             
                            <button type="submit" name="submit" class="btn btn-block btn-success">Submit</button>
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
