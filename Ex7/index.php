<?php
$exerciseNb = 7;
include '../header.php';
$steps = 1;

while ($steps <= 100)
{
  echo $steps.' ! On tient le bambou !<br>';
  $steps = $steps + 15;
}

include '../footer.php';
