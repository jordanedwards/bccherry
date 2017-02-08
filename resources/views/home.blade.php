<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

    @include('includes.head')

    <style>
        .clients .client {
            max-height: 150px;
            margin: 0 auto 0;
            padding: 10px;
            max-width: none;
            /* overflow: hidden; */
        }
        .color-bg-cta {
            border-top: 2px solid #A21418;
            border-bottom: 2px solid #A21418;
        }
        .client img {
            max-height: 100px;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#main-nav" data-offset="400">

<!--=== PAGE PRELOADER ===-->
<div id="page-loader"><span class="page-loader-gif">Loading...</span></div>

<!-- ==============================================
HEADER
=============================================== -->
<header id="home" class="parallax-bg" data-parallax-background="/images/cherry2.jpg" data-stellar-background-ratio=".3">

    <div class="header-content">

        <img src="/images/okcga-top-logo.png" alt=""  class="header-logo"/>

        <div class="flexslider header-slider" data-speed = '3000'>

            <ul class="slides">
                <li><h1 class="bordered-text">Welcome to <span class="primary">BC Cherry</span> </h1></li>
            </ul>
        </div><!--End home-slider -->

        <a class="scroll-button scrollto" href="#about"><i class="fa fa-angle-down" style="    color: #222;"></i></a>			</div>

    <!--<a class="btn btn-quattro" style="
        position: absolute;
        z-index: 50001;
        bottom: 20px;
        right: 10%;
        width: 250px;
        white-space: normal;
    ">Buying Cherries? Click here</a>-->

</header><!--End header -->

@include('includes.navbar')

<section id="about" class="gray-bg padding-top-bottom">

    <div class="container">

        <h1 class="section-title">About the BC Cherry Association</h1>
        <p class="section-description">The BC Cherry Association (BCCA) represents growers, marketers, packers, researchers and industry members. The BCCA sponsors research to grow and deliver top quality cherries to markets around the world. We also work to promote and strengthen marketing opportunities.</p>

        <img class="img-responsive img-center scrollimation fade-up" src="images/cherry-hero.png" alt="" />

        <div class="row">

            <div class="col-sm-4">
                <div class="features">
                    <h1>Our research</h1>
                    <p>The BCCA supports research projects that help advance the cherry industry. Successful projects on pest control, post harvest handling, breeding, and disease suppression are examples of work done in past. </p>
                    <a class="btn btn-quattro" href="our-research">Read more</a>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="features">
                    <h1>Our Marketing</h1>
                    <p>The BCCA works with the Canadian Food Inspection Agency and the BC Ministry of Agriculture to administer export programs. We also act as the industry body when negotiating market access for new cherry export deals. </p>
                    <a class="btn btn-quattro" href="our-marketing">Read more</a>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="features">
                    <h1>Grower resources</h1>
                    <p>It is currently membership renewal time! More information will be available under this tab in the near future. In the meantime, click below to find the membership form. </p>
                    <a class="btn btn-quattro" href="grower-resources">Read more</a>
                </div>
            </div>

        </div><!--End row-->

    </div><!--End container -->

</section><!--End Call to Action -->


<section id="clients" class="color-bg-cta">

    <div class="container">

        <div class="row clients">

            <div class="col-sm-6 col-md-6">

                <div class="client">
                    <a href="#"><img class="img-responsive img-center" src="images/program-funding-by.png" alt=""></a>
                </div>

            </div>

            <div class="col-sm-6 col-md-6">

                <div class="client">
                    <a href="#link"><img class="img-responsive img-center" src="images/North-Central-Agriculture7.jpeg" alt=""></a>
                </div>

            </div>


        </div><!-- End row -->

    </div><!-- End container -->

</section>
<!-- ==============================================
NEWS
=============================================== -->
<section id="news" class="white-bg padding-top-bottom">

    <h1 class="section-title">Latest News</h1>

    <div class="container">

        <div class="row">

            <article class="col-sm-6 post-entry">

                <header class="post-header">

                    <h2 class="post-title"><a href="image-post.html" title="Read post: Post with single featured image">Call for Proposals: Research 2016</a></h2>

                    <ul class="post-meta small">
                        <li><i class="fa fa-calendar"></i><a href="#">Dec 30, 2015</a></li>
                        <li><i class="fa fa-comments-o"></i><a href="#">14 Comments</a></li>
                        <li><i class="fa fa-folder-open-o"></i><a href="#">Cherry Industry News</a> , <a href="#">Funding Opportunities</a></li>
                    </ul>
                </header>

                <p>The BCCA Research Committee is accepting research project proposals until January 15th, 2016. Limited, secure funding is available to established and new projects.</p>

                <a class="post-link" href="post/12" title="Read post: Post with single featured image">Continue Reading</a>

            </article>

            <article class="col-sm-6 post-entry">

                <header class="post-header">

                    <h2 class="post-title"><a href="slider-post.html" title="Read post: Post with featured slider">AGM February 23rd 2016</a></h2>

                    <ul class="post-meta small">
                        <li><i class="fa fa-calendar"></i><a href="#">Nov 30, 2015</a></li>
                        <li><i class="fa fa-comments-o"></i><a href="#">14 Comments</a></li>
                        <li><i class="fa fa-folder-open-o"></i><a href="#">Cherry Industry News</a></li>
                    </ul>
                </header>

                <p>The BCCA AGM will be held on February 23rd at the Rutland Centennial Hall. Our event will begin at 8am with breakfast and continue through until lunch. Everyone is welcome.</p>

                <a class="post-link" href="post/13" title="Read post: Post with featured slider">Continue Reading</a>

            </article>

        </div>

        <p class="text-center"><a class="btn btn-quattro" href="news">News Archives</a></p>

    </div>

</section>

<!-- ==============================================
CALL TO ACTION
=============================================== -->
<section class="color-bg light-typo cta fadeInLeftBig">

    <div class="container">

        <div class="row scrollimation fade-right">
            <div class="col-md-9 cta-message">
                <p><strong style="display:block">Looking for work?</strong> Apply online to 35 Okanagan valley growers at the same time, right here.</p>
            </div>
            <div class="col-md-3 cta-button">
                <p class="text-center"><a class="btn btn-quattro transparent" href="application-form.php">Apply Here</a></p>
            </div>
        </div><!--End row-->

    </div><!--End container -->

</section><!--End Call to Action -->

<!-- ==============================================
CONTACT
=============================================== -->
<section id="contact" class="gmap-bg light-typo padding-top-bottom">

    <div class="container">

        <h1 class="section-title">Get in Touch</h1>

        <div class="row margin-bottom">

            <!--					<div class="col-sm-3 col-sm-offset-1 text-center contact-item scrollimation fade-up">

                                    <div class="icon"><i class="fa fa-phone fa-fw"></i></div>
                                    <h2>Phone</h2>
                                    <p>250.488.7448</p>
                                </div> -->

            <div class="col-sm-6 col-md-4 col-md-offset-2 text-center contact-item scrollimation fade-up d1">

                <a class="icon" href=""><i class="fa fa-envelope fa-fw"></i></a>
                <h2>Email</h2>
                <p></p>
            </div>

            <div class="col-sm-6 col-md-4 text-center contact-item scrollimation fade-up d2">

                <a class="icon" href="http://goo.gl/maps/0m7WQ" target="_blank"><i class="fa fa-map-marker fa-fw"></i></a>
                <h2>Mail</h2>
                <p>PO Box 987 <br/>Summerland, BC, Canada<br>V0H 1Z0</p>
            </div>
        </div>

        <div class="row">

            <!--=== Contact Form ===-->

            <form id="contact-form" class="col-sm-8 col-sm-offset-2" action="contact.php" method="post" novalidate>

                <div class="form-group">
                    <label class="control-label" for="contact-name">Name</label>
                    <div class="controls">
                        <input id="contact-name" name="contactName" placeholder="Your name" class="form-control requiredField" type="text" data-error-empty="Please enter your name">
                    </div>
                </div><!-- End name input -->

                <div class="form-group">
                    <label class="control-label" for="contact-mail">Email</label>
                    <div class=" controls">
                        <input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
                    </div>
                </div><!-- End email input -->

                <div class="form-group">
                    <label class="control-label" for="contact-message">Message</label>
                    <div class="controls">
                        <textarea id="contact-message" name="comments"  placeholder="Your message" class="form-control requiredField" rows="8" data-error-empty="Please enter your message"></textarea>
                    </div>
                </div><!-- End textarea -->

                <p class="text-center"><button name="submit" type="submit" class="btn btn-quattro" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button></p>
                <input type="hidden" name="submitted" id="submitted" value="true" />
            </form><!-- End contact-form -->
        </div>
    </div>

</section>

@include('includes.footer')

@include('includes.scripts')

<script type="text/javascript" src='/assets/js/jquery.flexslider.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery.stellar.js'></script>
<script type="text/javascript" src="/assets/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints-sticky.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.countTo.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/assets/js/contact.js"></script>

</body>

</html>