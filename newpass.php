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
                            <div class="h3 m-t-xs m-b-xs">Reset your password</div>
                            <p>Choose a strong password that you haven't already used with this account.</p>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <form data-validate="parsley">
                                <section class="panel panel-default">
                                <div class="panel-body" style="background-color: #e8eff0;">                                    
                                    <div class="form-group pull-in clearfix">
                                    <div class="col-sm-8 col-sm-offset-2" style="padding-bottom: 20px;">
                                        <label>Enter password</label>
                                        <input type="password" class="form-control" data-required="true" id="pwd">   
                                    </div>
                                    <br>
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label>Confirm password</label>
                                        <input type="password" class="form-control" data-equalto="#pwd" data-required="true">      
                                    </div>   
                                    </div>
                                    <div class="checkbox i-checks">
                                    <label>
                                        <input type="checkbox" name="check" checked data-required="true"><i></i> I agree to the <a href="#" class="text-info">Terms of Service</a>
                                    </label>
                                    </div>
                                </div>
                                <footer class="panel-footer text-right bg-light lter">
                                    <button type="submit" class="btn btn-success btn-s-xs" style="display: block; margin: 0 auto;">Submit</button>
                                </footer>
                                </section>
                            </form>
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
