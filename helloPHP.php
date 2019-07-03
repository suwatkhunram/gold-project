<html>
<body>

<?php

//echo"test text by suwat khunram";
/*
ini_set("allow_url_fopen", 1);

$json = file_get_contents('http://www.thaigold.info/RealTimeDataV2/gtdata_.txt');
$obj = json_decode($json);
echo $obj->access_token;
*/
/*
ini_set("allow_url_fopen", 1);
class myClass {
    public static function getJsonData() {
      $tree = [];
      $url = 'http://www.thaigold.info/RealTimeDataV2/gtdata_.txt';
  
      $request = remote::request($url);
      
      if (!empty($request->content)) {
        $tree = json_decode($request->content);
      }
      return $tree;
    }
}
echo "test echo";

$tree = myClass::getJsonData();
*/

//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
$url="http://www.thaigold.info/RealTimeDataV2/gtdata_.txt";
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
$array = json_decode($result, true);
// Will dump a beauty json :3
//var_dump(json_decode($result, true));
echo "ซื้อทองแท่ง : ".$array[4]["bid"]; 
echo "ขายทองแท่ง : ".$array[4]["ask"]; 

?>
</body>


