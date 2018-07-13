<?php
/*Task 5*/
echo "Task 2-5<br>";
function findNumbArr($numb, $arr)
{
  $count=0;
  for($i=0, $len = count($arr); $i<$len; $i++){
    if($arr[$i]==$numb){
      $count++;
    }
  }
  return $count;
}
function testFindNumb()
{
  $test_arr=[0, 7, 5, 6, 7, 5, 9, 7];
  $true_answ=3;
  $finded_numb=7;
  $answ=findNumbArr($finded_numb, $test_arr);
  if($answ==$true_answ){
    return 1;
  }
  else{
    return 0;
  }
}
$tmp=testFindNumb();
if ($tmp==1){
  echo "Test complete, correct <br>";
}
else{
  echo "Test complete, not correct <br>";
}