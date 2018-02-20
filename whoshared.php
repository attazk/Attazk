/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '/2061250044110174/sharedposts',
    '{EAACEdEose0cBADJyj5ACvULsBI6tABtkZAvHN5yYDxUoQF3GxNp3cjexB1msekLcZCnhw8EcbjIY0PMReFUVWdDZByTBk518HzUEG8fns4kT64jhNEZAdE0wqKJbaotNcxv6tpTljjc0jkRqtpqB3qgtQZAyej7N53kH1l6QIe1MrZCEhnRht9rl8QY0fMMrIZD}'
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
/* handle the result */
