<?php
echo "<br>Task 1-2<br>";
function charCompare($char1, $char2)
{
  if($char1>$char2){
    return 1;
  }
  else if ($char1<$char2){
    return -1;
  }
  else{
    return 0;
  }
}
$tmp="Helloworld";
$arr1=str_split($tmp);
$arr2=array_reverse($arr1);
for($i=0, $len = count($arr1); $i<$len; $i++) {
  switch (charCompare($arr1[$i], $arr2[$i])) {
    case 0:
      echo "$arr1[$i] = $arr2[$i] <br>";
      break;
    case  1:
      echo "$arr1[$i] > $arr2[$i] <br>";
      break;
    case -1:
      echo "$arr1[$i] < $arr2[$i] <br>";
      break;
  }
}