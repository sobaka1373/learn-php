<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 13.07.2018
 * Time: 10:16
 */

namespace task1;


class Line extends Point
{
  public $x1, $y1, $x2, $y2;
  function __construct($x1, $y1, $x2, $y2)
  {
    $this->x1=$x1;
    $this->y1=$y1;
    $this->x2=$x2;
    $this->y2=$y2;
  }
  function lineInfo()
  {
    echo "x1: $this->x1 ; y1: $this->y1 ; $this->x2 ; y2: $this->y2 <br>";
  }
}