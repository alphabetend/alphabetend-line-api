<?php
$access_token = 'Nt4RV0d8SeX/CSfpyXvvJG+U6cgtaUsy6KxKpRAQqhcXzzjpCqGFgr+2MXVUP/LACqHm1ruoTRZBhdnxAzTw1izy6yuANJDIQvBBLbjz15E8u7j1lKaSt3AhbmI2AgFq8WIV4j3je0VYqddpieLXmgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
