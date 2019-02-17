<?php
$url = "https://www.instagram.com/ngyemilie/?hl=fr";
$curl = curl_init();

$opts = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; GTI9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
];

curl_setopt_array($curl, $opts);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
