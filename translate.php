<?php
	$get_param = "api-version=3.0&to=en&textType=html";
	$url = "https://api.cognitive.microsofttranslator.com/translate?" . $get_param;

	$region = "japaneast";
	$key = "xxxxxxxxxxxxxxxxxxxx";
	$header = array(
		"Content-Type: application/json",
		"Ocp-Apim-Subscription-Region: " . $region,
		"Ocp-Apim-Subscription-Key: " . $key
	);

	$text = "<div><span>こんにちは、世界!</span></div>";
	$param = array(
		array(
			"Text" => $text
		)
	);
	$param = json_encode($param);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

	$result = curl_exec($ch);

	curl_close($ch);

	echo $result;
?>