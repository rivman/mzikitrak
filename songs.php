<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Musik | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />

  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-info dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="index.html" class="navbar-brand text-lt">
          <i class="icon-earphones"></i>
          <img src="images/logo.png" alt="." class="hide">
          <span class="hidden-nav-xs m-l-sm">Mzikitrak</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      <ul class="nav navbar-nav hidden-xs">
        <li>
          <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="fa fa-indent text"></i>
            <i class="fa fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="badge badge-sm up bg-danger count">2</span>
            </a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
              <section class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span class="count">2</span> notifications</strong>
                </div>
                <div class="list-group list-group-alt">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="images/a0.png" alt="..." class="img-circle">
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
                <div class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="images/a0.png" alt="...">
              </span>
              John.Smith <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li>
                <span class="arrow top"></span>
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
      </div>
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black dk aside hidden-print" id="nav">
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav bg clearfix">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      Music is life!
                    </li>
                    <li>
                      <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span class="font-bold">Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a href="albums.html">
                        <i class="icon-music-tone-alt icon text-info"></i>
                        <span class="font-bold">My Albums</span>
                      </a>
                    </li>
                    <li>
                      <a href="songs.html">
                        <i class="icon-playlist icon text-success-lter"></i>
                        <b class="badge bg-success dker pull-right">9</b>
                        <span>My Songs</span>
                      </a>
                    </li>
                    <li>
                      <a href="profile.html">
                        <i class="icon-user"></i>
                        <span class="font-bold">My Profile</span>
                      </a>
                    </li>
                    <li class="m-b hidden-nav-xs"></li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>

            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <div class="bg hidden-xs ">
                  <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">
                        <img src="images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt">John.Smith</strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">
                      <li>
                        <span class="arrow bottom hidden-nav-xs"></span>
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
                  </div>
                </div>            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox" id="bjax-el">
            <section class="scrollable wrapper-lg">
              <div class="row">
                <div class="col-sm-8">
                  <div class="panel wrapper-lg">
                    <div class="row">
                      <div class="col-sm-5">
                        <img src="images/m10.jpg" class="img-full m-b">
                      </div>
                      <div class="col-sm-7">
                        <h2 class="m-t-none text-black">Tincidunt ut laoreet</h2>
                        <div class="clearfix m-b-lg">
                          <a href="#" class="thumb-sm pull-left m-r">
                            <img src="images/a0.png" class="img-circle">
                          </a>
                          <div class="clear">
                            <a href="#" class="text-info">Mike Mcalidek</a>
                            <small class="block text-muted">2,415 followers / 225 following</small>
                          </div>
                        </div>
                        <div class="m-b-lg">
                          <a href="#" class="btn btn-info">Play</a> <a href="#" class="btn btn-default">3 airplays this week</a>
                        </div>
                        <div>
                          Stations: <a href="#" class="badge bg-light">Kiss 100</a> <a href="#" class="badge bg-light">Capital FM</a>
                        </div>
                      </div>
                    </div>
                    <div class="m-t">
                      <p>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. John smith Admin</p>
                    </div>
                    <h4 class="m-t-lg m-b">My Songs</h4>
                    <ul class="list-group list-group-lg">
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#" class="m-r-sm"><i class="icon-plus"></i></a>
                          <a href="#"><i class="icon-close"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>E.T.M</span>
                          <span class="text-muted"> -- 04:35</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Vestibulum id ligula porta</span>
                          <span class="text-muted"> -- 04:15</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Praesent commodo cursus magna</span>
                          <span class="text-muted"> -- 02:25</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Curabitur blandit tempus</span>
                          <span class="text-muted"> -- 05:00</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Faucibus dolor auctor</span>
                          <span class="text-muted"> -- 03:50</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Get lacinia odio sem nec elit cibus dolor auctor sed odio dui mollis ornare</span>
                          <span class="text-muted"> -- 04:05</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Faucibus dolor auctor</span>
                          <span class="text-muted"> -- 02:55</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Donec sed odio dui</span>
                          <span class="text-muted"> -- 04:35</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Urna mollis ornare vel eu leo</span>
                          <span class="text-muted"> -- 05:10</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Vivamus sagittis lacus vel augue</span>
                          <span class="text-muted"> -- 02:35</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="js/app.plugin.js"></script>
  <script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
</html>
