<?php
    $id = $_GET['var'];
    echo $id;
    include('conn.php');

$sql = "DELETE FROM AudioClip WHERE ID='$id'";

$query = sqlsrv_query($conn, $sql);

header('location:songs.php');
?>