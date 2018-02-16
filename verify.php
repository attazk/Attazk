<?php
$access_token = 'xdXHxzbKD7wjbiQN4HCZEOtQTjUxqSscUU83II4hShlbKB2f5AcpgXL3vS7s3rG/F0fuxIpoDeY6zFkLbAv1YIXFtIKPi69ZYvc8Fy5kPUYmKfMiP0xTxLaDOlpPkdlsBImYLiB0X/ulcyfp4f5gFQdB04t89/1O/w1cDnyilFU=
';

$url = ' https://api.line.me/v2/bot/message/reply';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

