 <?php
  

function send_LINE($msg){
 $access_token = 'FHTjUkmtlVLZndTZW8ZJmPBczb3g4p13B7dcbWiT/BQjTqSGBtI9OmVrsdB6yzLgXcypyylQ3zZZ3yjo48ZRpTP58PCwwibqbCVgAxwzQNWnFU9xysfeJSRg7mR17KLfMpBNovkn7fABPwJ7yCBlIwdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U02f1325a2add2749ad5255937b16d3cc',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
