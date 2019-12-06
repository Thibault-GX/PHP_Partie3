<?php
$exerciseNb = 2;
include '../header.php';
$firstVar = 0;
$secondVar = 84;

while ($firstVar <= 20)
{
  $result = $firstVar * $secondVar;
  echo $result.'<br>';
  $firstVar++;
}

include '../footer.php';
