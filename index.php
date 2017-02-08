<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php'; ?>

<body class="bg-info dker">
<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> Your password will be send to your email. Use that to log in.
</div>

  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
      <img src="images/MzikiTrakLogo120px.png" alt="MzikiTrak Logo" class="logo">
      <!--<a class="navbar-brand block" href="index.html"><span class="h1 font-bold">MzikiTrak</span></a>-->
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign in to get in touch</strong>
        </header>
        <form action="login.php" method="POST">
          <div class="form-group">
            <input type="email" placeholder="Email" name="Email" required="required" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
             <input type="password" placeholder="Password" name="password" required="required" class="form-control rounded input-lg text-center no-border">
          </div>
          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
          <div class="text-center m-t m-b"><a href="passreset.php"><small>Forgot password?</small></a></div>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="signup.php" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>
          <a href="http://flag42.com/">Flag42</a><br>
          &copy; <script>document.write(new Date().getFullYear())</script>
        </small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <?php include 'scripts.php'; ?>
   <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
</body>
</html>
