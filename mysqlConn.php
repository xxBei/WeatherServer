<?php

	Header('Content-Type:text/html;charset=utf-8');
	define('SERVERNAME', '127.0.0.1');
	define('USERNAME', 'root');
	define('PASSWORD', 'root');
	define('DBNAME', 'weather');

	$conn = new mysqli(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if (mysqli_connect_error()) {
		echo '数据库连接失败，错误信息为：'.mysqli_connect_error();
		exit();
	}
	$conn->set_charset('utf8');
?>