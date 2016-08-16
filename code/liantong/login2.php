<?php
include "config.php";
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
      <input type="number" placeholder="请输入您的手机号"/>
      <input type="number" placeholder="请输入验证码"/>
      <input type="button" value="点击发送手机验证码"/>
      <input type="number" placeholder="请输入您手机收到的验证码"/>
      <input type="number" placeholder="请输入6位数密码"/>
      <input type="button" value="注册"/>
    </div>
    <div class="login">
      <input type="number" placeholder="请输入您的手机号"/>
      <input type="number" placeholder="请输入6位数密码"/>
      <input type="button" value="登录"/>
      <div class="linkto"><a href="#">忘记密码？</a><a href="#">注册</a></div>
    </div>
    <div class="footer">
      <div class="links"><a href="index.html" class="gaps playgame">去玩游戏得精灵</a><a href="invite.html" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.html" class="gaps mypocket">我的背包</a><a href="rule.html" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
    <script>
      $("#login").on("click", function(){
          $(".register").hide();
          $(".login").show();
          $("#register").removeClass("active");
          $("#login").addClass("active");
      });
      $("#register").on("click", function(){
          $(".login").hide();
          $(".register").show();
          $("#login").removeClass("active");
          $("#register").addClass("active");
      });
    </script>
  </body>
</html>