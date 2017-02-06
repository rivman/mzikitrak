<?php

include('conn.php');
session_start();
$check=$_SESSION['SESS_username'];
$session43=sqlsrv_query($conn, "SELECT * FROM LoginCredentials WHERE Username='$check' ");
$row43=sqlsrv_fetch_array($session43);
$login_session=$row43['Username'];
$status=$row43['Status'];
if(!isset($login_session))
{
header("Location:index.php");
}

if ($status==0) {
 header('location:moredeatails.php');
}
else{
?>


<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php' ?>
<body class="">
  <section class="vbox">
    <?php include 'header.php'; ?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'aside.php'; ?>
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="vbox">
                  <section class="scrollable padder">
                    <div class="m-b-md">
                      <div class="row">
                        <div class="col-sm-6">
                          <h3 class="m-b-none">Charts</h3>
                          <small>Statistics & graph information</small>
                        </div>
                        <div class="col-sm-6">
                          <div class="text-right text-left-xs">
                            <div class="sparkline m-l m-r-lg pull-right" data-type="bar" data-height="35" data-bar-width="6" data-bar-spacing="2" data-bar-color="#fff">5,8,9,12,8,10,8,9,7,8,6</div>
                            <div class="m-t-md">
                              <span class="text-uc">New users</span>
                              <div class="h4 m-n"><strong>1,120</strong></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <section class="panel panel-default">
                      <header class="panel-heading font-bold">Your stats to date </header>
                      <div class="panel-body">
                        <div id="" style="height:250px"> You have empty stats.</div><!-- id = "flot-line" -->
                      </div>
                      <footer class="panel-footer bg-white">
                        <div class="row text-center no-gutter">
                          <div class="col-xs-3 b-r b-light">
                            <p class="h3 font-bold m-t">0</p>
                            <p class="text-muted">Songs</p>
                          </div>
                          <div class="col-xs-3 b-r b-light">
                            <p class="h3 font-bold m-t">0</p>
                            <p class="text-muted">Airplay</p>
                          </div>
                          <div class="col-xs-3 b-r b-light">
                            <p class="h3 font-bold m-t">0</p>
                            <p class="text-muted">Trending</p>
                          </div>
                          <div class="col-xs-3">
                            <p class="h3 font-bold m-t">0</p>
                            <p class="text-muted">Stations</p>
                          </div>
                        </div>
                      </footer>
                    </section>
                    <div class="row">
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Airplay per Month</header>
                          <div class="panel-body">
                            <div id=""  style="height:240px"><p>0 airplay.</p></div><!-- id = "flot-chart" -->                            
                          </div>
                        </section>
                      </div>
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Your best 3</header>
                          <div class="panel-body">
                            <div id=""  style="height:240px">Nothing to see here.</div><!-- id= "flot-bar" -->
                          </div>
                        </section>
                      </div>
                    </div>
                  </section>
                </section>
                <footer class="footer bg-dark">
                  <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>
  </section>
  <?php include 'scripts.php'; ?>
</body>
</html>

<?php
}
?>
