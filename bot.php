<?php
$access_token = 'xdXHxzbKD7wjbiQN4HCZEOtQTjUxqSscUU83II4hShlbKB2f5AcpgXL3vS7s3rG/F0fuxIpoDeY6zFkLbAv1YIXFtIKPi69ZYvc8Fy5kPUYmKfMiP0xTxLaDOlpPkdlsBImYLiB0X/ulcyfp4f5gFQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			{
	"events" : [
		{
			"type" : "message",
			"replyToken" : "10cf9184......77b644a",
			"source" : {
				"userId" : "U39f72cc......028ba7f",
				"type" : "user"
			},
			"timestamp" : 1486930283681,
			"message": {
				"type" : "sticker",
				"id" : "5638..08546..1",
				"stickerId" : "2.5.99",
				"packageId" : "10..176"
			}
		}
	]
}
			
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
