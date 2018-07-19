<?php
function jsonURL($url)
{
  $temp = preg_split('#\/(.+?)\/#is', $url);
  for ($i = 0, $len = count($temp); $i < $len; $i++) {
    $url = str_replace($temp[$i], "", $url);
  }
  $url = str_replace("/", "", $url);
  $temp[] = $url;
  $json_arr = array('protocol:'=>$temp[0], 'server:'=> $temp[2], 'resource:'=> $temp[1]);
  var_dump($json_arr);
  return json_encode($json_arr);
}
$temp = "http://www.devbg.org/forum/index.php";
$temp = jsonURL($temp);
var_dump($temp);