 

<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Change Password | Ct&#8377;l Budget</title>
		<link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>	
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
		<div class="container panel-margin">
                    <div class="row">
                        <div class="col-lg-offset-4 col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Change Password</h2>
				</div>
				<div class="panel-body">
                                    <form action="settings_script.php" method="post">
						<div class="form-group">
                                                    <label>Old Password</label>
							<input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
						</div>
						<div class="form-group">
                                                       <label>New Password</label>
							<input type="password" class="form-control" name="new_pass" placeholder="New Password (Min 6 character)" required>
						</div>
						<div class="form-group">
                                                        <label>Confirm Password</label>
							<input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required>
						</div>
						<button type="submit" class="btn btn-block btn-success">Change</button>
					</form>
				</div>
			    </div>
                            </div>
                        </div>
		</div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>