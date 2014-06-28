<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Textrr | <?= $title ?></title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?=css_url('bootstrap.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=css_url('animate.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=css_url('font-awesome.min.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=css_url('font.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=js_url('calendar/bootstrap_calendar.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=js_url('jvectormap/jquery-jvectormap-1.2.2.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=css_url('app.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?=css_url('custom.css')?>" type="text/css" />
  <!--[if lt IE 9]>
    <script src="<?=js_url('ie/html5shiv.js')?>"></script>
    <script src="<?=js_url('ie/respond.min.js')?>""></script>
    <script src="<?=js_url('ie/excanvas.js')?>"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-black dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="<?=image_url('/logo.png')?>" class="m-r-sm">Textrr</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <!-- <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
            <i class="fa fa-building-o"></i> 
            <span class="font-bold">Activity</span>
          </a>
          <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
            <div class="wrapper lter m-t-n-xs">
              <a href="#" class="thumb pull-left m-r">
                <img src="<?=image_url('avatar.jpg')?>" class="img-circle">
              </a>
              <div class="clear">
                <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span>
                <small class="block">Art Director</small>
                <a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a>
              </div>
            </div>
            <div class="row m-l-none m-r-none m-b-n-xs text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">245</span>
                  <small class="text-muted">Followers</small>
                </div>
              </div>
              <div class="col-xs-4 dk">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">55</span>
                  <small class="text-muted">Likes</small>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">2,035</span>
                  <small class="text-muted">Photos</small>
                </div>
              </div>
            </div>
          </section>
        </li>
        <li>
          <div class="m-t m-l">
            <a href="price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a>
          </div>
        </li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
          </a>
          <section class="dropdown-menu aside-xl">
            <section class="panel bg-white">
              <header class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
              </header>
              <div class="list-group list-group-alt animated fadeInRight">
                <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="<?=image_url('/avatar.jpg') ?>" alt="John said" class="img-circle">
                  </span>
                  <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                </a>
                <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                </a>
              </div>
              <footer class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              </footer>
            </section>
          </section>
        </li>
        <!-- <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
          <section class="dropdown-menu aside-xl animated fadeInUp">
            <section class="panel bg-white">
              <form role="search">
                <div class="form-group wrapper m-b-none">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </form>
            </section>
          </section>
        </li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="<?=image_url('avatar.jpg')?>">
            </span>
            John.Smith <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav">          
          <section class="vbox">
            <header class="header bg-primary lter text-center clearfix">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
                <div class="btn-group hidden-nav-xs">
                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                    (801) 369-0041
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu text-left">
                    <li><a href="#">(406) 921-1432</a></li>
                    <li><a href="#">(801) 877-0989</a></li>
                    <li><a href="#">(324) 655-9263</a></li>
                  </ul>
                </div>
              </div>
            </header>
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li <?= ($nav_item == "dashboard" ? 'class="active"' :'') ?> >
                      <a href="/"   class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-columns icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Campaigns</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="layout-c.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Color option</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-r.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Right nav</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-h.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Hbox Layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-boxed.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Boxed Layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-fluid.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Fluid Layout</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li <?= ($nav_item == "lists" ? 'class="active"' :'') ?> >
                      <a href="/lists"  >
                        <i class="fa fa-flask icon">
                          <b class="bg-success"></b>
                        </i>
                        <span>Lists</span>
                      </a>
                    </li>
                    <li >
                      <a href="#pages"  >
                        <i class="fa fa-file-text icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Analytics</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="gallery.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Gallery</span>
                          </a>
                        </li>
                        <li >
                          <a href="profile.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Profile</span>
                          </a>
                        </li>
                        <li >
                          <a href="invoice.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Invoice</span>
                          </a>
                        </li>
                        <li >
                          <a href="intro.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Intro</span>
                          </a>
                        </li>
                        <li >
                          <a href="master.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Master</span>
                          </a>
                        </li>
                        <li >
                          <a href="gmap.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Google Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="jvectormap.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Vector Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="signin.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Signin</span>
                          </a>
                        </li>
                        <li >
                          <a href="signup.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Signup</span>
                          </a>
                        </li>
                        <li >
                          <a href="404.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>404</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- <li >
                      <a href="mail.html"  >
                        <b class="badge bg-danger pull-right">3</b>
                        <i class="fa fa-envelope-o icon">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span>Message</span>
                      </a>
                    </li> -->
                    <li >
                      <a href="notebook.html"  >
                        <i class="fa fa-pencil icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Phone Numbers</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-light">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-light btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-light" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-light" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->