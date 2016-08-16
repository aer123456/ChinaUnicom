<?php
$title = '联通精灵礼品游戏活动';
$owner = '联通';

include "conn.php";
$phone = $_COOKIE['phone'];
$result = mysql_query("SELECT * FROM user WHERE phone = '$phone' ");
$user = mysql_fetch_array($result);
$uid = $user['id'];


?>