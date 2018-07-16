<?php
namespace task1;
include "Point.php";
include "Line.php";
function pointToPoint(Point $a, Point $b)
{
  $ans=sqrt(pow($b->x - $a->x, 2) + pow($b->y - $a->y, 2));
  return $ans;
}
function checkTriangle(Line $a, Line $b, Line $c)
{
  if($a == $b && $b == $c) {
    return 0;
  }
  else if($a->x1==$c->x2 && $a->y1 == $c->y2) {
    if($a->x2 == $b->x1 && $a->y2 == $b->y1) {
      if($b->x2 == $c->x1 && $b->y2 == $c->y1) {
        return 1;
      }
    }
  }
  else if( $a->x1 == $b->x2 && $a->y1 == $b->y2){
    if($a->x2 == $c->x1 && $a->y2 == $c->y1) {
      if($c->x2 == $b->x1 && $c->y2 == $b->y1)
      return 1;
    }
  }
  return 0;
}
$p1=new Point(10, 20);
$p2 = new Point(30, 40);
$line0=new Line($p1->x, $p1->y, $p2->x, $p2->y);
echo $line0->lineInfo();
$tmp=pointToPoint($p1, $p2);
echo $tmp;
$line1=new Line(0, 0, 1, 1);
$line2=new Line(1, 1, 2, 2);
$line3=new Line(2, 2, 0, 0);
$tmp1=checkTriangle($line1, $line2, $line3);
if($tmp1==1) {
  echo "<br>Это треугольник<br>";
}
else{
  echo "<br>Это не треугольник<br>";
}