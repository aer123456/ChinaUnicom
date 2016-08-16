<?php
$phone = $_POST['phone'];
$uid = $_POST['uid'];

include "conn.php";
$time = time();
				$sql = "INSERT INTO invite(uid, phone, time, state) VALUES ('$uid','$phone', '$time', '0')";
				if(mysql_query($sql)){
					echo 'ok';
				}else{
					echo 'error';
				}



?>