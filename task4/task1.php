<?php
function reverseString($str)
{
  return strrev($str);
}
$str = "Hello";
$str = reverseString($str);
echo $str;