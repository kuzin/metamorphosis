<?
/**
 * Metamorphosis Initial Development
 * Front end code, by Mike Kuzin
 **/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>
            Metamorphosis Salon &amp; Spa » Home
        </title>

        <meta name="description" content="Metamorphosis Salon and Day Spa features an impressive lineup of organic
            products and provides innovative and unique services for your health and beauty, located in Lawrenceville, PA.">
        <meta name="keywords" content="pittsburgh spa, spa pittsburgh, salon pittsburgh, salon, hair, manicure, spa,
            pittsburgh salon, lawrenceville salon, lawrenceville spa, haircut, color, haircolor, waxing, nail services,
            pedicure, body treatments, facials">

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

    <!--[if IE 6]>       <body class="ie6 ie">    <![endif]-->
    <!--[if IE 7]>      <body class="ie7 ie">    <![endif]-->
    <!--[if lte IE 8]>  <body class="ie8 ie">    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--> <body onunload=""> <!--<![endif]-->

        <header id="main">
            <nav>
                <ul>
                    <li class="selected"><a href="index.php" id="home">Home</a></li>
                    <li><a href="services.php" id="services">Services</a></li>
                    <li><a href="about.php" id="about">About</a></li>
                    <li><a href="contact.php" id="contact">Contact</a></li>
                </ul>
            </nav>
            <a href="/" id="logo">Metamorphosis Salon &amp; Spa</a>
        </header>

        <section id="home-content">
            <div id="home-slider-wrapper" class="slider-wrapper theme-default">
                <div id="home-slider" class="nivoSlider">
                    <img src="assets/img/home-1.png" />
                    <img src="assets/img/home-2.png" />
                    <img src="assets/img/home-3.png" />
                </div>
            </div>
        </section>

        <? include('includes/_footer.php'); ?>

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
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    		s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>