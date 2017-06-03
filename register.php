<?php
require 'mysqlConn.php';
// $user = 'zzw001';
// $pass = '123456';
$user = $_POST['suser'];
$pass = $_POST['spassword'];
$sql = "INSERT INTO db_manager (username,password) VALUES ('".$user."','".$pass."')";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>