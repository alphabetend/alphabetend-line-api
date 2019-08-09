 <?php
 function pubMqtt($topic,$msg){
       $APPID= "alphabetlinebot"; //enter your appid
     $KEY = "XDOJv1ll49xBH0Q"; //enter your key
    $SECRET = "wJSW9DvcgXOVRbZgV5KELviGf"; //enter your secret
    $Topic = "$topic"; 
   $msg = '{
  "type": "flex",
  "altText": "Flex Message",
  "contents": {
    "type": "bubble",
    "direction": "ltr",
    "header": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "text",
          "text": "Header",
          "align": "center"
        },
        {
          "type": "text",
          "text": "Text"
        }
      ]
    },
    "hero": {
      "type": "image",
      "url": "https://developers.line.biz/assets/images/services/bot-designer-icon.png",
      "size": "full",
      "aspectRatio": "1.51:1",
      "aspectMode": "fit"
    },
    "body": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "text",
          "text": "เลขวงจร",
          "size": "xl",
          "align": "center"
        },
        {
          "type": "text",
          "text": "ดูกราฟ",
          "size": "xl",
          "align": "center",
          "gravity": "center",
          "color": "#000000",
          "action": {
            "type": "message",
            "label": "ดูกราฟ",
            "text": "ดูกราฟ"
          }
        }
      ]
    }
  }
}';
      put("https://api.netpie.io/microgear/".$APPID.$Topic."?retain&auth=".$KEY.":".$SECRET,$msg);
 
  }
 function getMqttfromlineMsg($Topic,$lineMsg){
 
    $pos = strpos($lineMsg, ":");
    if($pos){
      $splitMsg = explode(":", $lineMsg);
      $topic = $splitMsg[0];
      $msg = $splitMsg[1];
      pubMqtt($topic,$msg);
    }else{
      $topic = $Topic;
      $msg = $lineMsg;
      pubMqtt($topic,$msg);
    }
  }
 
  function put($url,$tmsg)
{
      
    $ch = curl_init($url);
 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
     
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $tmsg);
 
    //curl_setopt($ch, CURLOPT_USERPWD, "mJ7K4MfteC7p0dW:pp4gzMhCvJIqlxc66hKEvk46m");
     
    $response = curl_exec($ch);
    
      curl_close($ch);
      echo $response . "\r\n";
    return $response;
}
// $Topic = "NodeMCU1";
 //$lineMsg = "CHECK";
 //getMqttfromlineMsg($Topic,$lineMsg);
?>
