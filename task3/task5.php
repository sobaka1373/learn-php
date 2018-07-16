<?php

namespace task5;

include "Person.php";

function findMinAge($items)
{
  $min=$items[0];
  for($i=0, $len=count($items); $i<$len; $i++) {
    if($items[$i]->age<$min->age){
      $min=$items[$i];
    }
  }
  return $min;
}

$items=array(new Person("Bay", "Ivan", "81"),
  new Person ("Gosho", "Petrov", "32"),
  new Person("Lena", "Polka", "55"));
$min=findMinAge($items);
echo $min->__toString();