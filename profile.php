<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php' ;?>
<body class="">
  <section class="vbox">
    <?php include 'header.php'; ?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'aside.php';?>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable">
              <section class="hbox stretch">
                <aside class="aside-lg bg-light lter b-r">
                  <section class="vbox">
                    <section class="scrollable">
                      <div class="wrapper">
                        <div class="text-center m-b m-t">
                          <a href="#" class="thumb-lg">
                            <img src="images/a0.png" class="img-circle">
                          </a>
                          <div>
                            <div class="h3 m-t-xs m-b-xs">John.Smith</div>
                            <small class="text-muted"><i class="fa fa-map-marker"></i> London, UK</small>
                          </div>
                        </div>
                        <div class="panel wrapper">
                          <div class="row text-center">
                            <div class="col-xs-6">
                              <a href="#">
                                <span class="m-b-xs h4 block">245</span>
                                <small class="text-muted">Plays</small>
                              </a>
                            </div>
                            <div class="col-xs-6">
                              <a href="#">
                                <span class="m-b-xs h4 block">23</span>
                                <small class="text-muted">Stations played</small>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="btn-group btn-group-justified m-b">
                          <a class="btn btn-success btn-rounded" data-toggle="button">
                            <span class="text">
                              <i class="fa fa-eye"></i> Follow
                            </span>
                            <span class="text-active">
                              <i class="fa fa-eye"></i> 
                            </span>
                          </a>
                          <a href="edit.php" class="btn btn-dark btn-rounded">
                             Edit Profile
                          </a>
                        </div>
                        <div>
                          <small class="text-uc text-xs text-muted">about me</small>
                          <p>Artist</p>
                          <small class="text-uc text-xs text-muted">info</small>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                          <div class="line"></div>
                          <small class="text-uc text-xs text-muted">connection</small>
                          <p class="m-t-sm">
                            <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
                          </p>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
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
