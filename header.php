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
$acc=$row431['AccountNo'];
$image=$row431['PassportPhoto'];
$firstname=$row431['FirstName'];
$lastname=$row431['LastName'];


if ($status==0) {
 header('location:moredeatails.php');
}

?>

<header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-info dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="dashboard.php" class="navbar-brand text-lt">
          <img src="images/mtrakLogo.png" alt=".">
          <span class="hidden-nav-xs m-l-sm">Mzikitrak</span>
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
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="uploadimages/<?php echo $image;  ?>" alt="...">
              </span>
              <?php echo $firstname." ".$lastname;  ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li>
                <span class="arrow top"></span>
            
              </li>
              <li>
                <a href="profile.php">Profile</a>
              </li>
              
              <li>
                
              </li>
              <li class="divider"></li>
              <li>
                <a href="logout.php" data-toggle="ajaxModal" >Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>