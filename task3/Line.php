<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 13.07.2018
 * Time: 10:16
 */

namespace task1;


class Line
{
  public $x1, $y1, $x2, $y2;

  function __construct(Point $p1, Point $p2)
  {
    $this->x1=$p1->x;
    $this->y1=$p1->y;
    $this->x2=$p2->x;
    $this->y2=$p2->y;
  }

  function __toString()
  {
    return "x1: $this->x1 ; y1: $this->y1 ; $this->x2 ; y2: $this->y2 <br>";
  }
}