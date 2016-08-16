<?php
header("Content-Type:text/html;charset=utf-8");
$phone = $_POST['phone'];
$code = $_POST['code'];
$apikey = "872e6b0236943d05364c424361c64649"; //修改为您的apikey(https://www.yunpian.com)登陆官网后获取
$mobile = $phone; //请用自己的手机号代替
$text="【小精灵】您的验证码是".$code."。如非本人操作，请忽略本短信";
$ch = curl_init();

/* 设置验证方式 */

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));

/* 设置返回结果为流 */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* 设置超时时间*/
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

/* 设置通信方式 */
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


$data=array('text'=>$text,'apikey'=>$apikey,'mobile'=>$mobile);
$json_data = send($ch,$data);
$array = json_decode($json_data,true);
//echo '<pre>';print_r($array);

echo 'ok';

function send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}
/*



$uri = "https://sms.yunpian.com/v1/sms/send.json";
// 参数数组
$text = "【小精灵】您的验证码是".$code."。如非本人操作，请忽略本短信";

$data = array (
        'apikey' => '872e6b0236943d05364c424361c64649',
		'phone' => $phone,
		'text' => $text
);
$headers = array(
    'Accept:application/json',
    'charset=utf-8',
    'Content-Type:application/x-www-form-urlencoded',
    'charset=utf-8'
);
 
$ch = curl_init ();
// print_r($ch);
curl_setopt ( $ch, CURLOPT_URL, $uri );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
$return = curl_exec ( $ch );
curl_close ( $ch );
 
print_r($return);
//echo 'ok';
*/
?>