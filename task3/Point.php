<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 13.07.2018
 * Time: 10:14
 */

namespace task1;


class Point
{
  public $x, $y;

  function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  function __toString()
  {
    return "x: $this->x ; y: $this->y <br>";
  }
}