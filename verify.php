<?php
$access_token = 'FHTjUkmtlVLZndTZW8ZJmPBczb3g4p13B7dcbWiT/BQjTqSGBtI9OmVrsdB6yzLgXcypyylQ3zZZ3yjo48ZRpTP58PCwwibqbCVgAxwzQNWnFU9xysfeJSRg7mR17KLfMpBNovkn7fABPwJ7yCBlIwdB04t89/1O/w1cDnyilFU=
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
