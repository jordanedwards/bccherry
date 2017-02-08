<div id="main-nav" class="navbar">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <!-- ======= LOGO ========-->
            <a href="/" class="home-link">

                <!--<img src="images/logo-text-only.png" alt="logo" class="site-logo" />-->
                <span class="logo logo-big" style="margin-top: 5px;">BC CHERRY</span>
                <span class="logo logo-small">ASSOCIATION</span>
            </a>

        </div>

        <div id="site-nav" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="sr-only">
                    <a href="/" class="scrollto">Home</a>
                </li>

                <li>
                    <a href="/our-cherries">Our Cherries</a>
                </li>

                <li><a href="/sales-directory">Sales Directory</a></li>

                <li class="dropdown">
                    <a href="#">Employment</a>
                    <ul class="dropdown-menu">
                        <li><a href="/employment-info">Employment info</a></li>
                        <li><a href="/employment-directory">Who's Hiring</a></li>
                        <li><a href="/application-form">Application Form</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">BC Cherry Association</a>

                    <ul class="dropdown-menu">
                        <li><a href="/about-us">About us</a></li>
                        <!--<li><a href="member-list.php">Member List</a></li>-->
                        <li><a href="/membership">Membership</a></li>
                        <li><a href="/faq">FAQs</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/links">Links</a></li>
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
                            <a href="/members">Member Login</a>
                        </li>
                        <li><a href="/contact">Contact</a></li>

                    </ul>
                </li>

                <li>
                    <div id="google_translate_element"></div>
                </li>
            </ul>
        </div><!--End navbar-collapse -->

    </div><!--End container -->

</div>