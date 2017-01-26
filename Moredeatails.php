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

$session431=sqlsrv_query($conn, "SELECT * FROM ClientInfo WHERE Email='$check' ");
$row431=sqlsrv_fetch_array($session431);


?>


<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>MzikiTrak</title>
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

  <style type="text/css">
    
    .stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
  </style>
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
          <span class="hidden-nav-xs m-l-sm">MzikiTrak</span>
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
      <!--<form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
          </div>
        </div>
      </form>-->
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
                </div>           
                 </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <div class="m-b-md">
                <!--<h3 class="m-b-none">Form wizard</h3>-->
              </div>
              <div class="row">
                <div class="col-sm-12">
                  
                      <div class="col-sm-12">
                      <div class="panel-body">
                        <!--<p>This twitter bootstrap plugin builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into each step individually.</p>-->
                        <div class="line line-lg"></div>
                        <!--<h4>Validate Form</h4>-->
                        <div class="progress progress-xs m-t-md">
                          <div class="progress-bar bg-success"></div>
                        </div>
                        <div class="stepwizard col-md-offset-2">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Personal Details</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Next of kin</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Payment</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-2">
        <div class="col-md-12">
          <h3> Personal Details</h3>
          <div class="form-group">
            <label class="control-label">Name</label>
            <input  maxlength="100" type="text" required="required" name="name" class="form-control" placeholder="Enter  Name" value="<?php echo $row431['FirstName']."  ".$row431['LastName']; ?>"  />
          </div>
          <div class="form-group">
            <label class="control-label">County</label>
            <select class="form-control" name="county">
              <option disabled selected>select your county</option>
              <option value="Baringo">Baringo</option>  
<option value="Bomet">Bomet </option>
<option value="Bungoma">Bungoma</option>  
<option value="Busia">Busia </option>
<option value="Elgeyo">Elgeyo</option>
<option value="Embu">Embu </option>
<option value="Garissa">Garissa </option>
<option value="Homa Bay">Homa Bay </option>
<option value="Isiolo">Isiolo </option>
<option value="Kajiado">Kajiado </option>
<option value="Kakamega">Kakamega </option>
<option value="Kericho">Kericho </option>
<option value="Kiambu">Kiambu </option>
<option value="Kilifi">Kilifi </option>
<option value="Kirinyaga">Kirinyaga</option>
<option value="Kisii">Kisii </option>
<option value="Kisumu">Kisumu </option>
<option value="Kitui">Kitui </option>
<option value="Kwale">Kwale </option>
<option value="Laikipia">Laikipia </option>
<option value="Lamu">Lamu </option>
<option value="Machakos">Machakos </option>
<option value="Makueni">Makueni </option>
<option value="Mandera">Mandera </option>
<option value="Marsabit">Marsabit </option>
<option value="Meru">Meru </option>
<option value="Migori">Migori </option>
<option value="Mombasa">Mombasa </option>
<option value="Murang'a">Murang'a </option>
<option value="Nairobi">Nairobi  </option>
<option value="Nakuru">Nakuru </option>
<option value="Nandi">Nandi </option>
<option value="Narok">Narok </option>
<option value="Nyamira">Nyamira </option>
<option value="Nyandarua">Nyandarua </option>
<option value="Nyeri">Nyeri </option>
<option value="Samburu">Samburu </option>
<option value="Siaya">Siaya </option>
<option value="Taita Taveta">Taita Taveta </option>
<option value="Tana River">Tana River </option>
<option value="Tharaka Nithi">Tharaka Nithi </option>
<option value="Trans Nzoia">Trans Nzoia </option>
<option value="Turkana">Turkana </option>
<option value="Uasin Gishu">Uasin Gishu </option>
<option value="Vihiga">Vihiga </option>
<option value="Wajir">Wajir </option>
<option value="West Pokot">West Pokot </option>

            </select>
          </div>
          
          <div class="form-group">
            <label class="control-label">Upload ID</label>
            <input  maxlength="100" type="file" required="required" name="ID"  class="form-control" placeholder="Upload ID"  />
          </div>
          
          <div class="form-group">
            <label class="control-label">Upload Passport Photo</label>
            <input maxlength="100" type="file" required="required" name="Photo"  class="form-control" placeholder="Upload Passport Photo" />
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <input  maxlength="100" type="text" required="required" name="address" class="form-control" placeholder="Enter Postal Address"  />           
          </div>
          <div class="form-group">
            <label class="control-label">Change Password</label>
            <input  maxlength="100" type="password" required="required" name="password" class="form-control" placeholder="Type password"  />           
          </div>
          <div class="form-group">
            <label class="control-label">Confirm password</label>
            <input  maxlength="100" type="password" required="required"  name="cpassword" class="form-control" placeholder="Retype password"  />           
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Next of Kin</h3>
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input maxlength="200" type="text" required="required" name="fname" class="form-control" placeholder="Enter First Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="200" type="text" required="required" name="lname" class="form-control" placeholder="Enter Second Address"  />
          </div>
          <div class="form-group">
            <label class="control-label">Phone Number</label>
            <input maxlength="200" type="text" required="required" name="pnumber" class="form-control" placeholder="Enter Phone Number" />
          </div>
          <div class="form-group">
            <label class="control-label">Email Address</label>
            <input maxlength="200" type="email" required="required" name="eaddress" class="form-control" placeholder="Enter Second Address"  />
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-2">
        <div class="col-md-12">
          <h3> Payment</h3>
         <p>
         <br>1.Go to M-Pesa menu, select Lipa na M-Pesa</br>
         <br>2.Select Paybill Paybill Account No. 800902</br>
         <br>3.Select Enter business no. </br>
         <br>4.Select Enter account no i.e. Business ID and press OK</br>
         <br>5.Enter amount ( 3,717.00) and press OK</br>
         </p>
          

                      

<p><strong>NB.</strong>Account Name:FLAG FORTY TWO LIMITED</p>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>
                  </form>
                </div>
                <div class="col-sm-6">
                  <!--<form id="guessform">
                    <section class="panel panel-default">
                      <header class="panel-heading">
                        <ul class="nav nav-tabs pull-right">
                          <li><a href="#tab1" data-toggle="tab">Guess</a></li>
                          <li><a href="#tab2" data-toggle="tab">Result</a></li>
                        </ul>
                        <span class="font-bold">Guess Game</span>
                      </header>
                      <div class="panel-body">
                        <div class="tab-content">
                          <div class="tab-pane text-center" id="tab1">
                            <p class="text-center h4 m-t m-b">Guess a number between 1 and 50!</p>
                            <input type="text" class="no-border b-b input-s-sm h1 inline text-center text-success wrapper-lg" id="gn">
                            <p class="text-center h4 m-t m-b text-danger" id="gi">.</p>
                          </div>
                          <div class="tab-pane text-center wrapper-xl" id="tab2">
                            <h1 class="text-danger m-b-xl" id="answer"></h1>
                            <h2 class="text-success m-b-xl">Correct!!</h2>
                            <p class="h4">You guess <span id="count"></span> time(s), [<span id="num"></span> ]</p>
                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <ul class="pager wizard m-n">
                          <li class="previous"><a href="#">Try again</a></li>
                          <li class="next"><a href="#">Guess</a></li>
                        </ul>
                      </footer>
                    </section>
                  </form>-->
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
  <script src="js/parsley/parsley.min.js"></script>
<script src="js/wizard/jquery.bootstrap.wizard.js"></script>
<script src="js/wizard/demo.js"></script>
  <script src="js/app.plugin.js"></script>
  <script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/demo.js"></script>

  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
</body>
</html>
