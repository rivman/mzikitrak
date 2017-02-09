
<?php
$feedback="";
    if(isset($_GET['var']) && ($_GET['var']=='successful')){
        $feedback="<div class='alert danger'>
  <span class='closebtn'>&times;</span>  
  <strong>Sorry!</strong> Email Aready Exists.
</div>";
    }
  ?>

<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php'; ?>


<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var x_timer;    
    $("#username").keyup(function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax(user_name);
        }, 1000);
    }); 

function check_username_ajax(username){
    $("#user-result").html('<img src="ajax-loader.gif" />');
    $.post('check_code.php', {'username':username}, function(data) {
      $("#user-result").html(data);
    });
}
});
</script>-->



<body class="bg-info dker">

<?php echo $feedback; ?>

  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
      <img src="images/MzikiTrakLogo120px.png" alt="MzikiTrak Logo" class="logo">
      <!--<a class="navbar-brand block" href="index.html"><span class="h1 font-bold">MzikiTrak</span></a>-->
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign up to get started</strong>
        </header>
        <form action="createuser.php" method="POST" >
          <div class="form-group">
            <input placeholder="First Name" name="fname" required="required" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
            <input placeholder="Last Name" name="lname" required="required" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
           <input type="email" class="form-control rounded input-lg text-center no-border"  name="email" placeholder="Enter Email" id="username" required="required" > <span id="user-result"></span>
           <!-- <input type="email" name="email" required="required" placeholder="Email Address" class="form-control rounded input-lg text-center no-border" onblur="checkMailStatus()">-->
          </div>
          <div class="form-group">
             <input type="phone number" name="pnumber" required="required"  placeholder="Phone Number" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="checkbox i-checks m-b">
            <label class="m-l">
              <input type="checkbox" checked=""><i></i> I agree the <a href="#">terms and policy</a>
            </label>
          </div>

          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="index.php" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
          <!-- <a href="#modal-form" class="btn btn-success" data-toggle="modal">Blegh!</a>-->
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>
          <a href="http://flag42.com/">Flag42</a><br>
          &copy; <script>document.write(new Date().getFullYear())</script>
        </small>
      </p>
    </div>
  </footer>
 <?php include 'scripts.php'; ?>
 <!-- Modal message -->
 <div class="modal fade" id="modal-form" style="z-index:3;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body wrapper-lg">
          <div class="row">
            <p style="color: #000;">Your password will be sent to your email. Use that to log in.</p>
          </div>          
        </div>
      </div>
    </div>
  </div> 
<!-- End of modal message -->
</body>
</html>
