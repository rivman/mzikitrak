<?php 
ob_start();
include('conn.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $y=$_POST['county'];
  $y1=$_POST['address'];
  $y3=$_POST['fname'];
  $y4=$_POST['lname'];
  $y5=$_POST['pnumber'];
  $y6=$_POST['eaddress'];
  
  $updated=mysql_query("UPDATE NextofKin SET 
        fname='$y3', lname='$y4', pnumber='$y5', eaddress='y6', WHERE acc='$acc'")or die();

  $updated=mysql_query("UPDATE ClientInfo SET 
        county='$y', address='$y1', WHERE acc='$acc'")or die();
 
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:profile.php');
  }
}
}  //update ends here
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php 
  if(isset($_GET['acc']))
  {
  $acc=$_GET['acc'];
  $getselect=mysql_query("SELECT * FROM  ClientInfo WHERE acc='$acc'");
  while($profile=mysql_fetch_array($getselect))
  {
    $y=$profile['county'];
    $y1=$profile['address'];
    $y3=$profile['fname'];
    $y4=$profile['lname'];
    $y5=$profile['pnumber'];
    $y6=$profile['eaddress'];
?>
<div class="display">
  <form action="edit.php?id=<?php echo $acc ?>" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> USER NAME : </label>
      <input type="text" name="eusername" required placeholder="Enter your name" 
      value="<?php echo $username; ?>" id="inputid" />
    </p>
    <p>
      <label  for="email"  id="preinput"> EMAIL ID : </label>
      <input type="email" name="eusermail" required placeholder="Enter your Email" 
      value="<?php echo $usermail; ?>" id="inputid" />
    </p>
    <p>
      <label for="mobile" id="preinput"> MOBILE NUMBER : </label>
      <input type="text" name="eusermobile" required placeholder="Enter your mobile number" 
      value="<?php echo $usermobile; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid1" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>