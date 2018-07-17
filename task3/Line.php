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
  function __construct(Point $p1, Point $p2)
  {
    $this->p1 = $p1;
    $this->p2 = $p2;
  }

  function __toString()
  {
    return "p1: $this->p1 p2: $this->p2 <br>";
  }
}