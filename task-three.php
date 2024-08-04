<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$age = 333;

if ($age >= 18 && $age <= 65) {
  echo 'you still have to work';
} elseif ($age > 65) {
  echo 'you have to retire';
} elseif ($age >= 1 && $age <= 17) {
  echo 'you\'re too young to work';
} else {
  echo 'unknown age';
}
