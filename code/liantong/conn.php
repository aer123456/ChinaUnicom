<?php
/*****************************
*数据库连接
*****************************/
$dbname = 'liantong';
$host = '127.0.0.1';
$port = '3306';
$user = 'root';
$pwd = 'aa437be7';

$link = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
if(!$link) {
    die("Connect Server Failed: " . mysql_error($link));
}
if(!mysql_select_db($dbname,$link)) {
    die("Select Database Failed: " . mysql_error($link));
}
mysql_query("set names 'utf8'");


/*
$conn = @mysql_connect("localhost","root","root123");
if (!$conn){
	die("连接数据库失败：" . mysql_error());
}
mysql_select_db("test", $conn);
//字符转换，读库
mysql_query("set character set 'utf8'");
//写库
mysql_query("set names 'utf8'");
*/

?>
