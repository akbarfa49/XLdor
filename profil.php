<?php
/*session_start();
$msisdn = $_SESSION['msisdn'];
$sessionId = $_SESSION['sessionId'];
$ch = curl_init();

$url = "https://my.xl.co.id/pre/GetRemainingAllowanceDiameterWebInfoRq";

$header =array('Host: my.xl.co.id',
					'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0',
					'Accept: application/json, text/plain,
					'Accept-Language: en-US,en;q=0.5',
					'Accept-Encoding: gzip, deflate, br',
					'Referer: http://my.xl.co.id/pre/index1.html',
					'Content-Type: application/json'
					);
					
$payload = array("Header"=>null,"Body"=>["Header"=>["ReqID"=>"20190705195908","IMEI"=>1695480090],"GetRemainingAllowanceDiameterWebInfoRq"=>["msisdn"=>"$msisdn","channel"=>"WebInfo","service_type"=>"UMBALL"]],"sessionId"=>"$sessionId","serviceId"=>"","packageAmt"=>"","reloadType"=>"","reloadAmt"=>"","packageRegUnreg"=>"","platform"=>"04","appVersion"=>"3.8.2","sourceName"=>"Firefox","sourceVersion"=>"","msisdn_Type"=>"P","screenName"=>"home.dashboard","mbb_category"=>"");

$body = json_encode($payload);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

$result = curl_exec($ch);

print_r($result);
*/


	
	
$params = json_encode($test);

echo $params->SOAP-ENV:Envelope;



















?>