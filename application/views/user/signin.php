<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Notebook | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?= css_url('bootstrap.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('animate.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('font-awesome.min.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('font.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('app.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('custom.css') ?>" type="text/css" />
  <!--[if lt IE 9]>
    <script src="<?= js_url('ie/html5shiv.js') ?>"></script>
    <script src="<?= js_url('ie/respond.min.js') ?>"></script>
    <script src="<?= js_url('ie/excanvas.js') ?>"></script>
  <![endif]-->
</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block white-text" href="/">Textrr</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Sign in</strong>
        </header>
        <form action="/login" method="POST" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label" for="input-email">Email</label>
            <input type="email" placeholder="name@example.com" class="form-control input-lg" name="input-email" id="input-email">
          </div>
          <div class="form-group">
            <label class="control-label" for="input-password">Password</label>
            <input type="password" name="input-password" id="input-password" placeholder="Password" class="form-control input-lg">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Keep me logged in
            </label>
          </div>
          <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
          <button type="submit" class="btn btn-primary">Sign in</button>
          <div class="line line-dashed"></div>
          <!-- <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
          <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
          <div class="line line-dashed"></div> -->
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="/signup" class="btn btn-default btn-block">Create an account</a>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small class="white-text">The Mailchimp of Text Message Marketing<br>&copy; 2014</small>
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