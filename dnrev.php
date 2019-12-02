<?php
$header = array('Host: rdn.privateindo.id',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0','
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8','
Accept-Language: en-US,en;q=0.5','
Accept-Encoding: gzip, deflate, br','
Referer: https://rdn.privateindo.id/top-up/voucher/top-up.php','
Content-Type: application/x-www-form-urlencoded','
Content-Length: 20','
Connection: keep-alive','
Cookie: __cfduid=d1b39e1224005194163b63ffdfce7a5c81559649238; PHPSESSID=221fq4tb1lsp15qbjo4v7g9me0','
Upgrade-Insecure-Requests: 1');
$body ='is_submit=true&id=16';
$ch = curl_init();

$url='https://rdn.privateindo.id/top-up/voucher/actbonus.php';
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	$result = curl_exec($ch);

echo $result;
?>