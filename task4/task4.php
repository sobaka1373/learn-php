<?php
function mixCasing($str)
{
  for ($i = 0, $len = strlen($str); $i < $len; $i++) {
    $tmp = rand(0,1);
    if ($tmp == 1){
      $str[$i] = strtoupper($str[$i]);
    } else {
      $str[$i] = strtolower($str[$i]);
    }
  }
  return $str;
}

function changText($str)
{
  preg_match_all('#<mixcase>(.+?)</mixcase>#is', $str, $temp);
  for($i = 0, $len = count($temp[1]); $i < $len; $i++) {
    $str = str_replace($temp[0][$i], mixCasing($temp[1][$i]), $str);
  };
  preg_match_all('#<upcase>(.+?)</upcase>#is', $str, $temp);
  for($i = 0, $len = count($temp[1]); $i < $len; $i++) {
    $str = str_replace($temp[0][$i], strtoupper($temp[1][$i]), $str);
  };
  preg_match_all('#<lowcase>(.+?)</lowcase>#is', $str, $temp);
  for($i = 0, $len = count($temp[1]); $i < $len; $i++) {
    $str = str_replace($temp[0][$i], strtolower($temp[1][$i]), $str);
  };
  var_dump($str);
}

$test = "We are <mixcase>living</mixcase> in a <upcase>yellow submarine</upcase>. We <mixcase>don't</mixcase> have <lowcase>anything</lowcase> else.";
changText($test);