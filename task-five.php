<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015'];
$toyota = ['model' => 'B90', 'speed' => 150, 'doors' => 4, 'year' => '1998'];
$opel = ['model' => 'M89', 'speed' => 180, 'doors' => 3, 'year' => '1949'];

$CARS = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($CARS as $name => $CAR) {
  echo "CAR $name";
  echo '<br>';
  echo "{$CAR['model']} {$CAR['speed']} {$CAR['doors']} {$CAR['year']}";
  echo '<br></br>';
}