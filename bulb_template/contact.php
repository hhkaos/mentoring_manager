<?php include('includes/mailer.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>bulb - creative agency</title>
        <meta name="description" content="bulb is a creative agency that create websites, mobile apps & digital content">
        <meta name="author" content="Vincent Bianciotto">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Rouge+Script|Kaushan+Script' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 8]>
        <link rel="stylesheet" href="css/easycons-ie7.css">
        <![endif]-->
        
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/vendor/head.min.js"></script>
    </head>
    <body class="contact">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->        
        <div class="wrapper">
        
            <header class="header-wrapper">
                <div class="header container">
                    <div class="row">
                        <div class="span12">
                            <a href="./index.html" class="logo-top"><img src="images/logo.png" alt="bulb, creative agency" /></a>
                            <a href="#" class="toggle-mobilenav" id="toggleMobilenav"><i class="easycons-mobile-nav"></i></a>
                        </div>
                    </div>
                </div>
            </header>

            <nav class="menu-wrapper">
                <ul class="menu transitions">
                    <li>
                        <a href="./index.html" class="active">Home</a>
                        <ul class="sub-menu">
                            <li><a href="./index.html">Homepage 1 - without slider</a></li>
                            <li><a href="./homepage2.html">Homepage 2 - with a big slider</a></li>
                            <li><a href="./homepage3.html">Homepage 3 - with a small slider</a></li>
                            <li>
                                <a href="#">A sub-menu item</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Menu item 1</a></li>
                                    <li><a href="#">Menu item 2</a></li>
                                    <li><a href="#">Menu item 3</a></li>
                                    <li><a href="#">Menu item 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./portfolio1.html">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="./portfolio1.html">Portfolio 1 - 3 columns</a></li>
                            <li><a href="./portfolio2.html">Portfolio 2 - 2 columns</a></li>
                            <li><a href="./portfolio3.html">Portfolio 3 - Full width</a></li>
                            <li><a href="./project.html">Single project template</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./team1.html">Team</a>
                        <ul class="sub-menu">
                            <li><a href="./team1.html">Team template 1</a></li>
                            <li><a href="./team2.html">Team template 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./elements.html">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="./elements.html">Elements</a></li>
                            <li><a href="./features.html">Features</a></li>
                            <li><a href="./pricing.html">Plan & pricing</a></li>
                            <li><a href="./404.html">404 - Page not found</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="./post.html">Single post</a></li>
                        </ul>
                    </li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="page-heading-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="page-heading span12">
                            <h1>Get in touch</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h2 class="center">Follow Us</h2>
                        <h2 class="center tight light"><small>anywhere, anytime...</small></h2>
                        <ul class="huge-social">
                            <li><a href="#"><i class="easycons-google-plus"></i></a></li>
                            <li><a href="#"><i class="easycons-pinterest"></i></a></li>
                            <li><a href="#"><i class="easycons-vimeo"></i></a></li>
                            <li><a href="#"><i class="easycons-youtube"></i></a></li>
                            <li><a href="#"><i class="easycons-twitter"></i></a></li>
                            <li><a href="#"><i class="easycons-facebook"></i></a></li>
                            <li><a href="#"><i class="easycons-skype"></i></a></li>
                        </ul>                        
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="span6">
                        
                        <?php include('includes/form.php'); ?>
                        
                    </div>
                    <div class="span6">
                        <div class="contact-infos">
                            <h2>bulb <small>creative agency</small></h2>
                            <address>
                                <span><i class="easycons-marker"></i> 679 North Michigan Avenue, Chicago, IL, États-Unis</span>
                                <span><i class="easycons-headphones"></i> +1 312-529-9500</span>
                            </address>
                            <div id="gmap-contact"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="push"></div>
        </div> <!-- #wrapper -->

        <footer class="footer-wrapper">
            <div class="footer-slogan">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h4>You've got a new project in mind?</h4>
                        </div>
                        <a href="#" class="ribbon">
                            <span>Get started now!</span>
                        </a>
                        <div class="span6">
                            <h4>Or check out our <a href="#">portfolio</a>.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top container">
                <div class="row">
                    <div class="span4">
                        <h3><span>About Us</span></h3>
                        <p class="about-us-text">The great cat clawed at the shaggy head until eyes and ears were gone, and naught but a few strips of ragged, bloody flesh remained upon the skull.</p>
                    </div>
                    <div class="span4">
                        <h3><span>Last tweet</span></h3>
                        <p class="latest-tweet">Divshot: Bootstrap-based mockup interface builder for Web apps (in beta) - <a href="#">divshot.com</a> <span class="timeago">1 day ago</span><i class="easycons-twitter"></i></p>
                    </div>
                    <div class="span4">
                        <h3><span>Get in touch</span></h3>
                        <address>
                            <strong class="company">bulb creative agency</strong>
                            <p class="street">679 North Michigan Avenue, Chicago, IL, États-Unis</p>
                            <strong class="phone">+1 312-529-9500</strong>
                        </address>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="span8">
                            <span class="copyright">bulb creative agency <small>&copy; 2012</small></span>
                            <nav class="footer-menu">
                                <ul>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="span4">
                            <nav class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="easycons-facebook-rounded"></i></a></li>
                                    <li><a href="#"><i class="easycons-twitter-rounded"></i></a></li>
                                    <li><a href="#"><i class="easycons-google-plus-rounded"></i></a></li>
                                    <li><a href="#"><i class="easycons-vimeo-rounded"></i></a></li>
                                    <li><a href="#"><i class="easycons-pinterest-rounded"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script>
        head.js('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
        window.jQuery || head.js('js/vendor/jquery-1.8.3.min.js');
        head.js('js/script.js');
        head.js('js/vendor/gmaps.js', function(){
            new GMaps({
                div: '#gmap-contact',
                lat: -12.043333,
                lng: -77.028333
            });
        });
        head.js('js/vendor/retina.js');
    </script>

    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>