<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php' ?>
<body class="bg-light dk">
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">404</h1>
        </div>
        <p>
             Incomplete profile? <br>Please complete your profile before you can access Mzikitrak's features.
        </p>
        <div class="list-group auto m-b-sm m-b-lg">
          <a href="#" class="list-group-item" onclick="goBack()">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> Goto homepage
            <script>function goBack() {window.history.back();}</script>
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-question icon-muted"></i> Send us a tip
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge bg-info lt"> +254-20-230-5517</span>
            <i class="fa fa-fw fa-phone icon-muted"></i> Call us
          </a>
        </div>
      </div>
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
<?php include 'scripts.php' ?>
</body>
</html>