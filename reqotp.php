<?php
//bismillah
set_time_limit(60);

	$msisdn = filter_var($_POST['MSISDN'], FILTER_SANITIZE_NUMBER_INT);
    $ch = curl_init();
    $header = array('Host: my.xl.co.id',
					'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0',
					'Accept: application/json, text/plain, */*',
					'Accept-Language: en-US,en;q=0.5',
					'Accept-Encoding: gzip, deflate, br',
					'Referer: http://my.xl.co.id/pre/index1.html',
					'Content-Type: application/json',
					);
	
    $payload = array("Header"=>null,"Body"=>["Header"=>["ReqID"=>"20190626113247","IMEI"=>1695480090],"LoginSendOTPRq"=>["msisdn"=>"$msisdn"]],"sessionId"=>null,"onNet"=>"False","platform"=>"04","serviceId"=>"","packageAmt"=>"","reloadType"=>"","reloadAmt"=>"","packageRegUnreg"=>"","appVersion"=>"3.8.2","sourceName"=>"Firefox","sourceVersion"=>"","screenName"=>"login.enterLoginNumber");
    
    $body = json_encode($payload);
    

    $url = 'https://my.xl.co.id/pre/LoginSendOTPRq';
    curl_setopt($ch, CURLOPT_URL, $url);  
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	
 	$result = curl_exec($ch); 
 	echo $result;


/*if($result == '{"LoginSendOTPRs":{"headerRs":{"responseCode":"00","responseMessage":"Success"}},"msisdn_Type":"P","mbb_category":""}')
echo 'sukses';
*/

	  
?>