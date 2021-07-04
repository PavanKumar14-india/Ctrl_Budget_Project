 
 <!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Ct&#8377;l Budget</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
         <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default" >
                            <div>
                                <center> <h4>LOGIN</h4> </center>
                            </div>
                            <div class="panel-body">
                                 
                                <form role="form" action="login_script.php" method="POST">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-block btn-success" style="margin-bottom: 0px;">Login</button><br><br>
                                </form> 
                            </div>
                            <div class="panel-footer" style="  position:absolute; top:240px; padding-left: 70px; padding-right: 65px; margin-top: 10px; padding-bottom: 1px;"><p>Don't have an account? <a href="signup_page.php">Click here to Sign Up</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>
                    <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Control Budget.
		All Rights Reserved | Contact Us: +91 8448444853</p>	
                </center>
            </div>
        </footer>
    </body>
</html>
