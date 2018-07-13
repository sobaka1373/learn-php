<?php
echo "Task 2-4<br>";
function findDiv($html)
{
  $matches=0;
  preg_match_all('/div/', $html, $matches);
  $tmp = count($matches[0]);
  return $tmp;
}
$html = file_get_contents('http://stackoverflow.com/questions/ask');
$count_div=findDiv($html);
echo "div count = $count_div <br>";