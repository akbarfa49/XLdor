<?php
	
	session_start();
	set_time_limit(7200);
	$msisdn = $_SESSION['msisdn'];
	$sessionId = $_SESSION['sessionId'];
	$ch = curl_init();
	
	//8111300
//$serviceid=13361;
	for($serviceid = 1000; $serviceid<=9999; $serviceid++)	{	
	$header =array('Host: my.xl.co.id',
					'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0',
					'Accept: application/json, text/plain, */*',
					'Accept-Language: en-US,en;q=0.5',
					'Accept-Encoding: gzip, deflate, br',
					'Referer: http://my.xl.co.id/pre/index1.html',
					'Content-Type: application/json',
					);
	
	$payload= array(  );
	
	//$body= '{"Header":null,"Body":{"Header":{"ReqID":"20190628191636","IMEI":1695480090},"opPutOfferStatusRq":{"msisdn":"'.$msisdn.'","status":"VIEWED","offerId":"'.$serviceid.'"}},"sessionId":"'.$sessionId.'","platform":"04","serviceId":"","packageAmt":"","reloadType":"","reloadAmt":"","packageRegUnreg":"","appVersion":"3.8.2","sourceName":"Firefox","sourceVersion":"","msisdn_Type":"P","screenName":"home.campaignManagement.cmsOfferBuy","mbb_category":""}';
	$body= '{"Header":null,"Body":{"Header":{"ReqID":"20190725054422","IMEI":3573566081},"opPutOfferStatusRq":{"msisdn":"'.$msisdn.'","status":"ACCEPTED","offerId":"'.$serviceid.'"}},"sessionId":"'.$sessionId.'","platform":"04","serviceId":"","packageAmt":"","reloadType":"","reloadAmt":"","packageRegUnreg":"","appVersion":"3.8.2","sourceName":"Firefox","sourceVersion":"","msisdn_Type":"P","screenName":"home.campaignManagement.cmsOfferBuy","mbb_category":""}';
	$url='https://my.xl.co.id/pre/opPutOfferStatusRq';
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	ulang:
	$result = curl_exec($ch);
	
	
	
	if($result== '{"responseCode":"04","message":"Database Issue Please Contact Admin"}'){
		goto ulang;
	}
	/*if($result != '{"responseCode":"04","message":"Service ID dont not match"}'){
	echo "<br/>";	
	}*/
	
	//echo $serviceid;
	/*echo $body;
	echo $result;
	echo "<br/>";
	*/
}

	
?>