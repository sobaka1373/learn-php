<?php
namespace task5;
include "Persons.php";
function swap(&$x,&$y) {
  $tmp=$x;
  $x=$y;
  $y=$tmp;
}
function group($persons, $type)
{
  if($type=="firstname"){
    for($i=0, $len = count($persons); $i<$len; $i++){
      for($j=0; $j<$len-1; $j++) {
        if($persons[$j]->firstName > $persons[$j+1]->firstName){
          swap($persons[$j], $persons[$j + 1]);
        }
      }
    }
    return $persons;
  }
  else if ($type=="lastname"){
    for($i=0, $len = count($persons); $i<$len; $i++){
      for($j=0; $j<$len; $j++) {
        if($persons[$i]->lastName > $persons[$j]->lastName){
          swap($persons[$j], $persons[$j + 1]);
        }
      }
    }
    return $persons;
  }
  else if($type=="age"){
    for($i=0, $len = count($persons); $i<$len; $i++){
      for($j=0; $j<$len; $j++) {
        if($persons[$i]->age > $persons[$j]->age){
          swap($persons[$j], $persons[$j + 1]);
        }
      }
    }
    return $persons;
  }
}

$items=array(new Persons("Bay", "Ivan", "81"),
  new Persons("Lena", "Polka", "55"),
  new Persons ("Gosho", "Petrov", "32"));

$items = group($items, "firstname");

for($i=0, $len = count($items); $i<$len; $i++){
  $items[$i]->getInfo();
}