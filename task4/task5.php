<?php
function replaceSpaces($str)
{
  return str_replace(" ",  "&nbsp;", $str);
}
$test = "We are living in a yellow submarine. We don't have anything else.";
$test = replaceSpaces($test);
echo $test;