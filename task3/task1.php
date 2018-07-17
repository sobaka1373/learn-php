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
  if ($a == $b && $b == $c) {
    return false;
  } elseif ($a->p1 == $c->p2) {
    if ($a->p2 == $b->p1) {
      if ($b->p2 == $c->p1) {
        return true;
      }
    }
  } elseif ($a->p1 == $b->p2) {
    if ($a->p2 == $c->p1) {
      if ($c->p2 == $b->p1)
        return true;
    }
  }
  return false;
}

$p1 = new Point(10, 20);
$p2 = new Point(30, 40);
$line0 = new Line($p1, $p2);
$tmp = pointToPoint($p1, $p2);
echo "$tmp <br>";
echo $line0;
$p3 = new Point(0, 0);
$p4 = new Point(1, 1);
$p5 = new Point(2, 2);
$line1 = new Line($p3, $p4);
$line2 = new Line($p4, $p5);
$line3 = new Line($p5, $p3);
$tmp1 = checkTriangle($line1, $line2, $line3);

if($tmp1) {
  echo "<br>Это треугольник<br>";
}
else{
  echo "<br>Это не треугольник<br>";
}