<?php
header('Content-Type: text/html; charset=UTF-8');
header('Content_Language: ja');

unset($name,$phonetic,$phone,$email,$comments,$body);

$name      						= filter_input(INPUT_POST, 'name');
$phonetic     				= filter_input(INPUT_POST, 'phonetic');
$phone     						= filter_input(INPUT_POST, 'phone');
$email     						= filter_input(INPUT_POST, 'mail');
$comments							= filter_input(INPUT_POST, 'comments');

mb_language('uni');
mb_internal_encoding('UTF-8');

$from			="From:" .mb_encode_mimeheader("{$name}") ."<{$email}>";
$to				= "info@conviction-inc.com";
//$to				= "info@worokas.com";
$subject 	= "ホームページからのお問い合わせ";
$body = "
お名前：{$name}\n
フリガナ：{$phonetic}\n
電話番号：{$phone}\n
E-MAIL：{$email}\n
\n質問：{$comments}\n
";

$ret = mb_send_mail($to,$subject,$body,$from);

if($ret){
  echo json_encode(array('validation' => 'success', 'html' => '<p class="success">お問い合わせありがとうございます！</p><p class="success">Thank you <strong>'.$name.'</strong>, your message has been submitted to us.</p>'));
}else{
  //header("HTTP/1.1 503 Service Unavailable");
}

?>