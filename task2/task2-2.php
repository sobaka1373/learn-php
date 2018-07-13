<?php
echo "Task 2-2<br>";
function reverseNumber($int)
{
  $str=strval($int);
  $tmp=strrev($str);
  $int=intval($tmp);
  return $int;
}
$tmp=reverseNumber(256);
echo "Reverse 256-> $tmp <br>";