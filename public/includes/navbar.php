<div id="main-nav" class="navbar">
			<div class="container">
			
			  <div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
				  <!-- ======= LOGO ========-->
				  <a href="index.php" class="home-link">
						
					  <!--<img src="images/logo-text-only.png" alt="logo" class="site-logo" />-->
					  <span class="logo logo-big" style="margin-top: 5px;">BC CHERRY</span>
					  <span class="logo logo-small">ASSOCIATION</span>
					</a>
				
			</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="sr-only">
							<a href="index.php" class="scrollto">Home</a>
						</li>
						
						<li>
							<a href="our-cherries.php">Our Cherries</a>
						</li>
						
						<li><a href="sales-directory.php">Sales Directory</a></li>
						
						<li class="dropdown">
							<a href="#">Employment</a>
							<ul class="dropdown-menu">
								<li><a href="employment-info.php">Employment info</a></li>
								<li><a href="employment-directory.php">Who's Hiring</a></li>
								<li><a href="application-form.php">Application Form</a></li>
							</ul>
						</li>	
																		
						<li class="dropdown">
							<a href="#">BC Cherry Association</a>
							
							<ul class="dropdown-menu">
								<li><a href="about-us.php">About us</a></li>
								<!--<li><a href="member-list.php">Member List</a></li>-->
								<li><a href="membership.php">Membership</a></li>
								<li><a href="faq.php">FAQs</a></li>
								<li><a href="news.php">News</a></li>
								<li><a href="links.php">Links</a></li>
								@if (Route::has('login'))
								<div class="top-right links">
									@if (Auth::check())
									<a href="{{ url('/home') }}">Home</a>
									@else
									<a href="{{ url('/login') }}">Login</a>
									<a href="{{ url('/register') }}">Register</a>
									@endif
								</div>
								@endif
								<li>
									<a href="members.php">Member Login</a>
								</li>	
								<li><a href="index.php#contact">Contact</a></li>
							
							</ul>
						</li>
						
						<li>
							<div id="google_translate_element"></div>
						</li>						
					</ul>
				</div><!--End navbar-collapse -->
				
			</div><!--End container -->
			
		</div>