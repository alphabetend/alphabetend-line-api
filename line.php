 <?php
  

function send_LINE($msg){
 $access_token = 'Nt4RV0d8SeX/CSfpyXvvJG+U6cgtaUsy6KxKpRAQqhcXzzjpCqGFgr+2MXVUP/LACqHm1ruoTRZBhdnxAzTw1izy6yuANJDIQvBBLbjz15E8u7j1lKaSt3AhbmI2AgFq8WIV4j3je0VYqddpieLXmgdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uebe18e4ab6acfe97f72bcc9374a74977',
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
