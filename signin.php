<?php
	//header('Content-Type: text/html;charset=utf-8');
	require 'mysqlConn.php';
	$logins = 'false';
	// $suser = 'zzw';
	// $spassword = '123456';
	$suser = $_POST['suser'];
	$spassword = $_POST['spassword'];
	$sql = "SELECT username,password FROM db_manager WHERE username = '".$suser."'";
	
	$result = $conn->query($sql);
	while ($row=$result->fetch_assoc()) {
		$user = $row['username'];
		$pass = $row['password'];
		if($pass == $spassword){
			$logins = 'true';
		}else{
			$logins = 'false';
		}
		//echo $user.'--'.$pass.'<br/>';
	}

	$conn->close();
	echo '{"logins":'.$logins.',"suser":"'.$suser.'"}';
?>