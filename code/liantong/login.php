<?php
include "config.php";

$uid = $_COOKIE['phone'];
include "conn.php";
if($uid){
  echo "<script>location.href='painting/'</script>";
  exit;
}else{
  if($_POST['login']){
      $phone = $_POST['phone'];
      $pass = $_POST['pass'];
      $pass = md5($pass);
      $result = mysql_query("SELECT * FROM user WHERE  phone = '$phone' AND pass = '$pass' ");
      $user = mysql_fetch_array($result);
      if($user){
        setcookie('uid',$user['id']);
        setcookie('phone',$user['phone']);
        echo "<script>alert('登录成功')</script>";
        echo "location.href='painting/'";
      }else{
        echo "<script>alert('登录失败')</script>";
        echo "location.href='login.php'";
      }
  }
  if($_POST['register']){

  }
}

?>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <title><?=$title?></title>
    <script src="js/flexible.js"></script>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <p> <span id="login" class="active">
        <button>登录</button></span><span id="register">
        <button>注册</button></span></p>
    <div class="register">
    <input type="hidden" name="register" id="code">
      <input type="number" name="phone" id="phone" placeholder="请输入您的手机号" class="phoneReg"/>
      <input id="input" type="number" placeholder="请输入右图中的验证码" class="verify"/>
      <div id="verify" class="verifycode"><?php echo rand(1111,9999); ?></div>
      <span id="sendsms"><input id="sendPhone" type="button" value="点击发送手机验证码"/></span>
      <input type="number" placeholder="请输入您手机收到的验证码" class="recieve"/>
      <input type="number" name="pass" id="pass" placeholder="请输入6位数密码" class="passReg"/>
      <input id="submitReg" type="button" value="注册"/>
    </div>
    <div class="login">
      <input type="hidden" name="login">
      <input type="number" id="loginphone" placeholder="请输入您的手机号" class="phoneLogin"/>
      <input type="password" id="loginpass" placeholder="请输入6位数密码" class="passLogin"/>
      <input id="submigLogin" type="button" value="登录"/>
      <div class="linkto"><a href="#">忘记密码？</a><a href="#">注册</a></div>
    </div>
    <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
    <script src="js/login.js"></script>
  </body>
</html>