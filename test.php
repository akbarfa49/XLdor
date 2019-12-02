<?php
session_start();
echo $_SESSION['msisdn'];
session_unset();
session_destroy();
/*set_time_limit(60);
session_start();  usRq';

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETUR   sad HEADER, $header);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	$result = curl_exec($ch);   
	
echo $result;
*/
?>