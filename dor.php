<?php
	
	session_start();
	set_time_limit(3600);
	$msisdn = $_SESSION['msisdn'];
	$sessionId = $_SESSION['sessionId'];
	$ch = curl_init();
	
	//8111300
//$serviceid=8110936;
	for($serviceid = 8111000; $serviceid<=8111200; $serviceid++)	{	
	$header =array('Host: my.xl.co.id',
					'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0',
					'Accept: application/json, text/plain, */*',
					'Accept-Language: en-US,en;q=0.5',
					'Accept-Encoding: gzip, deflate, br',
					'Referer: http://my.xl.co.id/pre/index1.html',
					'Content-Type: application/json',
					);
	
	$payload= array( "Header"=>null,"Body"=>["HeaderRequest"=>["applicationID"=>"3","applicationSubID"=>"1","touchpoint"=>"MYXL","requestID"=>"20190629123408","msisdn"=>"$msisdn","serviceID"=>"$serviceid"],"opPurchase"=>["msisdn"=>"$msisdn","serviceid"=>"$serviceid"],"XBOXRequest"=>["requestName"=>"GetSubscriberMenuId","Subscriber_Number"=>"1298376320","Source"=>"mapps","Trans_ID"=>"119520832111","Home_POC"=>"BD5","PRICE_PLAN"=>"513268","PayCat"=>"PRE-PAID","Active_End"=>"20190730","Grace_End"=>"20190829","Rembal"=>"0","IMSI"=>"510110032177230","IMEI"=>"3571250436519001","Shortcode"=>"mapps"],"Header"=>["IMEI"=>1695480090,"ReqID"=>"20190629123408"]],"sessionId"=>"$sessionId","serviceId"=>"$serviceid","packageRegUnreg"=>"Reg","reloadType"=>"","reloadAmt"=>"","packageAmt"=>"27.000","platform"=>"04","appVersion"=>"3.8.2","sourceName"=>"Firefox","sourceVersion"=>"","msisdn_Type"=>"P","screenName"=>"home.storeFrontReviewConfirm","mbb_category"=>"" );
	
	$body= json_encode($payload);
	
	$url='https://my.xl.co.id/pre/opPurchase';
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
	
	echo $serviceid;
	echo $result;
	echo "<br/>";
}

	
?>