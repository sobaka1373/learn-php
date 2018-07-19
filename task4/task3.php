<?php
function findString($str, $sub_str)
{
  $str = strtolower($str);
  $sub_str = strtolower($sub_str);
  return substr_count($str, $sub_str);
}
$text = "The text is as follows: We are liv<b>in</b> **in** an yellow
submar<b>in</b>e. We don't have anyth<b>in</b>g else. **In**side the submar<b>in</b>e is very tight. So we are
dr<b>in</b>k<b>in</b>g all the day. We will move out of it **in** 5 days.";
$target = "in";
$count = findString($text, $target);
echo "Result:  $count";