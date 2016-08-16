<?php
$id = $_POST['id'];
$op = $_POST['op'];

include "conn.php";


if($op=='1'){
	$result = mysql_query("SELECT uid FROM invite WHERE id = '$id' ");
	$user = mysql_fetch_array($result);
	$uid = $user['uid'];
	$result = mysql_query("SELECT id FROM poketmon WHERE good = '1' AND id not in (SELECT pid FROM team WHERE uid = '$uid')");
				$poketmon = mysql_fetch_array($result);
				$pid = $poketmon['id'];
				if(!$pid){
					$data['errorcode'] = '55';
					$data['info'] = 'full poket';
				}else{
					$time = time();
					$sql = "INSERT INTO team(uid, pid, time) VALUES ('$uid','$pid', '$time')";
					if(mysql_query($sql)){
					
					}else
					{	
						
					}
				}
}


$sql = "UPDATE invite SET state = '$op' WHERE id = $id ";
		if(mysql_query($sql)){
					echo 'ok';
				}else{
					echo 'error';
				}

?>