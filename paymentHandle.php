<?php
	//$ch = curl_init();
	// set url
	$test=$_GET["access_token"];
	$url = 'https://api.venmo.com/v1/payments';
	$fields = array(
		'access_token' => $test,
		'phone' => "9735182106",
		'amount' => 20,
		'note' => "hi.");
	// use key 'http' even if you send the request to https://...
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($fields),
		),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	var_dump($result);	
?>