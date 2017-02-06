<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php'; ?>
<body class="bg-info dker">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">MzikiTrak</span></a>
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
</body>
</html>
