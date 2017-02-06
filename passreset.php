<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php' ;?>
<body class="">
  <section class="vbox">
     <?php include 'header.php'; 

    $session431=sqlsrv_query($conn, "SELECT * FROM ClientInfo WHERE Email='$check' ");
$row431=sqlsrv_fetch_array($session431);
$acc=$row431['AccountNo'];
$image=$row431['PassportPhoto'];
$county=$row431['County'];

$session4321=sqlsrv_query($conn, "SELECT * FROM NextofKin WHERE AccountNumber='$acc' ");
$row4321=sqlsrv_fetch_array($session4321);


?>
    <section>
      <section class="hbox stretch">
        <section id="content">
          <section class="vbox">
            <section class="scrollable">
              <section class="hbox stretch">
                <aside class="aside-lg bg-light lter b-r">
                  <section class="vbox">
                    <section class="scrollable">
                      <div class="wrapper">
                        <div class="text-center m-b m-t">                        
                          <div>
                            <div class="h3 m-t-xs m-b-xs">Why can't you sign in?</div>
                            <p>If you can't sign in to your MzikiTrak Account, select the issue that most closely applies to you. Follow the instructions for help getting back in to your account.</p>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                   I forgot my password.
                                </label>
                                </div>
                                <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    I forgot the email I use to log in.
                                </label>
                                </div>
                                <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option3">
                                    I know my password and username, but I can't log in.
                                </label>
                                </div>
                                <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option4">
                                    I think someone else is using my account.
                                </label>
                                </div>
                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                
                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="h3 m-t-xs m-b-xs">Provide us with your email below.</div>
                                <p>Fill out the text box with your email address. A link and a new password will be sent to you.</p>
                                <form role="form">
                                    <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-default">Submit</button>
                                </form>
                            </div>
                            </div>
                          </div>
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
