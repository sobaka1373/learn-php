<?php
function findPalindromes($str)
{
  $tmp = strrev($str);
  $reverse_word_arr = mb_split(" ", $tmp);
  $reverse_word_arr = array_reverse($reverse_word_arr);
  $word_arr = mb_split(" ", $str);
  for ($i = 0, $len = count($word_arr); $i < $len; $i++) {
    if($word_arr[$i] == $reverse_word_arr[$i]) {
      $palinbdromes[] = $word_arr[$i];
    }
  }
  return $palinbdromes;
}
$text = "test ABBA set lamal lama loren ip exe san";
$tmp = findPalindromes($text);
var_dump($tmp);