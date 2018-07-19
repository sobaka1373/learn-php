<?php
function checkBrackets($str)
{
  $left = 0;
  $right = 0;
  for ($i = 0, $len = strlen($str); $i < $len; $i++) {
    if ($str[$i] == '(') {
      $left++;
    } elseif ($str[$i] == ')') {
      $right++;
    }
  }
  if ($left == $right){
    return true;
  } else {
    return false;
  }
}
$test = "((a+b))/5-d)";
$tmp = checkBrackets($test);
if ($tmp) {
  echo "correct";
} else {
  echo "NO correct";
}