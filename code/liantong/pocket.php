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
    <link rel="stylesheet" href="css/pocket.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body><img src="img/pica/pica_bg.png" alt="bg" class="bg"/>
    <h2 class="title">我的背包</h2>

<?php

include "conn.php";
function haveit($uid,$pid){
    $result = mysql_query("SELECT * FROM team WHERE uid = '$uid' AND pid = '$pid' ");
    $have_it = mysql_fetch_array($result);
    if($have_it){
      return 1;
    }else{
      return 0;
    }
}

$result = mysql_query("SELECT * FROM poketmon WHERE 1 order by id asc ");
$n = 2;
while($info = mysql_fetch_array($result)){
         $pid = $info['id'];
         if(haveit($uid,$pid)){
          ?>
           <div class="section s<?=$n?>"><img src="<?=$info['pic']?>" alt="pica<?=$n?>"/>
          <p class="have">已拥有</p>
           </div>
          <?php
         }else{
          ?>
          <div class="section s<?=$n?>"><img src="<?=$info['pic']?>" alt="pica<?=$n?>"/>
          <p class="nothave">未拥有</p>
           </div>
          <?php
         }
         $n++;
}

?>

    <div class="bott">
      <h2>快去赢取更多的精灵和奖励吧~</h2>
    </div>
     <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
  </body>
</html>