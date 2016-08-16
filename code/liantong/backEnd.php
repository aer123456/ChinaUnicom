<?php
include "config.php";
if($_COOKIE['admin']!='1'){
  echo "<script>location.href='index.php'</script>";
  exit;
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
    <link rel="stylesheet" href="css/backEnd.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <h3>用户邀请号码审核平台</h3>
    <div class="invites"> 
<?php
$rs=mysql_query("SELECT * from invite WHERE state = '0' order by id desc limit 200 ");
    while($info = mysql_fetch_array($rs)){

      ?>
      <div class="invite"> 
      <span>邀请人ID：</span>
      <span><?=$info['uid']?> </span>
      <span class="number"><?=$info['phone']?> </span>
      <a class="status pass" onclick="pass('<?=$info['id']?>')">通过</a>
      <a class="status notpass" onclick="nopass('<?=$info['id']?>')">不通过</a></div>
      <?php
         
    }

?>
    

    </div>
    <p>您点击通过或者不通过，将决定用户的邀请是否有效，从而决定他是否获得精灵。</p>
   <div class="footer">
      <div class="links"><a href="index.php" class="gaps playgame">去玩游戏得精灵</a><a href="invite.php" class="gaps invitefriend">去邀请得精灵</a><a href="pocket.php" class="gaps mypocket">我的背包</a><a href="rule.php" class="gamerule">活动规则</a></div>
      <div class="img"><img src="img/1.png" alt="img"/><img src="img/2.png" alt="img"/><img src="img/3.png" alt="img"/><img src="img/4.png" alt="img"/><img src="img/5.png" alt="img"/><img src="img/6.png" alt="img"/><img src="img/7.png" alt="img"/></div>
      <script src="js/jquery-3.0.0.min.js"></script>
    </div>
    <script type="text/javascript">
      function pass(id){
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
              location.reload()
              
            }
            else{
              alert('操作失败')
              
            }
          }
        }
      xmlhttp.open("POST","ajax_pass.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("op=1&id="+id);
      }


      function nopass(id){
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
              location.reload()
              
            }
            else{
              alert('操作失败')
              
            }
          }
        }
      xmlhttp.open("POST","ajax_pass.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("op=2&id="+id);
      }
    </script>
  </body>
</html>