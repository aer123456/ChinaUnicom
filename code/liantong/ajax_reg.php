<?php
$phone = $_POST['phone'];
$pass = md5($_POST['pass']);
include "conn.php";
$sql = "INSERT INTO user(phone, pass, pic) VALUES ('$phone','$pass', 'a')";
				if(mysql_query($sql)){
					echo 'ok';
				}else{
					echo 'fail';
				}

?>