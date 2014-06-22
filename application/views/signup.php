<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Textrr | Text Message Marketing</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?= css_url('bootstrap.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('animate.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('font-awesome.min.css') ?>" type="text/css" />
  <link rel="stylesheet" href="<?= css_url('font.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= css_url('app.css') ?>" type="text/css" />
  <!--[if lt IE 9]>
    <script src="<?= js_url('ie/html5shiv.js') ?>"></script>
    <script src="<?= js_url('ie/respond.min.js') ?>"></script>
    <script src="<?= js_url('ie/excanvas.js') ?>"></script>
  <![endif]-->
</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="index.html">Textrr</a>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>Sign up</strong>
        </header>
        <form action="index.html" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label">Name</label>
            <input type="text" placeholder="First and Last Name" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input type="email" placeholder="test@example.com" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" id="inputPassword" placeholder="Type a password" class="form-control input-lg">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Agree the <a href="#">terms and conditions</a>
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Sign up</button>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="signin.html" class="btn btn-default btn-block">Sign in</a>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>The Mailchimp of Text Message Marketing <br>&copy; 2014</small>
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