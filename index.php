<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('Attazk/line-bot.php');

$channelSecret = '424ee51ac8bf89a421f710db26117b46';
$access_token  = 'xdXHxzbKD7wjbiQN4HCZEOtQTjUxqSscUU83II4hShlbKB2f5AcpgXL3vS7s3rG/F0fuxIpoDeY6zFkLbAv1YIXFtIKPi69ZYvc8Fy5kPUYmKfMiP0xTxLaDOlpPkdlsBImYLiB0X/ulcyfp4f5gFQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
