<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php' ;?>
<body class="">
  <section class="vbox">
    <?php include 'header.php'; 

    $session431=sqlsrv_query($conn, "SELECT * FROM ClientInfo WHERE Username='$check' ");
$row431=sqlsrv_fetch_array($session431);
$acc=$row431['AccountNo'];
$image=$row431['PassportPhoto'];

$session432=sqlsrv_query($conn, "SELECT * FROM NextofKin WHERE AccountNo='$acc' ");
$row432=sqlsrv_fetch_array($session432);
$acc=$row431['AccountNo'];
$image=$row431['PassportPhoto'];



    ?>
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
                            <img src="images/unk.jpg" class="img-circle">
                          </a>
                        
                          <div>
                            <div class="h3 m-t-xs m-b-xs"> Mr. Mziki</div>
                            <small class="text-muted"><i class="fa fa-map-marker"></i> Nairobi, Kenya</small>
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
                          <a href="profile.php" class="btn btn-success btn-rounded">
                            <span class="text">
                              <i class="fa fa-eye"></i> View Profile
                            </span>
                          </a>
                          <a href="edit2.php" class="btn btn-dark btn-rounded">
                             <span class="text">
                              <i class="fa fa-pencil"></i> Edit Profile
                             </span>
                          </a>
                        </div>
                        <div>
                          <div class="panel-body">
                            <form action="" class="form-horizontal">
                            <div class="m-b-md">
                                <h3 class="m-b-none">Info</h3>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                <label class="col-lg-3 control-label">First Name</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="First name..." value="<?php echo $row431['FirstName'];  ?>" 
                                  >
                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                              <label class="col-lg-3 control-label">Last Name</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="Last Name..." value="<?php echo $row431['LastName']; ?>" >
                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                              <label class="col-lg-3 control-label">Email Address</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="email@example.com" value="<?php echo $row431['Email']; ?>" > 

                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div> 
                              <div class="form-group">
                              <label class="col-lg-3 control-label">Phone Number</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="+254 7 XXXX XXX XXX" value="<?php echo $row431['PhoneNumber']; ?>" >
                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div> 
                              <div class="form-group">
                              <label class="col-lg-3 control-label">County</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" value="<?php echo $row431['County']; ?>" >
                                </div>
                              </div>
                              <div class="m-b-md">
                                <h3 class="m-b-none">Next of Kin</h3>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                              <label class="col-lg-3 control-label">First Name</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="First name..." value="<?php echo $row432['fname']; ?>" >
                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                              <label class="col-lg-3 control-label">Last Name</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="Last Name..." value="<?php echo $row432['LastName']; ?>" >
                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                              <label class="col-lg-3 control-label">Email Address</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="email@example.com" value="<?php echo $row432['Email']; ?>" >
                                </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                              <label class="col-lg-3 control-label">Phone Number</label>
                                <div class="col-lg-9">
                                  <input class="form-control" type="text" placeholder="+254 7 XXXX XXX XXX" value="<?php echo $row432['PhoneNumber']; ?>" >
                                  </div>
                                </div>

                                <a class="btn btn-default" id="btn-1" href="#btn-1" data-toggle="class:btn-success"style="float:right;">
                                  <span class="text">Save</span>
                                  <i class="fa fa-check text-active"></i>
                                  <span class="text-active">Saved</span>
                                </a>

                                <div class="m-b-md">
                                    <h3 class="m-b-none">Connections</h3>
                                </div>
                                <p class="m-t-sm">
                                  <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a></button>
                                  <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a></button>
                                  <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Google Plus"><a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a></button>                            
                                </p>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="line"></div>
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
