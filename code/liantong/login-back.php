<?php
include "config.php";

if($_POST['name']&&$_POST['pass']){
  include "conn.php";
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  $result = mysql_query("SELECT * FROM admin WHERE  name = '$name' AND pass = '$pass' ");
      $user = mysql_fetch_array($result);
      if($user){
        setcookie('admin',1);
        echo "<script>alert('登录成功')</script>";
        echo "<script>location.href='backEnd.php'</script>";
      }else{
        echo "<script>alert('登录失败')</script>";
      }
}
?>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <title>后台登录</title>
    <script src="js/flexible.js"></script>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <p> <span id="login" class="active">
        <button>登录</button></span></p>
    <form method="post">
    <div class="login">
      <input type="text" name="name" placeholder="请输入您的管理员账号" class="phoneLogin"/>
      <input type="password" name="pass" placeholder="请输入密码" class="passLogin"/>
      <input id="submigLogin" type="submit" value="登录"/>
    </div>
    </form>
    <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
  </body>
</html>