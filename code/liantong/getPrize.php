<?php
include "config.php";
include "conn.php";

$id = $_GET['id'];
      //数据库查询
      $result = mysql_query("SELECT * FROM poketmon WHERE id = '$id' ");
      $poketmon = mysql_fetch_array($result);
      if(!$poketmon){
        echo "<script>alert('这个小精灵不存在，请继续玩游戏！')</script>";
        echo "location.href='painting/'";
        exit;
      }else{
        $data['errorcode'] = '0';
        $data['name'] = $poketmon['name'];
        $data['pic'] = $poketmon['pic'];
        $data['info'] = $poketmon['info'];
        $data['good'] = $poketmon['good'];
        $data['id'] = $poketmon['id'];
        
        
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
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="css/getPrize.css"/>
  </head>
  <body><img src="img/pica/get.png" alt="get" class="bg"/><img src="<?=$data['pic']?>" alt="prize" class="prize"/>
    <p>获得精灵<span><?=$data['name']?></span> 一只! 赶快进入我的背包查看吧。</p>
    <p>玩游戏，赢大奖，尽在中国联通！</p>
    <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
  </body>
</html>