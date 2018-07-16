<?php

namespace task1;

include "Point.php";
include "Line.php";

function pointToPoint(Point $a, Point $b)
{
  return sqrt(pow($b->x - $a->x, 2) + pow($b->y - $a->y, 2));
}

function checkTriangle(Line $a, Line $b, Line $c)
{
  if($a == $b && $b == $c) {
    return false;
  } else if($a->x1==$c->x2 && $a->y1 == $c->y2) {
    if($a->x2 == $b->x1 && $a->y2 == $b->y1) {
      if($b->x2 == $c->x1 && $b->y2 == $c->y1) {
        return true;
      }
    }
  } else if( $a->x1 == $b->x2 && $a->y1 == $b->y2){
    if($a->x2 == $c->x1 && $a->y2 == $c->y1) {
      if($c->x2 == $b->x1 && $c->y2 == $b->y1)
      return true;
    }
  }
  return false;
}

$p1=new Point(10, 20);
$p2 = new Point(30, 40);
$line0=new Line($p1, $p2);
echo $line0->__toString();
$tmp=pointToPoint($p1, $p2);
echo $tmp;
$p3=new Point(0, 0);
$p4 = new Point(1, 1);
$p5=new Point(2, 2);
$line1=new Line($p3, $p4);
$line2=new Line($p4, $p5);
$line3=new Line($p5, $p3);
$tmp1=checkTriangle($line1, $line2, $line3);

if($tmp1) {
  echo "<br>Это треугольник<br>";
}
else{
  echo "<br>Это не треугольник<br>";
}