<?php
include ('conn.php');

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
$fname=$row431['FirstName'];
$lname=$row431['LastName'];
$Cname=$fname." ".$lname;



$file =rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);
$folder1='coverimage/'.$final_file;
move_uploaded_file ($file_loc, $folder1);


$file1 =rand(1000000000,10000000000)."-". $_FILES['file1']['name'];
$file_loc1 = $_FILES['file1']['tmp_name'];
$new_file_name1 = strtolower($file1);
$final_file1=str_replace(' ','-',$new_file_name1);
$folder2='music/'.$final_file1;
move_uploaded_file ($file_loc1, $folder2);

######AudioClip#######
$Name=$_POST['name'];
$s='0';
$udate=date('d-m-Y');
$mins=$_POST['minutes'];
$secs=$_POST['seconds'];
$dateofrelease=$_POST['rdate'];
$recordlabel=$_POST['rlabel'];
######Contributor########
$conName=$_POST['contname'];
$conPercent=$_POST['percent'];
$conEmail=$_POST['contemail'];
$conNo=$_POST['contno'];
########Featuring Artist#######
$featName=$_POST['ftname'];
$featNumber=$_POST['ftno'];
$featEmail=$_POST['ftemail'];

$sql2="INSERT INTO AudioClip(AccountNo,AudioTitle,AudioPath,Artist,Status,Coverart,Uploaddate,lengthMinutes,lengthSeconds,DateOfRelease,RecordLabel) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
$params = array($acc,$Name,$final_file1,$Cname,$s,$final_file,$udate,$mins,$secs,$dateofrelease,$recordlabel);
$stmt12 = sqlsrv_query( $conn, $sql2, $params);

if( $stmt12 === false )
      {
            die( print_r( sqlsrv_errors(), true));
      }
$sqlContrib="INSERT INTO Contributor(ContributorName,ContributorPercentage, ContributorEmail, ContributorPhoneNo) VALUES (?,?,?,?)";
$contribParams=array($conName, $conPercent, $conEmail, $conNo);
$stmt13 = sqlsrv_query( $conn, $sqlContrib, $contribParams);

if( $stmt13 === false )
      {
            die( print_r( sqlsrv_errors(), true));
      }

$sqlFeatArt="INSERT INTO FeatArtist(FeatArtistName,FeatArtistEmail,FeatArtistPhoneNumber)VALUES(?,?,?)";
$featArtistParams=array($featName,$featEmail,$featNumber);
$popFeatTable= sqlsrv_query ($conn, $sqlFeatArt,$featArtistParams);
if( $popFeatTable === false )
      {
            die( print_r( sqlsrv_errors(), true));
      }

?>
<script language="javascript">
      alert("Upload Successful");
      top.location.href = "songs.php"; //the page to redirect
</script>