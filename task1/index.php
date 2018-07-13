<?php
/*Task 1*/

$x=6;
$y=15;
$z=4;
$x += $y - $x++ * $z ;
echo "Answer on example x += y - x++ * z = ", $x, '<br>';
$z = -- $x - $y * 5 ;
echo "Answer on example z = -- x - y * 5 = ", $z, '<br>';
$y /= $x + 5 % $z;
echo "Answer on example y /= x + 5 % z = ", $y, '<br>';
$z = $x++ + $y * 5;
echo "Answer on example z = x++ + y * 5 = ", $z, '<br>';
$x = $y - $x++ * $z;
echo "Answer on example· x = y - x++ * z = ", $x, '<br>', "Where x = 6, y = 15, z = 4", '<br>';

/*Task 2*/
$a=rand(1, 10);
$b=rand(1, 10);
$c=rand(1, 10);
$avr=($a+$b+$c)/3;
echo "Average = ", $avr, ". Where a, b, c are equal ", $a, ", ",$b, ", ",$c, ".", '<br>';
?>
/*Task 3*/
<body>
<form action="form_calculating.php" method="post">
  <p>Input radius<br /><input type="text" name="radius" /></p>
  <p>Input height<br /><input type="text" name="height" /></p>
  <input type="submit" value="Submit"></p>
</form>
</body>
</html>
/*Task 4*/
<?php
$a=rand(1,15);
$b=rand($a+1, 20);
$temp=0;
echo "A = ", $a, " B = ", $b, '<br>';
for($a; $a<$b-1; $a++) {
  if(($a+1)%2==1){
    echo $a+1, '<br>';
  }
  $temp=$temp+$a+1;
}
echo "Sum = ", $temp, '<br>';
/*Task 5*/
$n=rand(1, 10);
$ans=1;
echo "N = ", $n;
do{
  $ans=$ans*$n;
  $n--;
}
while($n!=1);
echo " Answer = ", $ans, '<br>';

/*Task 6*/

for($i=0; $i<10; $i++){
  for($j=0; $j<10; $j++){
    if($i==0 || $i==9) {
      echo '*';
    }
    if($i>=1 && $i<=8){
      if($j==0 || $j==9) {
        echo '*';
      }
      else{
        echo '&ensp;';
      }
    }
  }
  echo '<br>';
}

for($i=0; $i<10; $i++){
  for($j=0; $j<10; $j++){
    if($j==0) {
      echo '*';
    }
    else if($i==$j){
      echo '*';
    }
    else if($i==9){
      echo '*';
    }
    else{
      echo '&ensp;';
    }
  }
  echo '<br>';
}

$len=11;
for($i=0; $i<$len; $i++){
  for($j=0; $j<$len; $j++){
    if($i==0 && ($j%2)!=1){
      echo '*';
    }
    else if($i/2==$j) {
      echo '*';
    }
    else if($j==$len-$i/2) {
      echo '*';
    }
    else {
      echo '&ensp;';
    }
  }
  echo '<br>';
}
$len=10;
for($i=0; $i<$len+1; $i++){
  for($j=0; $j<$len+1; $j++){
    if($j==$len/2 && $i==0) {
      echo '*';
    }
    else if($j==$len/2-$i && $i<$len/2 && $i!=0){
      echo '*';
    }
    else if($j==$len/2+$i){
      echo '*';
    }
    else if($j==$i-$len/2 && $i>=$len/2){
      echo '*';
    }
    else if($j==$len-$i+$len/2 && $i>=$len/2){
      echo '*';
    }
    else{
      echo '&ensp;';
    }
  }
  echo '<br>';
}
?>
  /*Task 7*/
  <html>
  <body>
  <form action="arr_calculating.php" method="post">
    <p>Input array length<br /><input type="number" name="arr_len" /></p>
    <input type="submit" value="Submit"></p>
  </form>
  </body>
  </html>
  /*Task 8*/
<?php
echo '<br>';
for($i=0; $i<5; $i++){
  for($j=0; $j<5; $j++){
    $arr[$i][$j]=rand(-10, 10);
    print_r($arr[$i][$j]);
    echo '&ensp;';
  }
  echo '<br>';
}
echo '<br>';
for($i=0; $i<5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    if ($i == $j && $arr[$i][$j]<0) {
      $arr[$i][$j] = 0;
    }
    else if($i == $j && $arr[$i][$j]>0) {
      $arr[$i][$j] = 1;
    }
    print_r($arr[$i][$j]);
    echo '&ensp;';
  }
  echo '<br>';
}