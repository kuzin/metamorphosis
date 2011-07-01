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
                    <li><a href="/" id="home">Home</a></li>
                    <li><a href="services.php" id="services">Services</a></li>
                    <li><a href="about.php" id="about">About</a></li>
                    <li class="selected"><a href="contact.php" id="contact">Contact</a></li>
                </ul>
            </nav>
            <a href="/" id="logo">Metamorphosis Salon &amp; Spa</a>
        </header>
        <section id="meta-inside">
            <header>
                <h1>Contact us</h1>
            </header>

            <div class="content" style="padding-bottom: 40px;">
                <h2 class="about-title" style="margin-top:-18px">Send us an email</h2>
                <hr />
                <form id="contact-form" name="contact-form" method="get" action="">
                    <input type="text" id="name" name="name" value="Name" />
                    <input type="text" id="email" name="email" value="Email" />
                    <textarea id="message" name="message">Message</textarea>
                </form>
                <a href="#" id="form_btn" class="button" style="margin-top:15px">Submit</a>
            </div>
            <div class="section-footer"></div>

        </section>

        <?= include('includes/_footer.php') ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script>
            !window.jQuery && document.write(
                unescape(
                    '%3Cscript src="assets/js/libs/jquery-1.5.1.js"%3E%3C/script%3E'
                )
            )
        </script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/js/libs/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
        <!--[if lt IE7]>
            <script src="assets/js/libs/dd_belated.js"></script>
            <script>DD_belatedPNG.fix('img, .png_bg');</script>
        <![endif]-->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    		s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>