<?php
$exerciseNb = 3;
include '../header.php';
$goal = 100;
$multiplyValue = 12;

while ($goal >= 10)
{
  $result = $goal * $multiplyValue;
  echo $result.'<br>';
  $goal--;
}

include '../footer.php';
