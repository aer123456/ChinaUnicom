<?php
$phone = $_POST['phone'];
$pass = md5($_POST['pass']);
include "conn.php";
$result = mysql_query("SELECT * FROM user WHERE  phone = '$phone' AND pass = '$pass' ");
      $user = mysql_fetch_array($result);
      if($user){
        echo 'ok';
      }else{
        echo 'fail';
      }


?>