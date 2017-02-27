                <?php

include('conn.php');

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


$sql = "SELECT * FROM AudioClip where AccountNo='$acc'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );

$c = sqlsrv_num_rows( $stmt );

?>
                
                <nav class="nav-primary hidden-xs">
                  <ul class="nav bg clearfix">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      Music is life!
                    </li>
                    <li>
                      <a href="dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span class="font-bold">Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a href="albums.php">
                        <i class="icon-music-tone-alt icon text-info"></i>
                        <span class="font-bold">My Albums</span>
                      </a>
                    </li>
                    <li>
                      <a href="songs.php">
                        <i class="icon-playlist icon text-success-lter"></i>
                        <b class="badge bg-success dker pull-right"><?php echo $c;  ?></b>
                        <span>My Songs</span>
                      </a>
                    </li>
                    <li>
                      <a href="profile.php">
                        <i class="icon-user"></i>
                        <span class="font-bold">My Profile</span>
                      </a>
                    </li>
                    <li class="m-b hidden-nav-xs"></li>
                  </ul>
                </nav>