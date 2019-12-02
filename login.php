<?php
$msisdn = filter_var($_POST['MSISDN'], FILTER_SANITIZE_NUMBER_INT);
$otp		= filter_var($_POST['otp'], FILTER_SANITIZE_STRING);


$ch = curl_init();
$header =array('Host: my.xl.co.id',
					'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0',
					'Accept: application/json, text/plain, */*',
					'Accept-Language: en-US,en;q=0.5',
					'Accept-Encoding: gzip, deflate, br',
					'Referer: http://my.xl.co.id/pre/index1.html',
					'Content-Type: application/json',
					);


	$payload = array("Header"=>null,"Body"=>["Header"=>["ReqID"=>"20190627133215","IMEI"=>1695480090],"LoginValidateOTPRq"=>["headerRq"=>["requestDate"=>"20190627","requestId"=>"20190627133215","channel"=>"MYXLPRELOGIN"],"msisdn"=>"$msisdn","otp"=>"$otp"]],"sessionId"=>null,"platform"=>"04","msisdn_Type"=>"P","serviceId"=>"","packageAmt"=>"","reloadType"=>"","reloadAmt"=>"","packageRegUnreg"=>"","appVersion"=>"3.8.2","sourceName"=>"Firefox","sourceVersion"=>"","screenName"=>"login.enterLoginOTP","mbb_category"=>"");
	$body = json_encode($payload);

	$url = "https://my.xl.co.id/pre/LoginValidateOTPRq";

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	$result = curl_exec($ch);


				//decodejson
				$character = json_decode($result);
				
				//forwarding inform
				$char = $character->sessionId;
				$pre = $character->LoginValidateOTPRs;
				
			
echo $result;
session_start();
$_SESSION['msisdn']= $msisdn;
$_SESSION['sessionId']= $char;


?>