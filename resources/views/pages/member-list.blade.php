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
</style>
</head>
  
	<body class="inner-page">
	
		<!--=== PAGE PRELOADER ===-->
		<div id="page-loader"><span class="page-loader-gif">Loading Post...</span></div>
		
		<?php include("includes/navbar.php") ?>

		<section class="white-bg padding-top-bottom">
		
			<div class="container">
			
				<div class="row">
				
					<div id="single-post" class="col-sm-8">
					
						<article class="post-entry">
						
							<header class="post-header">
								<h2 class="post-title">About us</h2>
							</header>
							
							<section class="white-bg">
									  
								<div class="row">
									<div class="col-sm-12 content">
										<header class="post-header">
											<ul class="post-meta small">
												<li><i class="fa fa-calendar"></i><a href="#">26 October 2016</a></li>
												<li><i class="fa fa-folder-open-o"></i><a href="#">Association info</a></li>
											</ul>
										</header>
									</div>
								</div>		
								   
								<div class="row">
									<div class="content">
										<p>Coming soon...</p>	
									</div>
								</div>
							
							</section>
						
						</article>
						
					</div>
					
					<?php include("includes/association_side_menu.php") ?>
					
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