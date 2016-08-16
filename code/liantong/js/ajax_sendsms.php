<?php
$uri = "https://sms.yunpian.com/v1/sms/send.json";
// 参数数组
$phone = $_POST['phone'];
$code = $_POST['code'];
$text = "【小精灵】您的验证码是".$code."。如非本人操作，请忽略本短信";

$data = array (
        'apikey' => '872e6b0236943d05364c424361c64649',
		'phone' => $phone,
		'text' => $text
);
 
$ch = curl_init ();
// print_r($ch);
curl_setopt ( $ch, CURLOPT_URL, $uri );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
$return = curl_exec ( $ch );
curl_close ( $ch );

print_r($return);
//echo 'ok';

?>