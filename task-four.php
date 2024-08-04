<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$day = 7;

switch ($day) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    echo 'work day';
    break;
  case 6:
  case 7:
    echo 'weekend';
    break;
  default:
    echo 'unknown day';
}