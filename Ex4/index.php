<?php
$exerciseNb = 4;
include '../header.php';
$initialValue = 1;

while ($initialValue < 10)
{
  echo $initialValue.'<br>';
  $initialValue = $initialValue + ($initialValue / 2);
}

include '../footer.php';
