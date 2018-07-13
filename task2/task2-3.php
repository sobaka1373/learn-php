<?php
/*Task 3*/
echo "Task 2-3<br>";
function searchWord($str, $word, $sensitive)
{
  if($sensitive == null || $sensitive == 0){
    $str=mb_strtolower($str);
    $count=0;
    $word_arr=explode(" ", $str);
    for($i=0, $len = count($word_arr); $i<$len; $i++){
      if($word_arr[$i]==$word){
        $count++;
      }
    }
    return $count;
  }
  elseif ($sensitive == 1) {
    $count = 0;
    $word_arr = explode(" ", $str);
    for($i=0, $len = count($word_arr); $i<$len; $i++){
      if($word_arr[$i] == $word){
        $count++;
      }
    }
    return $count;
  }
}
$test_str="teSt test Hello testworld is test";
$test_word="test";
$tmp=searchWord($test_str, $test_word, 1);
echo "Words in str = $tmp <br>";