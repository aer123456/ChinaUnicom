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
    <link rel="stylesheet" href="css/rule.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <h3>萌宠等你来 -- 活动规则</h3>
    <div class="rules">
      <div class="left"><img src="img/phone.png" alt="phone"/></div>
      <div class="right"> <img src="img/abc_01.png" alt="abc_"/><img src="img/abc_02.png" alt="abc_"/><img src="img/abc_03.png" alt="abc_"/></div>
      <div class="rule">
        <p>1、本次游戏以集齐7只可爱的精灵为最终目的；</p>
        <p>2、无论你是移动、联通还是电信的用户，都可以来玩游戏，并获得4只可爱的精灵；</p>
        <p>3、想要获得另外三只精灵，就需要推荐用户；</p>
        <p>4、推荐通过一名用户，你将可以最多拥有五只精灵，并会获得我们赠送的限量版精美精灵公仔一个（款式自选）；</p>
        <p>5、推荐通过两名用户，你将可以最多拥有六只精灵，并会获得我们赠送的限量版精灵印花钱包一个（款式自选）；</p>
        <p>6、推荐通过三名用户，你将可以最多拥有七只精灵，并会获得我们赠送的限量版精灵印花双肩包一个（款式自选）；</p>
        <p>7、本次活动的最终解释权归<?=$owner?>所有。</p>
      </div>
      <h3>附：奖品实物图</h3>
      <div class="award">
        <p>限量版精美精灵公仔</p><img src="img/reward_01.jpg" alt="award"/>
      </div>
      <div class="award">
        <p>限量版精美精灵印花钱包</p><img src="img/reward_02.jpg" alt="award"/>
      </div>
      <div class="award a3">
        <p>限量版精美精灵双肩包</p><img src="img/reward_03.jpg" alt="award"/>
      </div>
    </div>
    <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
  </body>
</html>