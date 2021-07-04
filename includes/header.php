<nav class="nav navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Ct&#8377;l Budget</a>
		</div>
		<div class="collapse navbar-collapse" id="mynavBar">
			<?php
				if(isset($_SESSION["email_id"])){ 
			?>
				<ul class="nav navbar-nav navbar-right">
                                    <li><a href="about_us.php"><span  ></span> &#9432; About Us</a></li>
                                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			<?php
				}else{
			?>
				<ul class="nav navbar-nav navbar-right">
                                    <li><a href="about_us.php"><span  ></span>&#9432; About Us</a></li>
                                    <li><a href="signup_page.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                                    <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			<?php
				}
			?>
		</div>
	</div>
</nav>
			