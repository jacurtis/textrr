<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Textrr | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?= css_url('bootstrap.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('animate.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('font-awesome.min.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('font.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('app.css') ?>" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">404</h1>
        </div>
        <div class="list-group m-b-sm bg-white m-b-lg">
          <a href="index.html" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> Goto homepage
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-question icon-muted"></i> Send us a tip
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge">(801) 369-0021</span>
            <i class="fa fa-fw fa-phone icon-muted"></i> Call us
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>The Mailchimp of Text Message Marketing<br>&copy; 2014</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="<?= js_url('jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?= js_url('bootstrap.js') ?>"></script>
  <!-- App -->
  <script src="<?= js_url('app.js') ?>"></script> 
  <script src="<?= js_url('slimscroll/jquery.slimscroll.min.js') ?>"></script>
  <script src="<?= js_url('app.plugin.js') ?>"></script>
</body>
</html>