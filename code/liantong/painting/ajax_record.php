<?php

include "conn.php";
$uid = $_POST['uid'];
$score = $_POST['score'];

//插入游戏数据
$result = mysql_query("SELECT id FROM user WHERE id = '$uid' ");
			$user = mysql_fetch_array($result);
			if(!$user){
				$data['errorcode'] = '56';
				$data['info'] = 'no such user';
				echo '56';
				exit;
			}else{		
				$time = time();
				$sql = "INSERT INTO gameinfo(uid, score, time) VALUES ('$uid','$score', '$time')";
				if(mysql_query($sql)){
					$data['errorcode'] = '0';
					$data['info'] = 'ok';
					//echo 'ok';
					echo getone($uid);
				}else{
					$data['errorcode'] = '29';
					$data['info'] = 'sql error';
					echo '56';
					exit;
				}
			}

function getone($uid){
//随机获取一只小精灵
			$c = rand(1,3);
			if($c==2){
				return '56';
			}
			else{
			$result = mysql_query("SELECT id FROM user WHERE id = '$uid' ");
			$user = mysql_fetch_array($result);
			if(!$user){
				$data['errorcode'] = '56';
				return '56';
			}else{
				$result = mysql_query("SELECT id FROM poketmon WHERE good = '0' AND id not in (SELECT pid FROM team WHERE uid = '$uid')");
				$poketmon = mysql_fetch_array($result);
				$id = $poketmon['id'];
				if(!$id){
					$data['errorcode'] = '55';
					$data['info'] = 'full poket';
					return 'fullpoket';
				}else{
					$time = time();
					$sql = "INSERT INTO team(uid, pid, time) VALUES ('$uid','$id', '$time')";
					if(mysql_query($sql)){
						$data['errorcode'] = '0';
						$data['poketmon_id'] = $id;
						return $id;
					}else
					{	
						$data['errorcode'] = '25';
						return '56';
					}
				}
			}
		}
}

?>