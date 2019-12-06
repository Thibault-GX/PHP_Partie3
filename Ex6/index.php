<?php
$exerciseNb = 6;
include '../header.php';
$steps = 20;

while ($steps >= 0)
{
  echo 'Plus que '.$steps.' pas, c\'est presque bon !<br>';
  $steps--;
}

include '../footer.php';
