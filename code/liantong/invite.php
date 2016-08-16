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
    <link rel="stylesheet" href="css/invite.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <h3>邀请好友获得额外精灵哦 </h3>
    <div class="invites">
<?php
include "conn.php";
$result = mysql_query("SELECT * FROM invite WHERE uid = '$uid' ");
    $n = 1;
    while($info = mysql_fetch_array($result)){
          if($info['state']=='1'){
            $state = '通过';
            $state2 = 'pass';
          }else{
            $state = '未通过';
            $state2 = 'nopass';
          }
          ?>
          <div class="invite"> <span>受邀请人<?=$n?>：</span><span class="number"> <?=$info['phone']?> </span><span class="status <?=$state2?>"><?=$state?></span></div>
          <?php
          }
?>
      
   
    </div>
    <div class="add"> 
      <div class="addone"> 
        <p>新增一个邀请： </p>
        <input type="number" id="phone_number" placeholder="输入你邀请的手机号码"/>
        <button onclick="invite()">确认邀请</button>
      </div>
    </div>
    <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>

    <script type="text/javascript">
      function invite(){
        var phone = document.getElementById('phone_number').value;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
            if(xmlhttp.responseText=='ok'){
              alert('添加邀请成功，请等待审核')
              location.href='invite.php'
            }
            else{
              alert('添加邀请失败，请重新添加')
              location.href='invite.php'
              
            }
          }
        }
      xmlhttp.open("POST","ajax_addinvite.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("uid=<?=$uid?>&phone="+phone);

      }
    </script>
  </body>
</html>