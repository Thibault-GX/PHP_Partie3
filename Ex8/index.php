<?php
$exerciseNb = 8;
include '../header.php';
$steps = 200;

while ($steps >= 0)
{
  echo $steps.' pas ! Enfin !<br>';
  $steps = $steps - 12;
}

include '../footer.php';
