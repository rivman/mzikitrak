<!DOCTYPE html>
<html lang="en" class="app">
<php include 'css.php'; ?>
<body class="">
  <section class="vbox">
    <?php include 'header.php'; ?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'aside.php'; ?>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <div class="m-b-md">
                <h3 class="m-b-none">Form wizard</h3>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <form id="wizardform" method="get" action="index.html">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <ul class="nav nav-tabs font-bold">
                          <li><a href="#step1" data-toggle="tab">Artist Profile</a></li>
                          <li><a href="#step2" data-toggle="tab">Payment</a></li>
                          <!--<li><a href="#step3" data-toggle="tab">Step 3</a></li>-->
                        </ul>
                      </div>
                      <div class="col-sm-8">
                      <div class="panel-body">
                        <!--<p>This twitter bootstrap plugin builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into each step individually.</p>-->
                        <div class="line line-lg"></div>
                        <!--<h4>Validate Form</h4>-->
                        <div class="progress progress-xs m-t-md">
                          <div class="progress-bar bg-success"></div>
                        </div>
                        <div class="tab-content">
                          <div class="tab-pane" id="step1">
                          <p>Name:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="Name">
                            <p>County:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="County">
                            <p class="m-t">Upload ID:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="Upload Id">
                            <p>Upload Passport Photo:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="Passport Photo">
                            <p class="m-t">Address:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="Address">
                            <p>Next of Kin</p>
                            <p>First Name:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="First Name">
                            <p class="m-t">Last Name:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="Last Name">
                            <p> Email:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="Email">
                            <p class="m-t">Phone Number:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="Phone Number">
                            <!--<p>Your website:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="website">
                            <p class="m-t">Your email:</p>
                            <input type="text" class="form-control" data-trigger="change" name= "" data-required="true" data-type="email" placeholder="email address">
                          </div>
                          <div class="tab-pane" id="step2">
                            <p>Your email:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                          </div>-->
                          <!--<div class="tab-pane" id="step3">This is step 3</div>-->
                          <ul class="pager wizard m-b-sm">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                            <li class="next"><a href="#">Next</a></li>
                          </ul>
                        </div>
                      </div>
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
  <?php include 'scripts.php';?>
</body>
</html>
