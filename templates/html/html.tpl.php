<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

  <head>
    <title><?php print $head_title; ?></title>

    <?php print $head; ?>
        
  	<!-- Import Stylesheets -->
    <?php print $styles; ?>
     
    <script src="https://use.typekit.net/bui3vor.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <!--[if lte IE 8]>
      <div class="chromeframe">
        You are using an <strong>outdated</strong> browser.<br/>
        Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
      </div>
    <![endif]-->

    <div class="frame">
      <?php print $page_top; ?>
      <?php print $page; ?>
      <?php print $page_bottom; ?>
    </div>
    
  	<!-- Javascript -->
    <?php print $scripts; ?>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <?php if( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ) { ?>
    <!-- Live Reload -->
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35730/livereload.js?snipver=1"></' + 'script>')</script>
    <?php } ?>
  </body>

</html>
