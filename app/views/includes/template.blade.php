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

	{{ HTML::style("css/normalize.min.css") }}
    {{ HTML::style("css/main.css") }}
	{{ HTML::style("css/styles.css") }}
    {{ HTML::style('css/jquery.cleditor.css') }}
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>


    <!-- all the icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />

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
                <i class="icon-reorder"></i>
                <!-- <i class="fa-bars"></i> -->
                <ul class="full-nav">
                    <li><a href="{{ URL::to('contact')}}">contact</a></li>
                    <li><a href="{{ URL::to('web')}}">web gallery</a></li>
                    <li><a href="{{ URL::to('design')}}">design gallery</a></li>
                    <li><a href="{{ URL::to('home')}}" class="selected">home</a></li>
                </ul>
            </nav>
        </div>
        <div id="main" class="group">

@yield('content')

        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <div class="footer-container">
        <footer class="wrapper">
            <p>This website was crafted using <a href="http://laravel.com/">Laravel 4</a> by Annie Kyles <a href="http://www.anniekyles.com">anniekyles.com</a></p>
        </footer>

    </div>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	{{ HTML::script("js/plugins.js") }}
    {{ HTML::script("js/jquery.jeditable.js") }}
    {{ HTML::script("js/jquery.cleditor.js") }}
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
</body>
</html>



