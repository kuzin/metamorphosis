<?
/**
 * Metamorphosis Initial Development
 * Front end code, by Mike Kuzin
 **/
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>
            Metamorphosis Salon &amp; Spa » Home
        </title>

        <meta name="description" content="">
        <meta name="keywords" content="">

        <meta name="author" content="humans.txt">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/styles.css?v=1" />
        <link rel="stylesheet" href="assets/css/nivo-slider.css" />
        <link rel="stylesheet" href="assets/js/libs/themes/default/default.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dancing+Script:regular,bold" />

        <script type="text/javascript" src="assets/js/libs/modernizr-1.7.min.js"></script>

    </head>

    <body>
        <header id="main">
            <nav>
                <ul>
                    <li class="selected"><a href="/" id="home">Home</a></li>
                    <li><a href="services.php" id="services">Services</a></li>
                    <li><a href="about.php" id="about">About</a></li>
                    <li><a href="contact.php" id="contact">Contact</a></li>
                </ul>
            </nav>
            <a href="/" id="logo">Metamorphosis Salon &amp; Spa</a>
        </header>
        <style type="text/css" media="screen">
            #home-content {
                background: rgba(0,0,0,0.5);
                width: 800px;
                height: 350px;
            }
        </style>
        <section id="home-content">
        </section>
        <footer>
            <div id="footer-left">
                <div id="footer-left-container">
                    <a href="http://maps.google.com/maps?q=5112+Butler+Street,+Pittsburgh,+PA&hl=en&sll=37.0625,
                    -95.677068&sspn=37.052328,79.013672&t=h&z=16">
                    <img src="http://maps.google.com/maps/api/staticmap?center=5112+Butler+Street+
                    Lawrenceville+PA+15201+15626&zoom=16&size=210x80&sensor=false&markers=color:red|
                    5112+Butler+Street|label:%E2%80%A2|" alt="google+map"/></a>
                    <p class="first-row">
                        5112 Butler Street<br />
                        Lawrenceville, PA 15201
                    </p>
                    <a href="#" class="button">Get Directions</a>
                    <hr/>
                    <p>
                        Open Monday &ndash; Saturday<br/>
                        9 am &ndash; 5pm
                    </p>
                </div>
            </div>
            <div id="footer-right">
                <div id="footer-right-container">
                    <div id="footer-right-left">
                        <p id="contact-blurb">
                            412.555.1212<br/>
                            info@spapgh.com<br/>
                            <a href="#" class="social" id="twitter">Twitter</a>
                            <a href="#" class="social" id="facebook">Facebook</a>
                            <a href="#" class="social" id="flickr">Flickr</a>
                        </p>
                        <a href="#" class="button">Schedule an Appointment</a>
                    </div>
                    <p id="tweet-blurb">
                        Maecenas faucibus mollis interdum. <span>#DuisMollisEstNon</span> Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros. Duis mollis, est non commodo.
                    </p>
                    <div class="clearfix"></div>
                </div>
                <div id="footer-right-footer">
                    <a href="/" class="small-logo">Metamorphosis Salon &amp; Spa</a>
                    <p>
                        Content &copy; 2011 Metamorphosis. All Rights Reserved.<br />
                        Design by <a href="http://www.kuzn.me">Kuzin</a>.
                    </p>
                </div>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script>
            !window.jQuery && document.write(
                unescape(
                    '%3Cscript src="assets/js/libs/jquery-1.5.1.js"%3E%3C/script%3E'
                )
            )
        </script>
        <script type="text/javascript" src="assets/js/libs/jquery.nivo.slider.pack.js"></script>
        <script src="assets/js/script.js"></script>
        <!--[if lt IE7]>
            <script src="assets/js/libs/dd_belated.js"></script>
            <script>DD_belatedPNG.fix('img, .png_bg');</script>
        <![endif]-->
        <script>

            $(window).load(function(){
                $('#slider').nivoSlider();
            });

            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    		s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>