<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $web_title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo __SITEURL__ ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo __SITEURL__ ?>css/scrolling-nav.css" rel="stylesheet">

    <link href="<?php echo __SITEURL__ ?>css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo __SITEURL__ ?>css/theme_main.css" rel="stylesheet">
    <link href="<?php echo __SITEURL__ ?>css/carousel.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <?php echo $menu; ?>
    <?php echo $content; ?>

    <div class="container">
      <hr class="featurette-divider">
      <footer>
        <p class="pull-right"><a class="page-scroll" href="#page-top">Back to top</a></p>
        <p>&copy; 2008 - <?php echo date("Y"); ?> <a href="<?php echo __SITEURL__ ?>">Wisnu-Hafid.net</a> All Right Reserved</p>
      </footer>
    </div>

    <script src="<?php echo __SITEURL__ ?>js/jquery.js"></script>
    <script src="<?php echo __SITEURL__ ?>js/bootstrap.min.js"></script>
    <script src="<?php echo __SITEURL__ ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo __SITEURL__ ?>js/scrolling-nav.js"></script>
    <script src="<?php echo __SITEURL__ ?>js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo __SITEURL__ ?>js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>