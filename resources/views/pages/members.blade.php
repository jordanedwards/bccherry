<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

	<?php include("includes/head.php") ?>
	
	<?php $active_menu_item = "sales-directory"; ?>

<style>
.odd {
	background:#ccc;
}
.directory-listing {
	margin: 5px;
	padding: 10px;
}
label {
	margin-bottom: 0px;
}
.orchardname {
    font-size: 1.4em;
}
.form-control{
	margin-bottom: 10px
}
.padding-top-bottom {
    padding: 100px 0;
}
</style>
</head>
  
	<body class="inner-page">
	
		<!--=== PAGE PRELOADER ===-->
		<div id="page-loader"><span class="page-loader-gif">Loading Post...</span></div>
		
		<?php include("includes/navbar.php") ?>

		<section class="white-bg padding-top-bottom">
		
			<div class="container">
			
			<div class="row">
        <div class="col-sm-4 col-sm-offset-4 login-table">
        		
          <h2 style="    text-align: center;">Please Login:</h2>
        <form id="form1" action="/webapp/actions/action_login_user.php" method="post">
        	<table style="width: 90%">
          <tbody><tr><td><input id="email" name="email" type="text" placeholder="Email" class="form-control"></td></tr>
          <tr><td><input id="password" name="password" type="password" placeholder="Password" class="form-control"></td></tr>
		  <input type="hidden" name="redirect" id="redirect" value="">
          </tbody></table>
		  <input type="submit" value="Login" class="btn btn-primary" style="margin-bottom: 5px">
        </form>
      	<a href="forgot_password.php">» Reset Your Password</a>
        </div>
      </div>

			</div>
			
		</section>
		
		<?php include("includes/footer_dark.php"); ?>
		<?php include("includes/scripts.php") ?>

		<script src='assets/js/jquery.flexslider.min.js'></script>
		<script src='assets/js/jquery.stellar.js'></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/waypoints-sticky.min.js"></script>
		<script src="assets/js/jquery.fitvids.js"></script>
		
	</body>
	
</html>