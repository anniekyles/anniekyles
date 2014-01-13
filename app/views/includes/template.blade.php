<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Annie Kyles</title>
    <meta name="description" content="A portfolio of Web Development and Graphic Design work">
    <meta name="viewport" content="width=device-width">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- styles -->
	{{ HTML::style("css/normalize.min.css") }}
    {{ HTML::style("css/main.css") }}
	{{ HTML::style("css/styles.css") }}
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- fancyBox: Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>


<body>
    <div class="main-container" id="container">
        <div class="main wrapper clearfix">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="top" class="group">
            <h1 id="title">annie kyles</h1>
            <nav class="group">
                <i class="fa-bars"></i>
                <ul class="full-nav">
                    <li><a href="{{ URL::to('contact')}}">contact</a></li>
                    <li><a href="{{ URL::to('web')}}">web gallery</a></li>
                    <li><a href="{{ URL::to('design')}}">design gallery</a></li>
                    <li><a href="{{ URL::to('home')}}">home</a></li>
                </ul>
            </nav>
        </div>
        <div id="main" class="group">

@yield('content')

        </div> <!-- #main -->
    </div> <!-- #main-container -->




	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	{{ HTML::script("js/plugins.js") }}
	{{ HTML::script("js/main.js") }}
    {{ HTML::script("js/formValidation.js") }}

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        // e.src='//www.google-analytics.com/analytics.js';
        // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        // ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </div><!-- end main -->

    <div class="footer-container">
        <footer class="wrapper">
            <p>This website was crafted by Annie Kyles using <a href="http://laravel.com/">Laravel 4</a></p>
        </footer>

    </div>
</body>
</html>



