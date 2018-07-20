<?php
function findPalindromes($str)
{
  $word_arr = mb_split(" ", $str);
  for ($i = 0, $len = count($word_arr); $i < $len; $i++) {
    if($word_arr[$i] == strrev($word_arr[$i])) {
      $palinbdromes[] = $word_arr[$i];
    }
  }
  return $palinbdromes;
}
$text = "test ABBA set lamal lama loren ip exe san";
$tmp = findPalindromes($text);
var_dump($tmp);